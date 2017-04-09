<?php




		echo '

			<script>
				var para = document.createElement("p");
				var node = document.createTextNode("Profiil");
				var pilt = document.createElement("img");
				pilt.style.height = "60px";
				pilt.style.width = "60px";
				pilt.style.marginTop = "20px";
				pilt.src = "../meedia/UI/profiilipilt.png";
				para.appendChild(node);
				para.style.fontSize = "large";
				para.style.background = "#ede5da";
				para.style.width = "150px";
				
				para.style.marginTop = "30px";
				para.style.height = "40px";
				para.style.border = "1px solid black";
                               
				document.getElementById("kasutaja").appendChild(pilt);
											
				</script>
				';
?>