<?php

    class Model extends Db{
        protected function MufajokM(){
            $sql="SELECT * FROM mufajok";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt;
        }

        protected function PosztokM(){
            $sql="SELECT * FROM posztok INNER JOIN felhasznalok ON posztok.felhasznalok_felhasznalok_id=felhasznalok.felhasznalok_id";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt;
        }

        protected function FelhasznalokM(){
            $sql="SELECT * FROM felhasznalok INNER JOIN jogosultsagok ON felhasznalok.jogosultsag = jogosultsagok.jogosultsag_id";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt;
        }
    }
?>
