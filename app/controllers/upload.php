<?php 
class Upload extends Controller {
    function index() {
        $user = $this->loadModel("user");
        if(!$result = $user->check_logged_in()) {
            header("Location:" . ROOT . "login");
            die;
        }

        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $uploader = $this->loadModel("upload_file");
            $result = $uploader->upload($_POST, $_FILES);
            
            if($result['success']) {
                header("Location:" . ROOT . "home");
                die;
            } else {
                $_SESSION['upload_error'] = $result['message'];
                header("Location:" . ROOT . "upload");
                die;
            }
        }

        $data['page_title'] = "Upload";
        $this->view("portfolio/upload", $data);
    }
}