<?php 
class Database {
    function db_connect() {
        try {
            // Create a PDO connection string using the defined constants
            $string = DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";";
            // Create a new PDO connection
            $db = new PDO($string, DB_USER, DB_PASS);
            // Set the error mode to throw exceptions
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Return the database connection
            return $db;
        } catch (PDOException $e) {
            // Log the error and die if the connection fails
            error_log("Connection failed: " . $e->getMessage());
            die("Connection failed: " . $e->getMessage());
        }
    }
    
    // Function to read data from the database
    public function read($query, $data = []) {
        try {
            // Get the database connection
            $DB = $this->db_connect();
            // Prepare the SQL statement
            $stm = $DB->prepare($query);

            // If no data is provided, execute the query directly
            if (count($data) == 0) {
                $stm = $DB->query($query);
                $check = 0;
                if ($stm) {
                    $check = 1;
                }
                
            } else { // Otherwise, execute the prepared statement with the provided data
                $check = $stm->execute($data);
            }

             // If the query was successful, return the results as an array of objects
            if($check) {
                return $stm->fetchAll(PDO::FETCH_OBJ);
            } else {
                // If the query failed, return false
                return false;
            }
        } catch (PDOException $e) {
            // Log the error and return false if the query fails
            error_log("Query failed: " . $e->getMessage());
            return false;
        }
    }

    // Function to write data to the database
    public function write($query, $data = []) {
        try {
            // Get the database connection
            $DB = $this->db_connect();
            // Prepare the SQL statement
            $stm = $DB->prepare($query);

            // If no data is provided, execute the query directly
            if (count($data) == 0) {
                $stm = $DB->query($query);
                $check = 0;
                if ($stm) {
                    $check = 1;
                }
            } else { // Otherwise, execute the prepared statement with the provided data
                $check = $stm->execute($data);
            }

            // If the query was successful, return true
            if($check) {
                return true;
            } else {
                // If the query failed, return false
                return false;
            }
        } catch (PDOException $e) {
            // Log the error and return false if the query fails
            error_log("Write failed: " . $e->getMessage());
            return false;
        }
    }
}