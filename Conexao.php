<?php 
 try
    {
        $pdo = new PDO( "mysql:host=localhost;dbname=teste", "root", "" );
    }
 catch( PDOException $e )
    {
        echo $e->getMessage();   
    }
