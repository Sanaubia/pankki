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

function hyvaksyLasku()
{
  var url = '../api/uusimaksu.php';
	var xhttp = new XMLHttpRequest();
	xhttp.open('POST', url, true);
	var form = document.getElementById('uusimaksu');
	var formData = new FormData(form);
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 201) {
		document.getElementById('results').innerHTML = 'Lasku maksettu';
		} else {
		document.getElementById('results').innerHTML = 'Laskun maksussa pahtui virhe';
		}
	};
	xhttp.send(formData);
}
