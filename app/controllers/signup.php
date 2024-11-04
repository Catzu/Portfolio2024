<?php

Class Signup extends Controller 
{
    function index()
    {
        $data['page_title'] = "Signup";
        $data['error'] = isset($_SESSION['error']) ? $_SESSION['error'] : "";

        if(isset($_POST['email'])) {
            $user = $this->loadModel("User"); // Note the capital U
            if($user) {
                $user->signup($_POST);
            } else {
                $_SESSION['error'] = "Could not load user model";
            }
        } elseif(isset($_POST['username']) && !isset($_POST['email'])) {
            $user = $this->loadModel("User");
            if($user) {
                $user->login($_POST);
            } else {
                $_SESSION['error'] = "Could not load user model";
            }
        }
        
        $this->view("portfolio/signup", $data);
    }
}