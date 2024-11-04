<?php 
class Database {
    function db_connect() {
        try {
            $string = DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";";
            $db = new PDO($string, DB_USER, DB_PASS);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            error_log("Connection failed: " . $e->getMessage());
            die("Connection failed: " . $e->getMessage());
        }
    }
    
    public function read($query, $data = []) {
        try {
            $DB = $this->db_connect();
            $stm = $DB->prepare($query);

            if (count($data) == 0) {
                $stm = $DB->query($query);
                $check = 0;
                if ($stm) {
                    $check = 1;
                }
            } else {
                $check = $stm->execute($data);
            }

            if($check) {
                return $stm->fetchAll(PDO::FETCH_OBJ);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            error_log("Query failed: " . $e->getMessage());
            return false;
        }
    }

    public function write($query, $data = []) {
        try {
            $DB = $this->db_connect();
            $stm = $DB->prepare($query);

            if (count($data) == 0) {
                $stm = $DB->query($query);
                $check = 0;
                if ($stm) {
                    $check = 1;
                }
            } else {
                $check = $stm->execute($data);
            }

            if($check) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            error_log("Write failed: " . $e->getMessage());
            return false;
        }
    }
}