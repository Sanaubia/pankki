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

      <label for="saaja">SAAJA</label>
      <input type="text" name="saaja" id="saaja"><br>

      <label for="tilinumero">TILINUMERO</label>
      <input type="text" name="tilinumero" id="tilinumero"><br>

      <label for="viite">VIITE</label>
      <input type="text" name="viite" id="viite"><br>

      <label for="viesti">VIESTI</label>
      <textarea name ="viesti" id="viesti" placeholder="Syötä viesti tarvittaessa"></textarea><br>

      <label for="maara">MÄÄRÄ</label>
      <input type="text" name="maara" id="maara" placeholder="0.0€"><br>

      <label for="pvm">ERÄPÄIVÄ</label>
      <input type="text" name="pvm" id="pvm" placeholder="31.12.2018"><br>
      </form>

      <input type="radio" name="kuitti" value="kuitti"> Kuitti
      <input type="radio" name="kuitti" value="eikuitti"> Ei kuittia<br><br>
      <button onclick="hyvaksyLasku()">Hyväksy</button>
      <button onclick="peruuta()">Peruuta</button>





  </body>
</html>
