function erabiltzaileakIkusi(){
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
		//alert(XMLHttpRequestObject.readyState);
		if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
			document.getElementById("datuak").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET", "ErabiltzaileakIkusi.php", true);
	XMLHttpRequestObject.send();
}

function argazkia(){
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
		//alert(XMLHttpRequestObject.readyState);
		if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
			document.getElementById("datuak").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	
	XMLHttpRequestObject.open("GET", "ArgazkiaIgo.php", true);
	XMLHttpRequestObject.send();
}

function onartu(email){
	var posta=email;
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
		//alert(XMLHttpRequestObject.readyState);
		if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
			document.getElementById("editatu").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET", "Onartu.php?email=" + posta, true);
	XMLHttpRequestObject.send();
}

function editatu(email){
	var posta=email;
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
		//alert(XMLHttpRequestObject.readyState);
		if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
			document.getElementById("editatu").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET", "Editatu.php?email=" + posta, true);
	XMLHttpRequestObject.send();
	
}

function ezabatu(email){
	var posta=email;
	var r = confirm("Ziur zaude erabiltzailea ezabatu nahi duzula?");
    if (r == true) {
        XMLHttpRequestObject = new XMLHttpRequest();
		XMLHttpRequestObject.onreadystatechange = function(){
			//alert(XMLHttpRequestObject.readyState);
			if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
				document.getElementById("editatu").innerHTML=XMLHttpRequestObject.responseText;
			}
		}
		XMLHttpRequestObject.open("GET", "Ezabatu.php?email=" + posta, true);
		XMLHttpRequestObject.send();
	}
	
	
}

function blokeatu(email){
	var posta=email;
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
		//alert(XMLHttpRequestObject.readyState);
		if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
			document.getElementById("editatu").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET", "Blokeatu.php?email=" + posta, true);
	XMLHttpRequestObject.send();
}