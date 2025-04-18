// Chỉ chạy một lần duy nhất

<?php
    require_once("database.php");

    class initDatabase extends Database{
        public function create_structure()
        {
            $sql = "CREATE TABLE IF NOT EXISTS user(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            username VARCHAR(30) NOT NULL,
            password VARCHAR(30) NOT NULL,
            role INT(1) NOT NULL DEFAULT 0,
            create_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";

            $this->setQuery($sql);
            $result = $this->excute_query();
            $this->close();

        }
    }

    $myinit = new initDatabase();
    $myinit->create_structure();
?>