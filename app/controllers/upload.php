<?php 

class Upload extends Controller {
    function index() {
        header("Location:" . ROOT . "upload/image");
        die;
    }

    function image() {
        $user = $this->loadModel("user");
        // Fix the method name to match what's actually defined in your User class
        // Using a more conventional name
        if(!$result = $user->check_logged_in()) {  // or isLoggedIn()
            header("Location:" . ROOT . "login");
            die;
        }
        $data['page_title'] = "Upload";
        $this->view("portfolio/upload", $data);
    }
}