function lisaTekst(){
	document.getElementById('nupp').innerHTML = "tere";
}
	

function vali(kategooria){

	var obj, parameeter, xmlhttp;

		obj = { "kategooria":kategooria};
		parameeter = JSON.stringify(obj);
		xmlhttp = new XMLHttpRequest();

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
					
				}
			}
		};
		xmlhttp.open("GET", "../php/tooted.php?x=" + parameeter, true);
		xmlhttp.send();
}	
