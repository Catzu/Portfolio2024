<?php

Class Signup extends Controller {
    function index()
    {
        // Set the page title for the view
        $data['page_title'] = "Signup";
        // Initialize the error message
        $data['error'] = isset($_SESSION['error']) ? $_SESSION['error'] : "";

        // Check if the user has submitted the signup form
        if(isset($_POST['email'])) {
            // Load the User model (note the capital U)
            $user = $this->loadModel("User");
            // If the User model is loaded successfully, attempt to sign the user up
            if($user) {
                $user->signup($_POST);
            } else {
                // If the User model could not be loaded, store the error in the session
                $_SESSION['error'] = "Could not load user model";
            }
        } elseif(isset($_POST['username']) && !isset($_POST['email'])) {
            // If the user has submitted a login form instead of a signup form,
            // load the User model and attempt to log the user in
            $user = $this->loadModel("User");
            if($user) {
                $user->login($_POST);
            } else {
                // If the User model could not be loaded, store the error in the session
                $_SESSION['error'] = "Could not load user model";
            }
        }
        
        // Render the portfolio/signup view and pass the $data array
        $this->view("portfolio/signup", $data);
    }
}