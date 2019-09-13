<?php
    
    //IMPORT DATABASE FILE
    require_once('./classes/Database.php');

    //FUNCTION TO GET ERROR MESSAGE IF QUERY FAILED
    function get_query_error_message($env,$sql){
        if($env==DEV){
            return "Your Query : ". $sql. " failed due to ".mysqli_error($connection);
        }else{
            return 'Something went wrong';
        }
    }





?>