<?php

    class Model extends Db{
        protected function MufajokM(){
            $sql="SELECT * FROM mufajok";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt;
        }

        protected function PosztokM(){
            $sql="SELECT * FROM posztok INNER JOIN felhasznalok ON posztok.felhasznalok_felhasznalok_id=felhasznalok.felhasznalok_id where engedelyezve = 'Igen'";
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
        protected function regM($data){
            $sql="INSERT INTO felhasznalok(username,password,szuletesi_datum,jogosultsag) VALUES(?,?,?,'2')";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute($data);
            header("location:bejelentkezes.php");
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
                return false;
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
    }
?>
