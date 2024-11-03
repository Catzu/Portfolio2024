<?php 

class home extends Controller{
    function index() {
        $data['page_title'] = "That Nguyen";
        $this->view("portfolio/index", $data);
    }
}