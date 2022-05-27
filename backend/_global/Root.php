<?php


    class Root {
        
        public $response = [];
        public $db;
        public $env = '';

        public function __construct() {
            $this->db = new DB;
        }

        public function send_feedback() {
            echo json_encode($this->response);
        }
    }