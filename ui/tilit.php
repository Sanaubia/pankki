<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    require "connection.php";
    $sql="SELECT * FROM tili";
    $resultObject = $db->query($sql);
    ?>

    <select name="valittu">
    <?php
      foreach($resultObject as $row) {
        echo '<option value="'.$row['Tilinumero'].'">'.$row['Saldo'].'</option>';
      }
    ?>


  </body>
</html>
