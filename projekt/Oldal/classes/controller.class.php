<?php

    class Controller extends Model{
        public function Reg($data){
            $this->regM($data);
        }
        public function loginUser($username, $pwd){
            $this->login($username, $pwd);        
        }
    }

?>