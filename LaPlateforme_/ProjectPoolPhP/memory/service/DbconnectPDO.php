<?php 

 class DbconnectPDO {

    public static function dbconnect(){

        //version locale
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $db = 'memory';

        //version pour plesk
        // $servername = 'localhost';
        // $username = 'franck-costanzo';
        // $password = 'Tisyoz84!!';
        // $db = 'franck-costanzo_memory';

        try 
        {
            $pdo = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
            // set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } 
        catch(PDOException $e) 
        {
            echo "Connection failed: " . $e->getMessage();
        }

    }

 }

?>