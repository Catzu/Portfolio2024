<?php 

class Login extends Controller{
    function index() {
        $data['page_title'] = "login";
        $this->view("portfolio/login", $data);
    }
}