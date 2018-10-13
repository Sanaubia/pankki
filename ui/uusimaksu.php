<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h2>UUSI MAKSU</h2><br><br>





      <form id = 'uusimaksu'>


        <label>TILI</label>
       <select name="tili" id="tili" size="auto">
            <option value="1">Tili111111</option>
            <option value="2">Tili2</option>
            <option value="3">Tili3</option>
        </select>
        <br>

      <td><tr><label for="saaja">SAAJA</label></td>
      <td><input type="text" name="saaja" id="saaja"><br></td>

      <td><tr><label for="tilinumero">TILINUMERO</label></td>
      <td><input type="text" name="tilinumero" id="tilinumero"></td><br>

      <td><tr><label for="viite">VIITE</label></td>
<td><input type="text" name="viite" id="viite"><br></td><br>

      <td><tr><label for="viesti">VIESTI</label></td>
      <td><textarea name ="viesti" id="viesti" placeholder="Syötä viesti tarvittaessa"></textarea><br></td>

      <td><tr><label for="maara">MÄÄRÄ</label></td>
      <td><input type="text" name="maara" id="maara" placeholder="0.0€"><br></td>

      <td><tr><label for="pvm">ERÄPÄIVÄ</label></td>
      <td><input type="text" name="pvm" id="pvm" placeholder="31.12.2018"><br></td>
      </form>

      <input type="radio" name="kuitti" value="kuitti"> Kuitti
      <input type="radio" name="kuitti" value="eikuitti"> Ei kuittia<br><br>
      <button onclick="hyvaksyLasku()">Hyväksy</button>
      <button onclick="peruuta()">Peruuta</button>





  </body>
</html>
