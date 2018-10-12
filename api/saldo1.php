<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    require "connection.php";
    $sql="SELECT * FROM tilit";
    $resultObject = $db->query($sql);
    ?>

    <select name="valittu">
    <?php
      foreach($resultObject as $row) {
        echo '<option value="'.$row['tnumero'].'">'.$row['saldo'].'</option>';
      }
    ?>
  

  </body>
</html>
