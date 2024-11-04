<?php
class Upload_file {
    private $db;
    private $allowed_image_types = ['image/jpeg', 'image/png', 'image/gif'];
    private $max_image_size = 5242880; // 5MB
    private $upload_dir = 'uploads/';

    public function __construct() {
        $this->db = new Database();
        
        if (!file_exists($this->upload_dir)) {
            mkdir($this->upload_dir, 0755, true);
        }
    }

    public function upload($POST, $FILES) {
        try {
            // Validate basic inputs
            if (empty($POST['title'])) {
                throw new Exception("Title is required");
            }

            if (empty($POST['date'])) {
                throw new Exception("Date is required");
            }

            if (empty($POST['description'])) {
                throw new Exception("Description is required");
            }

            // Initialize file paths
            $image_path = '';

            // Handle image upload if present
            if (!empty($FILES['image']['name'])) {
                if ($FILES['image']['error'] !== UPLOAD_ERR_OK) {
                    throw new Exception("Image upload error: " . $this->getUploadErrorMessage($FILES['image']['error']));
                }

                if (!in_array($FILES['image']['type'], $this->allowed_image_types)) {
                    throw new Exception("Invalid image type. Allowed types are: JPEG, PNG, GIF");
                }

                if ($FILES['image']['size'] > $this->max_image_size) {
                    throw new Exception("Image size exceeds limit of 5MB");
                }

                $image_path = $this->moveUploadedFile($FILES['image'], 'image');
            }

            // Prepare database entry
            $url_address = $this->generateUrlAddress();
            
            $data = [
                'url_address' => $url_address,
                'title' => $POST['title'],
                'description' => $POST['description'],
                'date' => date("Y-m-d H:i:s", strtotime($POST['date'])),
                'image' => $image_path,
            ];

            // Insert into database using your Database class write method
            $query = "INSERT INTO projects (url_address, title, description, date, image) 
                     VALUES (:url_address, :title, :description, :date, :image)";

            $result = $this->db->write($query, $data);

            if (!$result) {
                if ($image_path && file_exists($image_path)) {
                    unlink($image_path);
                }
                throw new Exception("Failed to save to database");
            }

            return [
                'success' => true,
                'message' => 'Upload successful'
            ];

        } catch (Exception $e) {
            return [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    }

    private function moveUploadedFile($file, $type) {
        $file_extension = pathinfo($file['name'], PATHINFO_EXTENSION);
        $unique_filename = $this->generateUrlAddress() . '.' . $file_extension;
        $destination = $this->upload_dir . $type . '_' . $unique_filename;

        if (!move_uploaded_file($file['tmp_name'], $destination)) {
            throw new Exception("Failed to move uploaded " . $type);
        }

        return $destination;
    }

    private function generateUrlAddress() {
        return time() . '_' . rand(1000, 9999);
    }

    private function getUploadErrorMessage($error_code) {
        switch ($error_code) {
            case UPLOAD_ERR_INI_SIZE:
                return "The uploaded file exceeds the upload_max_filesize directive in php.ini";
            case UPLOAD_ERR_FORM_SIZE:
                return "The uploaded file exceeds the MAX_FILE_SIZE directive in the HTML form";
            case UPLOAD_ERR_PARTIAL:
                return "The uploaded file was only partially uploaded";
            case UPLOAD_ERR_NO_FILE:
                return "No file was uploaded";
            case UPLOAD_ERR_NO_TMP_DIR:
                return "Missing a temporary folder";
            case UPLOAD_ERR_CANT_WRITE:
                return "Failed to write file to disk";
            case UPLOAD_ERR_EXTENSION:
                return "File upload stopped by extension";
            default:
                return "Unknown upload error";
        }
    }
}