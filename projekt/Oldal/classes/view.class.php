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

    }
    
?>