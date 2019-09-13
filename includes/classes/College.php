<?php
    require_once('Database.php');


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

        //FUNCTION TO GET ALL COLLEGES
        public static function all(){
            $connection = Database::get_connection();

            $sql = "SELECT * FROM colleges";

            $result = Database::select($sql);

            if($result){
                return $result;
            }else{
                die("Query failed!!");
            }
            
            
        }

        //FUNCTION TO CREATE COLLEGE
        public function create(){
            $connection = Database::get_connection();

            $sql = "INSERT INTO colleges (name, location, user_id) VALUES ('$this->name', '$this->location', $this->user_id);";
            
            $is_inserted = Database::insert($sql);

            if($is_inserted==true){
                echo "College created successfully!!";
            }else{
                $message = Database::get_query_error_message($sql);
                echo $message;
            }
        }

        //FUNCTION TO UPDATE COLLEGE
        public static function update($id, $name, $location, $user_id){
            $connection = Database::get_connection();

            $sql = "UPDATE colleges SET name = '$name', location='$location', user_id='$user_id' WHERE id = $id";
            
            $is_updated = Database::update($sql);

            if($is_updated){
                echo "College update successfully!!";
            }else{
                $message = Database::get_query_error_message($sql);
                echo $message;
            }
        }




    }








?>