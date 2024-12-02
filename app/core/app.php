<?php

class App {
    // Private properties to store the controller, method, and parameters
    private $controller = "home";
    private $method = "index";
    private $params = [];

     // The constructor is called when the App class is instantiated
    public function __construct() {
        // Split the URL into an array
        $url = $this->splitURL();

        // Check if the first part of the URL corresponds to a controller file
        if(file_exists("../app/controllers/". strtolower($url[0]) .".php")) {
            // If it does, set the controller to the matched file
            $this->controller = strtolower($url[0]);
            // Remove the first element from the $url array
            unset($url[0]);
        }

        // Load the controller file
        require "../app/controllers/". $this->controller .".php";
        // Create an instance of the controller class
        $this->controller = new $this->controller;

        // Check if the second part of the URL corresponds to a method in the controller
        if(isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                // If it does, set the method to the matched method
                $this->method = $url[1];
                // Remove the second element from the $url array
                unset($url[1]);
            }
        }

        // Run the class and method with the remaining parameters
        $this->params = array_values($url);
        call_user_func_array([$this->controller,$this->method], $this->params);
    }

    // Helper function to split the URL into an array
    private function splitURL() {
        $url = isset($_GET['url'])? $_GET['url']: "home";
        return explode("/", filter_var(trim($url, "/"),FILTER_SANITIZE_URL));
    }

}