<?php

    class View extends Model{
        
        public function Mufajok(){
            $stmt=$this->MufajokM();
            echo '<h4>Műfajok</h4> <ul>';
            while($row=$stmt->fetch())
            {
                echo'
                <li>'.$row["mufaj_neve"].'</li>
                ';
            }
            echo '</ul>';
        }

        public function Posztok(){
            $stmt=$this->PosztokM();
            while($row=$stmt->fetch())
            {
                echo'
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">'.$row["cim"].'</h5>
                        <h6 class="card-subtitle mb-2 text-muted">'.$row["username"].'</h6>
                        <p class="card-text">'.$row["bejegyzes"].'</p>
                    </div>
                </div>
                ';
            }
        }

    }
    
?>