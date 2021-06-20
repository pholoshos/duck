<?php

    header('Content-Type: application/json');
    
    class Data extends CI_Model{

        public function __construct(){
            $this->load->helper('string');
            $this->load->database();
            $this->load->helper('email');
        }

    }

?>