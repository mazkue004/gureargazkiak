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
	var src = document.getElementById("argazki");
	var target = document.getElementById("target");
	showImage(src, target);
}