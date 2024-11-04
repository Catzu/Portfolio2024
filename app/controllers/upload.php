<?php 

class Upload extends Controller{
    function index() {
        $data['page_title'] = "upload";
        $this->view("portfolio/upload", $data);
    }
}