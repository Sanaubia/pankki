<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h2>UUSI MAKSU</h2><br><br>

<table class='d'>
    <tr><td>  <label>TILI</label>
    <td>  <select name="tili" id="tili" size="auto">
          <option value="tili1">Tili111111</option>
          <option value="tili2">Tili2</option>
          <option value="tili3">Tili3</option>
      </select>
<br>

      <form id = 'uusimaksu'>
      <tr><td><label for="saaja">SAAJA</label>
      <td><input type="text" name="saaja" id="saaja" size="49"> <br>

      <tr><td><label for="tilinumero">TILINUMERO</label>
      <td><input type="text" name="tilinumero" id="tilinumero" size="49"> <br>

      <tr><td><label for="viite">VIITE</label>
      <td><input type="text" name="viite" id="viite" size="49"> <br>

      <tr><td><label for="viesti">VIESTI</label>
      <td><textarea id="viesti" rows="8" cols="50" placeholder="Syötä viesti tarvittaessa"></textarea>

      <tr><td><label for="määrä">MÄÄRÄ</label>
      <td><input type="text" name="määrä" id="maara" size="20" placeholder="0.0€">

      <tr><td><label for="pvm">ERÄPÄIVÄ</label>
      <td><input type="text" name="pvm" id="pvm" size="20" placeholder="31.12.2018"> <br>

      </form>
      <tr><td><input type="radio" name="kuitti" value="kuitti"> Kuitti <br>
      <td><input type="radio" name="kuitti" value="eikuitti"> Ei kuittia
      <tr><td><button onclick="hyvaksyLasku()">Hyväksy</button><br>
      <td><button onclick="peruuta()">Peruuta</button>

</table>



  </body>
</html>
