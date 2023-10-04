<?php
session_start();
    if($_SESSION["belepett"] != true)
    {
        header("location:index.php");
        session_destroy();
    }
?>