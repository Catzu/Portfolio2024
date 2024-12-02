<?php
Class Posts {
    private $db;
    // Function to retrieve all posts from the database
    function get_all() {
        // Define the SQL query to select all projects ordered by date in descending order, with a limit of 12 results
        $query = "SELECT * FROM projects ORDER BY date DESC LIMIT 12";
        
        // Create a new instance of the Database class
        $this->db = new Database();
        // Execute the query and retrieve the results
        $data = $this->db->read($query);
        // If the results are an array, return them
        if(is_array($data)) {
            return $data;
        }
        // If the results are not an array, return false
        return false;
    }
}