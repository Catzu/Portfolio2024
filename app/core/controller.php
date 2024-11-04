<?php

class Controller {
    protected function loadModel($model) {
        if(file_exists("../app/models/" . strtolower($model) . ".php")) {
            require_once "../app/models/" . strtolower($model) . ".php";
            return new $model();
        }
        return false;
    }

    protected function view($path, $data = []) {
        if(file_exists("../app/views/" . $path . ".php")) {
            require "../app/views/" . $path . ".php";
        } else {
            require "../app/views/404.php";
        }
    }
}