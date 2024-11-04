<?php 

class home extends Controller{
    function index() {
        $data['page_title'] = "That Nguyen";

        $posts = $this->loadModel("posts");
        $result = $posts->get_all();

        $data['posts'] = $result;

        $this->view("portfolio/index", $data);
    }
}