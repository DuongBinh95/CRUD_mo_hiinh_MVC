<?php

/**
 * Created by PhpStorm.
 * User: duong
 * Date: 6/13/17
 * Time: 10:24 AM
 */
class database
{

    public function connectDB(){
        $servername = 'localhost';
        $username = 'root';
        $passwd = '123456';
        try{
            $conn = new PDO("mysql:host=$servername;dbname=manage_libraries" , $username , $passwd);
            $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch (PDOException $e){
            echo "Connected fails: " . $e->getMessage();
        }
    }

}
