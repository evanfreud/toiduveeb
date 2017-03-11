<?php



echo "Tere, " . $_SESSION['id'];
		echo '
			<script>
				var para = document.createElement("p");
				var node = document.createTextNode("Profiil");
				para.appendChild(node);
				para.style.fontSize = "large";
				para.style.background = "#ede5da";
				para.style.width = "150px";
				para.style.float = "right";
				para.style.marginTop = "-40px";
				para.style.height = "40px";
				para.style.border = "1px solid black";
				document.getElementById("kasutaja").appendChild(para);
											
				</script>
				';




?>