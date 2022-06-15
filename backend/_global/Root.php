<?php
    include "../_lib/db.php";
    
    class Root {
        
        public $response = [];
        public $db;
        public $env = '';
        public $error = "";
        public $is_succesful = false;

        public function __construct() {
            $this->db = new DB();
        }

        public function send_feedback() {
            echo json_encode($this->response);
        }

        public function check_for_errors() {

            if ($this->error !=="") {

                $this->response['success'] = false;
                $this->response['feedback'] = $this->error;
                $this->send_feedback();
                exit();

            }
        }
    }