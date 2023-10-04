<?php
    spl_autoload_register("autoLoad");

    function autoLoad($classname){
        $directory="classes/";
        $classname=strtolower($classname);
        $extension=".class.php";

        $path= $directory . $classname . $extension;

        if(!file_exists($path))
        {
            return false;
        }
        include_once $path;
    }
?>