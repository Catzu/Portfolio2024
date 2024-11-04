<?php

Class Login extends Controller {
    function index() {
        $data['page_title'] = "Login";
        $data['error'] = "";

        // Check if there is an error message in the session
        if(isset($_SESSION['error'])) {
            // If so, store it in the $data array and unset the session variable
            $data['error'] = $_SESSION['error'];
            unset($_SESSION['error']);
        }

        // Check if the user has submitted the login form
        if(isset($_POST['username'])) {
            // Load the user model
            $user = $this->loadModel("user");
            // If the user model is loaded successfully, attempt to log the user in
            if($user) {
                $user->login($_POST);
                // If there is an error, store it in the session and the $data array
                if(isset($_SESSION['error'])) {
                    $data['error'] = $_SESSION['error'];
                }
            }
        }

        // Render the portfolio/login view and pass the $data array
        $this->view("portfolio/login", $data);
    }
}