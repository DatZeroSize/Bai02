<?php
    require_once("database.php");

    class User extends Database{
        public function create_1_user($username, $password, $firstname, $lastname, $role)
        {
            $sql = "INSERT INTO user (firstname, lastname, username, password)
                        VALUES ('{$firstname}', '{$lastname}', '{$username}', '{$password}')";
            $this->setQuery($sql);
            $result = $this->excute_query();
            $this->close();
        }
        public function user_signin($username, $password) {
   
            $sql = "SELECT password FROM user WHERE username = '{$username}' LIMIT 1";
            $this->setQuery($sql);
            $user = $this->excute_query();
            $this->close();

            if (!$user) {
                return false;
            }
            
            return ($password === $user['password']);
        }
    }
?>