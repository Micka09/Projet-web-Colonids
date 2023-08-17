<?php
	class Accesseur {
        public static $bdd = null;

        public static function connexionBDD(){
            $user = 'root';
            $password = '';
            $host = 'localhost';
            $db = 'colonid';
            $dsn = "mysql:dbname=".$db.";host=".$host;


            try {
                ColonidDAO::$bdd = new PDO($dsn, $user, $password);
                ColonidDAO::$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch (PDOException $exception){
                echo ('marche pas: ' . $exception->getMessage());
                exit;
            }

        }
    }
	class ColonidDAO extends Accesseur {

	}
