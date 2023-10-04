<?php
    require("includes/loader.inc.php");

    if(isset($_POST["kuldes"]))
    {
        $login=new Controller;
        $login->loginUser($_POST["username"],$_POST["pwd"]);
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
  <style>
    .row.content {height: 70%;}
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
    <?php
        include("includes/menuBej.inc.php");
    ?>
    <div class="container-fluid">
        <div class="row content">
            <div class="col-12 bejelentkezes"> 
                <form method="POST" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td colspan="2"><h2>Bejelentkezés</h2></td>
                        </tr>
                        <tr>
                            <td align="right">Felhasználónév: </td>
                            <td><input type="text" id="username" name="username" placeholder="username" required></td>
                        </tr>
                        <tr>
                            <td align="right">Jelszó: </td>
                            <td><input type="password" id="pwd" name="pwd" placeholder="password" required></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input type="submit" id="kuldes" name="kuldes" value="Belépek"></td>
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
