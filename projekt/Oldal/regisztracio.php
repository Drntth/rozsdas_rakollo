<?php
    require("includes/loader.inc.php");

    if(isset($_POST["reg"])){
        if($_POST["pass"] <> $_POST["password_re"]){
            echo '<script>alert("A jelszó nem egyezik")</script>'; 
        }
        else{
            $data = array($_POST["username"],$_POST["pass"],$_POST["szulido"]);
            $reg = new Controller;
            $reg->Reg($data);
        }
    }
?>
<!DOCTYPE html>
<html lang="hu">
<head>
  <title>Rozsdás Rákolló</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="styles/styles.css" rel="stylesheet" type="text/css">
  <style>
    .row.content {height: 70%;}
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
    <?php
        include("includes/menu.inc.php");
    ?>

    <div>   
            <form method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>Felhasználónév: </td>
                        <td><input type="text" id="username" name="username" placeholder="username" required></td>
                    </tr>
                    <tr>
                        <td>Születési idő:</td>
                        <td><input type="date" id="szulido" name="szulido" value="2023-10-05" min="1930-01-01" max="2023-10-05" /></td>
                    </tr>
                    <tr>
                        <td>Jelszó: </td>
                        <td><input type="password" id="pass" name="pass" placeholder="password" required></td>
                    </tr>
                    <tr>
                        <td>Jelszó mégegyszer: </td>
                        <td><input type="password" id="password_re" name="password_re" placeholder="password" required></td>
                    </tr>
                </table>
                <input type="submit" id="reg" name="reg" value="Regisztrálok">
            </form>


        </div>

    <script type="text/javascript" src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>
