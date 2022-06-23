<?php

    class DB {

        public $db_name = "project_mary_db";
        private $username = "root";
        private $password = "";
        private $host = "localhost";
        private $conn = "";
        public $is_successful = false;
        public $feedback = "";

        public function __construct() {
            $this->conn = mysqli_connect($this->host, $this->username,$this->password, $this->db_name);
        }

        public function query($sql) {
            $this->is_successful = true;
            if (!mysqli_query($this->conn, $sql)) {
                
                $this->feedback = mysqli_error($sql);
                
            }
        }

        public function read($query){

            $this->is_successful = mysqli_query($this->conn, $query);

            if(!$this->is_successful){
                return false;
            }
            else{
                $data = false;
                while($row = mysqli_fetch_assoc($this->is_successful)){
                    $data[] = $row;
                }
                return $data;
            }
            
        }

        public function conn(){
            return $this->conn;
        }
    }