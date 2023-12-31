<?php

    class View extends Model{
        
        public function Mufajok(){
            $stmt=$this->MufajokM();
            echo '<h4>Műfajok</h4>';
            while($row=$stmt->fetch())
            {
                echo'
                <form method="POST">
                <input type="hidden" id="mufajok_id" name="mufajok_id" value="'.$row["mufajok_id"].'">
                <input type="submit" id="mufaj" name="mufaj" value="'.$row["mufaj_neve"].'">
                </form>
                ';
            }
        }

        public function MufajSzerint($mufaj){
            $stmt=$this->MufajSzerintM($mufaj);
            while($row=$stmt->fetch())
            {
                echo'
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-subtitle">'.$row["username"].'</h6>
                        <h5 class="card-title">'.$row["cim"].'</h5>
                        <p class="card-text">'.$row["bejegyzes"].'</p>
                    </div>
                </div>
                ';
            }
        }

        public function Posztok(){
            $stmt=$this->PosztokM();
            while($row=$stmt->fetch())
            {
                echo'
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-subtitle">'.$row["username"].'</h6>
                        <h5 class="card-title">'.$row["cim"].'</h5>
                        <p class="card-text">'.$row["bejegyzes"].'</p>
                    </div>
                </div>
                ';
            }
        }

        public function ReqPosztok(){
            $stmt=$this->reqPosztokM();
            echo ' <h2>Engedélyezés</h2> ';
            while($row=$stmt->fetch())
            {
                echo'
                <div class="card">
                    <div class="card-body">
                        <form method="POST">
                            <table>
                                <tr width="100%">
                                    <td width="80%">
                                        <h6 class="card-subtitle">'.$row["username"].'</h6>
                                        <h5 class="card-title">'.$row["cim"].'</h5>
                                        <p class="card-text">'.$row["bejegyzes"].'</p>
                                        <input type="hidden" name="id" value="'.$row["posztok_id"].'">
                                    </td>
                                    <td width="20%" align="right">
                                        <input type="submit" name="ok" value="OK" class="ok"></input>
                                        <input type="submit" name="no" value="NO" class="no"></input>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
                ';
            }           
        }

        public function Felhasznalok(){
            $stmt=$this->FelhasznalokM();
            echo '
                <h2>Jogosultságok</h2>
                <table>
                    <tr> 
                        <th>Felhasználónév</th>
                        <th>Jogosultság</th>
                        <th>  </th>
                    </tr>';

            while($row=$stmt->fetch())
            {
                echo '
                <form method="POST">
                <tr>
                        <td>'.$row["username"].'</td>
                        <td>
                            <select name="jog">
                                <option value="'.$row["jogosultsag_id"].'" selected>'.$row["jogosultsag_nev"].'</option>
                                <option value="4">Szerkesztő</option>
                                <option value="2">Felhasználó</option>
                            </select>
                        </td>
                        <td>
                            <input type="hidden" name="id" value="'.$row["felhasznalok_id"].'">
                            <input type="submit" id="modositas" name="modositas" value="Módosítás">
                        </td>
                      </tr>
                </form>';
            }
            echo '</table>';
        }

        public function Profil(){
            $stmt=$this->profilM();
            echo'
                <form method="POST">
                    <table>
                        <tr>
                            <td colspan="2"><h2>Felhasználói profil módosítása</h2></td>
                        </tr>
            ';
            while($row=$stmt->fetch())
            {
                echo '
                        <tr>
                            <td align="right">Felhasználónév: </td>
                            <td><input type="text" id="username" name="username" value="'.$row["username"].'" required></td>
                        </tr>
                        <tr>
                            <td align="right">Jelszó: </td>
                            <td><input type="password" id="pass" name="pass" value="'.$row["password"].'" required></td>
                        </tr>
                        <tr>
                            <td align="right">Jelszó mégegyszer: </td>
                            <td><input type="password" id="pass_re" name="pass_re" value="'.$row["password"].'" required></td>
                        </tr>
                        <tr>
                            <input type="hidden" name="id" value="'.$row["felhasznalok_id"].'">
                            <td colspan="2" align="center"><input type="submit" id="szerk" name="szerk" value="Módosítás"></td>
                        </tr>
                    </table>
                </form>
                ';
            }
        }
        
        public function Uj_Bejegyzes(){
            $stmt=$this->MufajokM();
            echo'
                <form method="POST">
                    <table>
                        <tr>
                            <td colspan="2"><h2>Új bejegyzés írása</h2></td>
                        </tr>
                        <tr>
                            <td align="right">Cím:</td>
                            <td><input type="text" name="cim" id="cim" placeholder="cím" style="width: 100%;"></td>
                        </tr>
                        <tr>
                            <td align="right">Tartalom:</td>
                            <td><input type="text" id="szoveg" name="szoveg" rows="8" cols="10" style="width: 100%; height: 25vh;"></td>
                        <tr>    
                            <td align="right">Műfaj:</td>
                            <td>
                                <select name="mufaj" id="mufaj">
                        ';
                
                        while($row=$stmt->fetch()){
                            echo'
                                <option value="'.$row["mufajok_id"].'">'.$row["mufaj_neve"].'</option>
                            ';}
            echo '              </select>
                            </td>    
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" name="feltolt" id="feltolt" value="Elküld"></td>
                        </tr>
                    </table>
                </form>';
        }
    }
    
?>