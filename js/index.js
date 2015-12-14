/*Erabiltzailea erregistratzeko linka*/
function erregistratuDeitu(){
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
		//alert(XMLHttpRequestObject.readyState);
		if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
			document.getElementById("datuak").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET", "Erregistratu.php", true);
	XMLHttpRequestObject.send();
}

/*norgara-rako linka*/
function creditsDeitu(){
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
		//alert(XMLHttpRequestObject.readyState);
		if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
			document.getElementById("datuak").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET", "Credits.php", true);
	XMLHttpRequestObject.send();
}


/*login egiteko linka*/
function login(){
XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
		//alert(XMLHttpRequestObject.readyState);
		if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
			document.getElementById("datuak").innerHTML=XMLHttpRequestObject.responseText;
		}
	}

	var email=document.getElementById("em").value;
	var pass=document.getElementById("pa").value;
	XMLHttpRequestObject.open("GET", "LogIn.php?eposta="+email+"&pass="+pass, true);  
	XMLHttpRequestObject.send();
}

/*Gureargazkiak hasierako orria*/
function gureArgazkiak(){
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
		//alert(XMLHttpRequestObject.readyState);
		if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
			document.getElementById("datuak").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET", "index.php", true);
	XMLHttpRequestObject.send();
}

/*Erregistratun profileko argazkia momentuan agertzeko*/
function showImage(src, target) {
	var fr = new FileReader();
	
	fr.onload = function (e) { target.src = this.result; };
	
	src.addEventListener("change", function () {
		
		fr.readAsDataURL(src.files[0]);
	});
	
}
function argazkiaErakutsi() {
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
		//alert(XMLHttpRequestObject.readyState);
		if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
			document.getElementById("datuak").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	var src = document.getElementById("argazkia");
	var target = document.getElementById("target");
	showImage(src, target);
}

/*Pasahitza indartsua dela egiaztatu*/
function egiaztatuPasahitza(){
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
		//alert(XMLHttpRequestObject.readyState);
		if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
			document.getElementById("emaitzaPasahitza").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	var pasahitza= document.getElementById("pass");
	var pasahitza1= document.getElementById("pass1");
	XMLHttpRequestObject.open("GET", "soapBezEgiaztatuPasahitzaAJAX.php?pass="+pasahitza.value+"&pass1="+pasahitza1.value, true);
	XMLHttpRequestObject.send();
}

function ikusBalioak(){
	var p = document.getElementById('pasa');
	if((p.value=="BAI")||(p.value=="EZEZ")){
		alert("Pasahitza begiratu");
		return false;
	} 
}

function begiratu(){
	var eti=document.getElementById("etiketa").value;
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
		//alert(XMLHttpRequestObject.readyState);
		if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
			document.getElementById("datuak").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET","Etiketak.php?etiketa="+ eti, true);
	XMLHttpRequestObject.send();
}
