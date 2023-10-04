<?php
    require("includes/loader.inc.php");
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
    
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
<?php
        include("includes/menu.inc.php");
    ?>
<div class="container-fluid">
  <div class="row content">

    <div class="col-sm-9">
    <?php
        $felhasznalok = new View;
        $felhasznalok->Felhasznalok();
    ?>
    </div>
  </div>
</div>
<script type="text/javascript" src="assets/bootstrap/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>