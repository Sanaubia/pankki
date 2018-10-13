function loadXMLDoc(page) {
    var xhttp;
    if (window.XMLHttpRequest) {
        // code for modern browsers
        xhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("content").innerHTML = this.responseText;
        }
    };

    xhttp.open("GET", page, true);
    xhttp.send();

}

function peruuta()
{
  document.getElementById("saaja").value = "";
  document.getElementById("tilinumero").value = "";
  document.getElementById("viite").value = "";
  document.getElementById("viesti").value = "";
  document.getElementById("maara").value = "";
  document.getElementById("pvm").value = "";
}


function Saldo()
{
  var url = '../api/saldo1.php';
  var xhttp = new XMLHttpRequest();
  xhttp.open('GET', url, true);
  var jsonData = '';
  var data = '<table class="table table-bordered table-hover">';
  data += '<tr><th>idTili</th><th>Tilinumero</th><th>Asiakasnumero</th><th>Saldo</th></tr>';
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      jsonData = JSON.parse(xhttp.responseText);
      for (x in jsonData) {
        data +=
          '<tr><td>' +
          jsonData[x].idTili +
          '</td><td>' +
          jsonData[x].Tilinumero +
          '</td><td> ' +
          jsonData[x].Asiakasnumero +
          '</td><td>' +
          jsonData[x].Saldo
          + '</td></tr>';
      }
      data += '</table>';
      document.getElementById('results').innerHTML = data;
    }
  };
  xhttp.send();
}

function hyvaksyLasku()
{
  var url = '../api/uusimaksu.php';
	var xhttp = new XMLHttpRequest();
	xhttp.open('POST', url, true);
	var form = document.getElementById('uusimaksu');
	var formData = new FormData(form);
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 201) {
		document.getElementById('results').innerHTML = '';
		} else {
		document.getElementById('results').innerHTML = '';
		}
	};
	xhttp.send(formData);
}
