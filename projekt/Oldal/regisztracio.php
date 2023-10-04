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
  <link rel="icon" href="images/favicon.png">
</head>
<body>
    <?php
        include("includes/menuRegisz.inc.php");
    ?>
    <div class="container-fluid">
      <div class="row content">
        <div class="col-12 regisztracio">
            <form method="POST">
                <table>
                    <tr>
                        <td colspan="2"><h2>Regisztráció</h2></td>
                    </tr>
                    <tr>
                        <td align="right">Felhasználónév: </td>
                        <td><input type="text" id="username" name="username" placeholder="username" required></td>
                    </tr>
                    <tr>
                        <td align="right">Születési idő:</td>
                        <td><input type="date" id="szulido" name="szulido" value="2023-10-05" min="1930-01-01" max="2023-10-05" /></td>
                    </tr>
                    <tr>
                        <td align="right">Jelszó: </td>
                        <td><input type="password" id="pass" name="pass" placeholder="password" required></td>
                    </tr>
                    <tr>
                        <td align="right">Jelszó mégegyszer: </td>
                        <td><input type="password" id="password_re" name="password_re" placeholder="password" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" id="reg" name="reg" value="Regisztrálok"></td>
                    </tr>
                </table>
            </form>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>
