
function vali(kategooria){

var obj, parameeter, xmlhttp;

		obj = { "kategooria":kategooria};
		parameeter = JSON.stringify(obj);
		xmlhttp = new XMLHttpRequest();

		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var i;
				var myObj = JSON.parse(this.responseText);
				//document.getElementById(1).innerHTML =  myObj[2].prd_name;
				//document.getElementById("test").innerHTML =  this.responseText;
				//document.getElementById(1).innerHTML =  myObj[2].prd_name;
				for(i = 0; i <= myObj.length;i++){
					//document.getElementById(i).innerHTML =  myObj[i].prd_name;
					document.getElementById(i).style.backgroundImage =  "";
					document.getElementById(i).style.backgroundImage =  "url('../../meedia/tooted/"+myObj[i].id_product+".png')";
					document.getElementById(i).style.backgroundSize = "100% 100%";
				}
    }
};
		xmlhttp.open("GET", "../php/tooted.php?x=" + parameeter, true);
		xmlhttp.send();
}		

