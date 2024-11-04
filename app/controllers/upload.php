<?php 
class Upload extends Controller {
    function index() {
        // Load the user model and check if the user is logged in
        $user = $this->loadModel("user");
        if(!$result = $user->check_logged_in()) {
            // If the user is not logged in, redirect them to the login page
            header("Location:" . ROOT . "login");
            die;
        }

        // Check if the user has submitted the file upload form
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            // Load the upload_file model
            $uploader = $this->loadModel("upload_file");
            // Attempt to upload the file
            $result = $uploader->upload($_POST, $_FILES);
            
            // If the upload was successful, redirect the user to the home page
            if($result['success']) {
                header("Location:" . ROOT . "home");
                die;
            } else {
                // If there was an error, store the error message in the session and redirect to the upload page
                $_SESSION['upload_error'] = $result['message'];
                header("Location:" . ROOT . "upload");
                die;
            }
        }

        // Set the page title for the view
        $data['page_title'] = "Upload";
        // Render the portfolio/upload view and pass the $data array
        $this->view("portfolio/upload", $data);
    }
}