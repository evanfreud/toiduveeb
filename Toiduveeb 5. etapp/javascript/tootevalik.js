
function vali(kategooria1, kategooria2, kategooria3, kategooria4, kategooria5, kategooria6, kategooria7){

var i;
for (i = 0; i < 20; i++){
	document.getElementById(i).parentElement.children[1].style.visibility = "hidden";
	document.getElementById(i).parentElement.children[2].style.visibility = "hidden";
	document.getElementById(i).style.backgroundImage =  "";
}


//Toodete laadimine tabelisse vastavalt kategooriale

var obj, parameeter, xmlhttp, funktsioon, f;

		obj = { "kategooria1":kategooria1, "kategooria2":kategooria2, "kategooria3":kategooria3, "kategooria4":kategooria4, "kategooria5":kategooria5, "kategooria6":kategooria6, "kategooria7":kategooria7};
		
		f = JSON.stringify("tooted");
		parameeter = JSON.stringify(obj);
		xmlhttp = new XMLHttpRequest();
		var nupud = ["1","2"];
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var i;
				var myObj = JSON.parse(this.responseText);
				/* document.getElementById("test1").innerHTML = this.responseText; */
				for(i = 0; i <= myObj.length;i++){
					var element = document.getElementById(i);
					element.style.backgroundImage =  "";
					element.style.backgroundImage =  "url('../meedia/tooted/"+myObj[i].id_product+".png')";
					element.style.backgroundSize = "100% 100%";
					element.parentElement.children[2].style.visibility="visible";
					element.parentElement.children[2].innerHTML = "Lisa ostukorvi";
					element.tooteId = myObj[i].id_product;
					element.tooteNimi = myObj[i].prd_name;
					element.tooteHind = myObj[i].prd_price;
					element.parentElement.children[1].innerHTML = "Hind: " + myObj[i].prd_price + " €";
					element.parentElement.children[1].style.visibility="visible";
				}
    }
};
		xmlhttp.open("GET", "php/tooted.php?x=" + parameeter + "&y=" + f, true);
		xmlhttp.send();
}	




//Nupule "Lisa ostukorvi" vajutades lisatakse vastav toode ostukorvi

function lisakorvi(id){


var obj, parameeter, xmlhttp, f;

		obj = { "id":id};
		parameeter = JSON.stringify(obj);
		f = JSON.stringify("lisakorvi");
		xmlhttp = new XMLHttpRequest();
		
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				
    }
};
		xmlhttp.open("GET", "../php/tooted.php?x=" + parameeter + "&y=" + f, true);
		xmlhttp.send();
}		




//Laaditakse andmebaasist ostukorvis olevad tooted ostukorvitabelisse

/*

function ostukorv(kategooria){

var obj, parameeter, xmlhttp, f;

		obj = { "kategooria":kategooria};
		parameeter = JSON.stringify(obj);
		f = JSON.stringify("ostukorv");
		xmlhttp = new XMLHttpRequest();
		
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var i;
				var myObj = JSON.parse(this.responseText);
				/* document.getElementById("test1").innerHTML = this.responseText; 
				for(i = 0; i < myObj.length+1; i++){
					
					var rida = document.createElement("tr");
					rida.id = i;
					var veerg1 = document.createElement("td");
					var veerg2 = document.createElement("td");
					var veerg3 = document.createElement("td");
					var veerg4 = document.createElement("td");
					veerg1.className="osturibapilt";
					veerg2.className="osturiba";
					veerg3.className="osturiba2";
					veerg4.className="osturiba2";
					rida.appendChild(veerg1);
					rida.appendChild(veerg2);
					rida.appendChild(veerg3);
					rida.appendChild(veerg4);
					document.getElementById("ostutabel").appendChild(rida);
					
					var element = document.getElementById(i);
					element.children[0].style.backgroundImage = "url('../meedia/tooted/"+myObj[i].id_product+".png')";
					element.children[0].style.backgroundSize = "100% 100%";
					element.children[1].innerHTML = myObj[i].prd_name;
					element.children[2].innerHTML = "1";
					element.children[3].innerHTML = myObj[i].prd_price + " €";
					summa(1111, myObj.length);
				}
    }
};
		xmlhttp.open("GET", "../php/tooted.php?x=" + parameeter + "&y=" + f, true);
		xmlhttp.send();
}		
*/


function ostukorv(kategooria){
	var i;
	
	var ostukorv = JSON.parse(localStorage.getItem("Ostukorv"));
	var summa = 0;
				for(i = 0; i < ostukorv.length; i++){
					
					
					var rida = document.createElement("tr");
					rida.id = i;
					var veerg1 = document.createElement("td");
					var veerg2 = document.createElement("td");
					var veerg3 = document.createElement("td");
					var veerg4 = document.createElement("td");
					veerg1.className="osturibapilt";
					veerg2.className="osturiba";
					veerg3.className="osturiba2";
					veerg4.className="osturiba2";
					rida.appendChild(veerg1);
					rida.appendChild(veerg2);
					rida.appendChild(veerg3);
					rida.appendChild(veerg4);
					document.getElementById("ostutabel").appendChild(rida);
					veerg1.style.backgroundImage = "url('meedia/tooted/"+ostukorv[i].id+".png')";
					veerg1.style.backgroundSize = "100% 100%";
					veerg2.innerHTML = ostukorv[i].nimi;
					veerg3.innerHTML = 1;
					veerg4.innerHTML = ostukorv[i].hind;
					summa = summa + JSON.parse(ostukorv[i].hind);
					
					
				}
				var rida = document.createElement("tr");
				var veerg1 = document.createElement("td");
				var veerg2 = document.createElement("td");
				var veerg3 = document.createElement("td");
				veerg1.colSpan = "2";
				veerg1.style.backgroundColor = "transparent";
				
				
				veerg2.className="osturiba2";
				veerg3.className="osturiba2";
				rida.appendChild(veerg1);
				rida.appendChild(veerg2);
				rida.appendChild(veerg3);
				veerg2.style.borderRightWidth = "0px";
				veerg1.style.borderRightWidth = "0px";
				veerg2.style.borderLeftWidth = "0px";
				veerg3.style.borderLeftWidth = "0px";
				document.getElementById("ostutabel").appendChild(rida);
				veerg2.innerHTML = "<b> Summa: </b>";
				veerg3.innerHTML = "<b>" + summa + " € </b>";
    }





//Ostukorv tühjendatakse

function tyhjenda(id){


var obj, parameeter, xmlhttp, f;

		obj = { "id":id};
		parameeter = JSON.stringify(obj);
		f = JSON.stringify("tyhjenda");
		xmlhttp = new XMLHttpRequest();
		
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				
    }
};
		xmlhttp.open("GET", "../php/tooted.php?x=" + parameeter + "&y=" + f, true);
		xmlhttp.send();
}		

function summa(id, pikkus){


var obj, parameeter, xmlhttp, f;

		obj = { "id":id};
		parameeter = JSON.stringify(obj);
		f = JSON.stringify("summa");
		xmlhttp = new XMLHttpRequest();
		
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var myObj = JSON.parse(this.responseText);
				document.getElementById(pikkus).children[3].innerHTML = "<b>" + Math.round(myObj[0].summa * 100) / 100 + " €" + "<b>";
				document.getElementById(pikkus).children[2].innerHTML = "<b>Summa<b>";
    }
};
		xmlhttp.open("GET", "../php/tooted.php?x=" + parameeter + "&y=" + f, true);
		xmlhttp.send();
}



function keskmine(){


var obj, parameeter, xmlhttp, f;

		obj = { "id":2};
		parameeter = JSON.stringify(obj);
		f = JSON.stringify("keskmine");
		xmlhttp = new XMLHttpRequest();
		
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var myObj = JSON.parse(this.responseText);
				
				document.getElementById("nupp").innerHTML = "Keskmine hind: " + "<b>" + Math.round(myObj[0].arv * 100) / 100 + " €" + "</b>" + "<br />"
				+"Tooteid kokku: " + "<b>" + myObj[0].sum + "<b>"; 
				
    }
};
		xmlhttp.open("GET", "../php/tooted.php?x=" + parameeter + "&y=" + f, true);
		xmlhttp.send();
}


function leiaToode(){

var obj, parameeter, xmlhttp, f;

		obj = { "id":2};
		parameeter = JSON.stringify(obj);
		f = JSON.stringify("leiaToode");
		xmlhttp = new XMLHttpRequest();
		
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var myObj = JSON.parse(this.responseText);
				var i;
				document.getElementById("result").innerHTML = myObj[0].id_product;
				for (i = 9; i < 15; i++){
					if (document.getElementById(i).style.backgroundImage == "") {
						document.getElementById(i).style.backgroundImage = "url('meedia/tooted/"+myObj[0].id_product+".png')";
				        document.getElementById(i).style.backgroundSize = "100% 100%";
						var element = document.getElementById(i);
						element.parentElement.children[2].style.visibility="visible";
						element.parentElement.children[2].innerHTML = "Lisa ostukorvi";
						
						element.tooteId = myObj[0].id_product;
					element.tooteNimi = myObj[0].prd_name;
					element.tooteHind = myObj[0].prd_price;
					element.parentElement.children[1].innerHTML = "Hind: " + myObj[0].prd_price + " €";
					element.parentElement.children[1].style.visibility="visible";
						break;
					}
				}		
    }
};
		xmlhttp.open("GET", "../php/tooted.php?x=" + parameeter + "&y=" + f, true);
		xmlhttp.send();
}



function uuedTooted(){
					
var obj, parameeter, xmlhttp, f;

		obj = { "id":2};
		parameeter = JSON.stringify(obj);
		f = JSON.stringify("uuedTooted");
		xmlhttp = new XMLHttpRequest();
		
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var myObj = JSON.parse(this.responseText);
				var i;
				document.getElementById("result").innerHTML = myObj[0].id_product;
				for (i = 0; i < 9; i++){
					if (document.getElementById(i).style.backgroundImage == "") {
						document.getElementById(i).style.backgroundImage = "url('meedia/tooted/"+myObj[i].id_product+".png')";
				        document.getElementById(i).style.backgroundSize = "100% 100%";
						var element = document.getElementById(i);
						element.parentElement.children[2].style.visibility="visible";
					element.parentElement.children[2].innerHTML = "Lisa ostukorvi";
					element.tooteId = myObj[i].id_product;
					element.tooteNimi = myObj[i].prd_name;
					element.tooteHind = myObj[i].prd_price;
					element.parentElement.children[1].innerHTML = "Hind: " + myObj[i].prd_price + " €";
					element.parentElement.children[1].style.visibility="visible";
					
						
					}
				}		
    }
};
		xmlhttp.open("GET", "../php/tooted.php?x=" + parameeter + "&y=" + f, true);
		xmlhttp.send();
}

function loeToode(){
	if(typeof(EventSource) !== "undefined") {
						var source = new EventSource("/php/demo_sse.php");
						var tulemus = 0;
						var tulem;
						source.onmessage = function(event) {
							tulem = JSON.parse(event.data);
							if (!(tulemus == tulem)){
							  leiaToode();
							  //document.getElementById("result").innerHTML += tulem + "<br>";
							  tulemus = tulem;
							}
							
						};
					} else {
						document.getElementById("result").innerHTML = "Sorry, your browser does not support server-sent events...";
					}
}



function lisa(i){
					var element = document.getElementById(i);
					element.parentElement.children[2].innerHTML = "Lisatud";
					//lisakorvi(element.tooteId);
					if (localStorage.getItem("Ostukorv") === null) {
						var ostukorv = [];
						var toode = {id:element.tooteId, nimi:element.tooteNimi, hind:element.tooteHind};
						ostukorv.push(toode);
						localStorage.setItem("Ostukorv",JSON.stringify(ostukorv));
					} else {
						var ostukorv = JSON.parse(localStorage.getItem("Ostukorv"));
						var toode = {id:element.tooteId, nimi:element.tooteNimi, hind:element.tooteHind};
						ostukorv.push(toode);
						localStorage.setItem("Ostukorv", JSON.stringify(ostukorv));
					}; 
					
					
				}
				

function aktiivseks(i){
					var j;
					var element = document.getElementById("tootemenuu");
					
					for (j = 0; j < 8; j++){
						element.children[j].classList.remove("aktiivne1");
					}
					element.children[i].className = "aktiivne1";
				}				

	
function peidaNupud(){
		var i;
for (i = 0; i < 20; i++){
	document.getElementById(i).parentElement.children[2].style.visibility = "hidden";
}
	}
	
	
	

			
			function peida(){
				document.getElementById("logisisseaken").style.visibility = "hidden";
			}	
			
function eemalda(){
			var element = document.getElementById("ostutabel");
			
			while (element.children.length > 1){
				element.removeChild(element.lastChild);
			}
			localStorage.clear();
			//tyhjenda(1111);
		}			
