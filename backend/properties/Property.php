<?php

    class Property extends Root {

        public $location = '';
        private $user = 1;

        public function __construct() {
            parent::__construct();
            $_POST = json_decode(file_get_contents("php://input"),true);
        }

        public function get_data() {
            if ($this->env == "testing") {
                $this->location = "Okuokoko";
            } else {
                $this->location = $_POST['location'];
            }
    
        }

        public function insert_data() {
            $this->db->query("INSERT INTO properties (location, user) VALUES('$this->location','$this->user')");
        }

        // Check if successful
        public function check_success() {
            
        
            if ($this->db->is_successful) {
                $this->response['feedback'] = "Property successfully inserted";
                $this->response['success'] = true;
            } else {
                $this->response['feedback'] = $this->db->feedback;
                $this->response['success'] = false;
            }
        }
    

    }
