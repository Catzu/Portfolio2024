<?php

Class Login extends Controller {
    function index() {
        $data['page_title'] = "Login";
        $data['error'] = "";

        if(isset($_SESSION['error'])) {
            $data['error'] = $_SESSION['error'];
            unset($_SESSION['error']);
        }

        if(isset($_POST['username'])) {
            $user = $this->loadModel("user");
            if($user) {
                $user->login($_POST);
                if(isset($_SESSION['error'])) {
                    $data['error'] = $_SESSION['error'];
                }
            }
        }

        $this->view("portfolio/login", $data);
    }
}