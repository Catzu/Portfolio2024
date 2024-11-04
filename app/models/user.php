<?php

class User {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function signup($POST) {
        if(isset($POST['username']) && isset($POST['password']) && isset($POST['email'])) {
            
            // Validate input
            if(empty($POST['username']) || empty($POST['password']) || empty($POST['email'])) {
                $_SESSION['error'] = "All fields are required";
                return false;
            }

            // Check if username already exists
            $check = $this->db->read("SELECT * FROM users WHERE username = :username LIMIT 1", 
                ['username' => $POST['username']]);
            
            if($check) {
                $_SESSION['error'] = "Username already exists";
                return false;
            }

            // Check if email already exists
            $check = $this->db->read("SELECT * FROM users WHERE email = :email LIMIT 1", 
                ['email' => $POST['email']]);
            
            if($check) {
                $_SESSION['error'] = "Email already exists";
                return false;
            }

            // Hash password
            $password = password_hash($POST['password'], PASSWORD_DEFAULT);
            
            // Generate URL address (for profile)
            $url_address = $this->generateUrlAddress();

            $arr = [
                'username' => $POST['username'],
                'password' => $password,
                'email' => $POST['email'],
                'url_address' => $url_address
            ];

            $query = "INSERT INTO users (username, password, email, url_address) 
                     VALUES (:username, :password, :email, :url_address)";

            $result = $this->db->write($query, $arr);
            
            if($result) {
                header("Location: " . ROOT . "login");
                die;
            }
        }
        $_SESSION['error'] = "Please enter valid information";
        return false;
    }

    private function generateUrlAddress() {
        $rand = rand(1000, 9999);
        return $rand;
    }

    public function login($POST) {
        if(isset($POST['username']) && isset($POST['password'])) {
            
            // Get user by username
            $arr['username'] = $POST['username'];
            $query = "SELECT * FROM users WHERE username = :username LIMIT 1";
            $data = $this->db->read($query, $arr);

            if(is_array($data)) {
                // Verify password
                if(password_verify($POST['password'], $data[0]->password)) {
                    // Changed from userid to id to match database column name
                    $_SESSION['user_id'] = $data[0]->id;
                    $_SESSION['user_name'] = $data[0]->username;
                    $_SESSION['user_url'] = $data[0]->url_address;
                    
                    // Redirect after successful login
                    // header("Location: " . ROOT . "home");
                    // die;
                    header("Location: http://www.youtube.com/v/T0WepLbWyq0");
                }
            }
            $_SESSION['error'] = "Wrong username or password";
        } else {
            $_SESSION['error'] = "Please enter valid username and password";
        }
        return false;
    }

    public function check_logged_in() {
        if(isset($_SESSION['user_url'])) {
            $arr['user_url'] = $_SESSION['user_url'];
            $query = "select * from users where url_address = :user_url limit 1";
            $data = $this->db->read($query, $arr);
            if(is_array($data)) {
                // Also update these to use 'id' instead of 'userid'
                $_SESSION['user_id'] = $data[0]->id;
                $_SESSION['user_name'] = $data[0]->username;
                $_SESSION['user_url'] = $data[0]->url_address;
                return true;
            }
        }
        return false;
    }
}