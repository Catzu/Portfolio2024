<?php

class User {
    private $db;

    // Constructor to create a Database instance
    public function __construct() {
        $this->db = new Database();
    }

    // Function to handle user signup
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

            // Prepare the data for the database insert
            $arr = [
                'username' => $POST['username'],
                'password' => $password,
                'email' => $POST['email'],
                'url_address' => $url_address
            ];

            // Insert the user data into the database
            $query = "INSERT INTO users (username, password, email, url_address) 
                     VALUES (:username, :password, :email, :url_address)";

            $result = $this->db->write($query, $arr);
            
            // If the insert was successful, redirect the user to the login page
            if($result) {
                header("Location: " . ROOT . "login");
                die;
            }
        }
        // If there was an error, store it in the session and return false
        $_SESSION['error'] = "Please enter valid information";
        return false;
    }

    // Helper function to generate a unique URL address for the user's profile
    private function generateUrlAddress() {
        $rand = rand(1000, 9999);
        return $rand;
    }

    // Function to handle user login
    public function login($POST) {
        // Check if the necessary form fields are set
        if(isset($POST['username']) && isset($POST['password'])) {
            
            // Get user by username
            $arr['username'] = $POST['username'];
            $query = "SELECT * FROM users WHERE username = :username LIMIT 1";
            $data = $this->db->read($query, $arr);

            // If the user is found, verify the password
            if(is_array($data) && isset($data[0])) {
                // Verify password
                if(password_verify($POST['password'], $data[0]->password)) {
                    $_SESSION['user_id'] = $data[0]->id;
                    $_SESSION['user_name'] = $data[0]->username;
                    $_SESSION['user_url'] = $data[0]->url_address;
                    
                    // Redirect after successful login
                    header("Location: " . ROOT . "upload");
                    die;
                }
            }
            // If the login failed, store the error message in the session
            $_SESSION['error'] = "Wrong username or password";
        } else {
            // If the required fields are not set, store an error message in the session
            $_SESSION['error'] = "Please enter valid username and password";
        }
        return false;
    }

    // Function to check if the user is logged in
    public function check_logged_in() {
        // Check if the user's URL address is set in the session
        if(isset($_SESSION['user_url'])) {
            $arr['user_url'] = $_SESSION['user_url'];
            $query = "select * from users where url_address = :user_url limit 1";
            $data = $this->db->read($query, $arr);
            // If the user is found, store the user session variables and return true
            if(is_array($data)) {
                $_SESSION['id'] = $data[0]->id;
                $_SESSION['user_name'] = $data[0]->username;
                $_SESSION['user_url'] = $data[0]->url_address;
                return true;
            }
        }
        // If the user is not logged in, return false
        return false;
    }
}