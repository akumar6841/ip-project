<?php
    //IMPORT CONFIGURATION FILE
    require_once('config.php');


    class Database{
        
        
        //STATIC FUNCTION TO GET CONNECTION
        public static function get_connection(){
            $connection = mysqli_connect(HOST, DB_USER, DB_PASS, DB_NAME);

            if(!$connection){
                die("Database connection failed!!". mysqli_error($connection));
            }else{
                return $connection;
            }
        }


        //STATIC FUNCTION TO RUN INSERT QUERY
        public static function insert($sql){
            $connection = self::get_connection();
            $result = mysqli_query($connection, $sql);

            if(!$result){
                return get_query_error_message($sql);
            }else{
                return true;
            }
        }

        //STATIC FUNCTION TO RUN UPDATE QUERY
        public static function update($sql){
            $connection = self::get_connection();
            $result = mysqli_query($connection, $sql);

            if(!$result){
                return self::get_query_error_message($sql);
            }else{
                return true;
            }
        }

        //FUNCTION TO GET ERROR MESSAGE IF QUERY FAILED
        public static function get_query_error_message($sql){
            $connection = self::get_connection();
            if($env==DEV){
                return "Your Query : ". $sql. " failed due to ".mysqli_error($connection);
            }else{
                return 'Something went wrong';
            }
        }

        
    }





?>