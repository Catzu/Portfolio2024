<?php
Class Posts {
    private $db;
    function get_all() {
        $query = "SELECT * FROM projects ORDER BY date DESC LIMIT 12";
        
        $this->db = new Database();
        $data = $this->db->read($query);
        if(is_array($data)) {
            return $data;
        }
        return false;
    }
}