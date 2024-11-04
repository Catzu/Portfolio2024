<?php 

class Signup extends Controller{
    function index() {
        $data['page_title'] = "signup";
        $this->view("portfolio/signup", $data);
    }
}