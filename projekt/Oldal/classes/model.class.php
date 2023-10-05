<?php

    class Model extends Db{
        protected function MufajokM(){
            $sql="SELECT * FROM mufajok";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt;
        }

        protected function profilM(){
            $sql="SELECT * FROM felhasznalok WHERE felhasznalok_id=:id";
            $stmt=$this->connect()->prepare($sql);
            $stmt->bindParam(":id",$_SESSION["id"]);
            $stmt->execute();
            return $stmt;
        }

        protected function PosztokM(){
            $sql="SELECT * FROM posztok INNER JOIN felhasznalok ON posztok.felhasznalok_felhasznalok_id=felhasznalok.felhasznalok_id where engedelyezve = 'Igen'";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt;
        }

        protected function MufajSzerintM($mufaj){
            $sql="SELECT * FROM posztok JOIN felhasznalok ON posztok.felhasznalok_felhasznalok_id=felhasznalok.felhasznalok_id JOIN mufajok ON posztok.mufaj=mufajok.mufajok_id where engedelyezve = 'Igen' AND mufajok.mufaj_neve = '$mufaj'";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt;
        }

        protected function FelhasznalokM(){
            $sql="SELECT * FROM felhasznalok INNER JOIN jogosultsagok ON felhasznalok.jogosultsag = jogosultsagok.jogosultsag_id WHERE felhasznalok.jogosultsag <> '1'";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt;
        }
        protected function regM($data){
            $sql="INSERT INTO felhasznalok(username,password,szuletesi_datum,jogosultsag) VALUES(?,?,?,'2')";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute($data);
            header("location:bejelentkezes.php");
        }
        protected function Uj_BejegyzesM($data){
            $sql="INSERT INTO posztok(cim,bejegyzes,mufaj,felhasznalok_felhasznalok_id) VALUES(?,?,?,?)";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute($data);
            switch ($_SESSION["jog"]) {
                case "1":
                    header("location:admin.php");
                  break;
                case "4":
                    header("location:szerkeszto.php");
                  break;
                default:
                    header("location:felhasznalo.php");
                  break;
              }
        }

        protected function login($username, $pwd){
            $sql="SELECT * FROM felhasznalok WHERE username=:username && password=:pwd";
            $stmt= $this->connect()->prepare($sql);
    
            $stmt->bindParam(":username",$username);
            $stmt->bindParam(":pwd",$pwd);
    
            $stmt->execute();
    
            if($stmt->rowCount()>0){
                session_start();
                $_SESSION["belepett"] = true;
                while($row=$stmt->fetch())
                {
                    $_SESSION["nev"] = $row["username"];
                    $_SESSION["id"] = $row["felhasznalok_id"];
                    $_SESSION["jog"] = $row["jogosultsag"];
                    switch ($_SESSION["jog"]) {
                        case "1":
                            header("location:admin.php");
                          break;
                        case "4":
                            header("location:szerkeszto.php");
                          break;
                        default:
                            header("location:felhasznalo.php");
                          break;
                      }
                }
            }
            else
            {
                echo '<script>alert("A megadott adatok nem jók, vagy nem létezik a felhasználói profil")</script>'; ;
            }
        }
        protected function reqPosztokM(){
            $sql="SELECT * FROM posztok INNER JOIN felhasznalok ON posztok.felhasznalok_felhasznalok_id=felhasznalok.felhasznalok_id where engedelyezve = 'Nem'";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt;
        }
        protected function engedM($id,$igen){
            $sql = "UPDATE posztok SET engedelyezve =:igen WHERE posztok_id =:id";
            $stmt=$this->connect()->prepare($sql);
            $stmt->bindParam(":igen",$igen);
            $stmt->bindParam(":id",$id);
            $stmt->execute();
        }
        protected function nemEngedM($id){
            $sql = "DELETE FROM posztok WHERE posztok_id =:id";
            $stmt=$this->connect()->prepare($sql);
            $stmt->bindParam(":id",$id);
            $stmt->execute();
        }
        protected function JogM($id,$jog){
            $sql = "UPDATE felhasznalok SET jogosultsag=:jog WHERE felhasznalok_id=:id";
            $stmt=$this->connect()->prepare($sql);
            $stmt->bindParam(":jog",$jog);
            $stmt->bindParam(":id",$id);
            $stmt->execute();
        }
        protected function modprofM($id,$username, $pwd){
            $sql = "UPDATE felhasznalok SET username=:username, password=:pass WHERE felhasznalok_id=:id";
            $stmt=$this->connect()->prepare($sql);
            $stmt->bindParam(":username",$username);
            $stmt->bindParam(":pass",$pwd);
            $stmt->bindParam(":id",$id);
            $stmt->execute();
        }
    }
?>
