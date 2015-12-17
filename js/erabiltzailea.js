XMLHttpRequestObject = new XMLHttpRequest();
XMLHttpRequestObject.onreadystatechange = function(){
	//alert(XMLHttpRequestObject.readyState);
	if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
		document.getElementById("datuak").innerHTML=XMLHttpRequestObject.responseText;
	}
}

function creditsDeitu(){
	XMLHttpRequestObject.open("GET", "Credits.php", true);
	XMLHttpRequestObject.send();
}

function argazkia(){
	XMLHttpRequestObject = new XMLHttpRequest();
XMLHttpRequestObject.onreadystatechange = function(){
	alert(XMLHttpRequestObject.readyState);
	if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
		document.getElementById("datuak").innerHTML=XMLHttpRequestObject.responseText;
	}
}
	XMLHttpRequestObject.open("GET", "Argazkia.php", true);
	XMLHttpRequestObject.send();
}

/*Erabiltzaileak igo behar duen argazkia momentuan agertzeko*/
function showIm(src, target) {
	var fr = new FileReader();
	
	fr.onload = function (e) { target.src = this.result; };
	
	src.addEventListener("change", function () {
		
		fr.readAsDataURL(src.files[0]);
	});
	
}
function argazkiaErakutsi() {
	alert("sakatu da");
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
		//alert(XMLHttpRequestObject.readyState);
		if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
			document.getElementById("datuak").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	var src = document.getElementById("argazki");
	var target = document.getElementById("target");
	showIm(src, target);
}

function argazkiaErabiltzailea(email){
	
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
	//alert(XMLHttpRequestObject.readyState);
	if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
	document.getElementById("datuak").innerHTML=XMLHttpRequestObject.responseText;
	}
	}
	XMLHttpRequestObject.open("GET", "ArgazkiakIkusiErabiltzaileak.php?eposta="+email, true);
	XMLHttpRequestObject.send();
	}
	
	

	
	function ezabatuArgazkiaErabiltzailea(kodea){
	var kod=kodea;
	var r = confirm("Ziur zaude argazkia ezabatu nahi duzula?");
    if (r == true) {
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
	//alert(XMLHttpRequestObject.readyState);
	if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
	document.getElementById("edit").innerHTML=XMLHttpRequestObject.responseText;
	}
	}
	XMLHttpRequestObject.open("GET", "EzabatuArgazkia.php?kodea=" + kod, true);
	XMLHttpRequestObject.send();
	}
	
	
	}
	
	function editatuArgazkiaErabiltzailea(kodea){
	var kod=kodea;
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
	//alert(XMLHttpRequestObject.readyState);
	if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
	document.getElementById("prib").innerHTML=XMLHttpRequestObject.responseText;
	}
	}
	XMLHttpRequestObject.open("GET", "EditatuArgazkia.php?kodea=" + kod, true);
	XMLHttpRequestObject.send();	
	}
	
	function editatuPribatutasuna(kodea){
	var kod=kodea;
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
	//alert(XMLHttpRequestObject.readyState);
	if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
	document.getElementById("prib").innerHTML=XMLHttpRequestObject.responseText;
	}
	}
	XMLHttpRequestObject.open("GET", "EditatuPribatutasuna.php?kodea=" + kod, true);
	XMLHttpRequestObject.send();	
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
	
	
	
	
	function bestePribatutasuna(){
	//Beste espezialitatea
	var esp = document.getElementById("espezialitatea");
	if(esp.value=="bestea"){
	
	if(document.getElementById("best").innerHTML == ""){
	document.getElementById("best").innerHTML="Sartu lagunaren emaila(*): <input type=\"text\" name=\"laguna\" id=\"laguna\" placeholder=\"email@email.com\"/>";
	}
	}
	}	