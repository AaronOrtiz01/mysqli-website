<?php

class CreateDb
{
        protected $servername;
        protected $username;
        protected $password;
        protected $dbname;
        protected $tablename;
        public $con;


    public function __construct(
        $dbname = "Shopping6333",
        $tablename = "customertb",
        $servername = "mysql.junpar21.dreamhosters.com",
        $username = "shopping6333",
        $password = "123456789"
    )
    {
      $this->dbname = $dbname;
      $this->tablename = $tablename;
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;

        $this->con = mysqli_connect($servername, $username, $password);

        if (!$this->con){
            die("Connection error: " . mysqli_connect_error());
        }

        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            $sql = " CREATE TABLE IF NOT EXISTS $tablename
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             username VARCHAR (11) NOT NULL,
                             user_password VARCHAR (11),
                             email VARCHAR (100),
                             user_level INT (1)
                            );";

            if (!mysqli_query($this->con, $sql)){
                echo "Error creating table : " . mysqli_error($this->con);
            }

            $sql = "CREATE TABLE IF NOT EXISTS `servicestb` (
                `id` int NOT NULL,
                `services_name` varchar(25) NOT NULL,
                `services_price` float DEFAULT NULL,
                `services_image` varchar(100) DEFAULT NULL,
                `services_available` int DEFAULT NULL,
                `active` int DEFAULT NULL
                );";
             if (!mysqli_query($this->con, $sql)){
                echo "Error creating table : " . mysqli_error($this->con);
            }
           
            
            $sql = "CREATE TABLE IF NOT EXISTS `workerstb` (
                `worker_id` int NOT NULL,
                `worker_name` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
                `worker_email` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
                `service_type` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
                `worker_img` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
                `appointment_date` date DEFAULT NULL,
                `service_location` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
                `service_quality` int DEFAULT NULL,
                `price` int NOT NULL,
                `worker_active` int NOT NULL
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
              if (!mysqli_query($this->con, $sql)){
                    echo "Error creating table : " . mysqli_error($this->con);
                 }    
        }else{
            return false;
        }
       
    }

    public function getData(){
        $sql = "SELECT * FROM $this->tablename";
        $data = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($data) > 0){
            return $data;
        }
        else{
            return "Empty table ";
        }
    }

}