<?php 
 function conectar()
     {
         try
             {
                 $pdo = new PDO( "mysql:host=localhost;dbname=classificados_gv", "root", "" );
             }
         catch( PDOException $e )
             {
                 echo $e->getMessage();
             }   
             
         return $pdo; 
     }
