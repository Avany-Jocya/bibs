<?php
abstract class ConnexionManager {
     private static $connexion;

     public static function setConnexionBdd(){
        self::$connexion = new PDO("mysql:host=$_ENV[MYSQL_HOST];dbname=$_ENV[MYSQL_DATABASE];chartset=utf8", $_ENV['MYSQL_USER'],$_ENV['MYSQL_PASSWORD']);
        self::$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
     }
     
     protected function getConnexionBdd():object{
        if(self::$connexion === null){
            self::setConnexionBdd();
        }
        return self::$connexion;
     }


 }

?>