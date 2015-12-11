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
	XMLHttpRequestObject.open("GET", "Argazkia.php", true);
	XMLHttpRequestObject.send();
}

/*Erabiltzaileak igo behar duen argazkia momentuan agertzeko*/
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
	var src = document.getElementById("argazki");
	var target = document.getElementById("target");
	showImage(src, target);
}

function argazkiaErabiltzailea(){
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
		//alert(XMLHttpRequestObject.readyState);
		if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
			document.getElementById("datuak").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	
	XMLHttpRequestObject.open("GET", "ArgazkiakIkusiErabiltzaileak.php", true);
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