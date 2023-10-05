<?php

    class Controller extends Model{
        public function Reg($data){
            $this->regM($data);
        }
        public function loginUser($username, $pwd){
            $this->login($username, $pwd);        
        }
        public function EngedC($id,$igen){
            $this->engedM($id,$igen);
        }
        public function NemEngedC($id){
            $this->nemEngedM($id);
        }
        public function JogC($id,$jog){
            $this->JogM($id,$jog);
        }
        public function modprofC($id,$username, $pwd){
            $this->modprofM($id,$username, $pwd);        
        }
    }

?>