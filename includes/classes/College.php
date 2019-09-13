<?php

    class College{
        public $id;
        public $name;
        public $location;
        public $user_id;
        public $datetime;


        //CONSTRUCTOR FUNCTION
        public function __construct($name, $location, $user_id){
            $this->name = $name;
            $this->location = $location;
            $this->user_id = $user_id;
        }

        //FUNCTION TO CREATE COLLEGE
        public function create_college(){
            $sql = "INSERT INTO colleges (name, location, user_id, datetime) VALUES ($this->name, $this->location, $this->user_id)";
            
            $res = mysqli_query($connection, $sql);

            if($res){
                return true;
            }else{
                return false;
            }
        }
    }








?>