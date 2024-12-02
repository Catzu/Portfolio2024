<?php

class Controller {
    protected function loadModel($model) {
        // Check if the model file exists
        if(file_exists("../app/models/" . strtolower($model) . ".php")) {
            // If it does, include the file and return a new instance of the model
            require_once "../app/models/" . strtolower($model) . ".php";
            return new $model();
        }
        // If the file doesn't exist, return false
        return false;
    }

    // Helper function to render a view
    protected function view($path, $data = []) {
        // Check if the view file exists
        if(file_exists("../app/views/" . $path . ".php")) {
            // If it does, include the file and pass the data array
            require "../app/views/" . $path . ".php";
        } else {
            // If the file doesn't exist, include the 404 view
            require "../app/views/404.php";
        }
    }
}