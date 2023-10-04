<?php

    class View extends Model{
        
        public function Mufajok(){
            $stmt=$this->MufajokM();
            echo '<h4>Műfajok</h4>';
            while($row=$stmt->fetch())
            {
                echo'
                <p>'.$row["mufaj_neve"].'</p>
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
            echo'<table><th>';
            while($row=$stmt->fetch())
            {
                echo'
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-subtitle">'.$row["username"].'</h6>
                        <h5 class="card-title">'.$row["cim"].'</h5>
                        <p class="card-text">'.$row["bejegyzes"].'</p>
                        <input type="submit" name="ok" value="OK"></input>
                        <input type="submit" name="no" value="NO"></input>
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
                echo '<tr>
                        <td>'.$row["username"].'</td>
                        <td>
                            <select>
                                <option value="'.$row["jogosultsag_nev"].'" selected>'.$row["jogosultsag_nev"].'</option>
                                <option value="Szerkesztő">Szerkesztő</option>
                                <option value="Felhasználó">Felhasználó</option>
                            </select>
                        </td>
                        <td>
                            <input type="submit" id="modositas" name="modositas" value="Módosítás">
                        </td>
                      </tr>';
            }
            echo '</table>';
        }

    }
    
?>