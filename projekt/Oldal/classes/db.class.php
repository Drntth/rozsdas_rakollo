<?php

    class Db{
        private $host= 'localhost';
        private $user= 'root';
        private $pwd= '';
        private $database= 'rozsdas_rakollo';

        protected function connect(){
            try{
                $dsn='mysql:host='.$this->host.';dbname='.$this->database;
                $pdo=new PDO($dsn, $this->user, $this->pwd);
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                return $pdo;
            }
            catch(PDOException $error)
            {
                echo "Kapcsolodási hiba:". $error->getMessage();
            }
        }
    }

?>