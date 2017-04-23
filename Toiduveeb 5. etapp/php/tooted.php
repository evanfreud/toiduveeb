<?php


include 'ChromePhp.php';

ChromePhp::log(json_decode($_GET["y"], false));


if (json_decode($_GET["y"], false) == "tyhjenda"){
	
	header("Content-Type: application/json; charset=UTF-8");
	$obj = json_decode($_GET["x"], false);

	$conn = mysqli_connect("localhost", "root", "Samurai1989", "tooted");
	$result = $conn->query("DELETE FROM ostukorv");

	$conn->close();
}


if (json_decode($_GET["y"], false) == "tooted"){

	header("Content-Type: application/json; charset=UTF-8");
	$obj = json_decode($_GET["x"], false);

	$conn = mysqli_connect("localhost", "root", "Samurai1989", "tooted");
	$result = $conn->query("SELECT * FROM products WHERE prg_category=".$obj->kategooria1." OR prg_category=".$obj->kategooria2." OR prg_category=".$obj->kategooria3." OR prg_category=".$obj->kategooria4." OR prg_category=".$obj->kategooria5." OR prg_category=".$obj->kategooria6." OR prg_category=".$obj->kategooria7);
	$outp = array();
	$outp = $result->fetch_all(MYSQLI_ASSOC);

	array_walk_recursive($outp, function(&$value, $key) {
		if (is_string($value)) {
			$value = iconv('windows-1252', 'utf-8', $value);
		}
	});
	echo json_encode($outp, JSON_UNESCAPED_UNICODE);

	$conn->close();
}		


if (json_decode($_GET["y"], false) == "ostukorv"){

	header("Content-Type: application/json; charset=UTF-8");
	$obj = json_decode($_GET["x"], false);

	$conn = mysqli_connect("localhost", "root", "Samurai1989", "tooted");
	$result = $conn->query("SELECT id_product, prd_name, prd_price FROM ostukorv");
	$outp = array();
	$outp = $result->fetch_all(MYSQLI_ASSOC);


	array_walk_recursive($outp, function(&$value, $key) {
		if (is_string($value)) {
			$value = iconv('windows-1252', 'utf-8', $value);
		}
	});
	echo json_encode($outp, JSON_UNESCAPED_UNICODE);


	$conn->close();
}


if (json_decode($_GET["y"], false) == "lisakorvi"){

	header("Content-Type: application/json; charset=UTF-8");
	$obj = json_decode($_GET["x"], false);

	$conn = mysqli_connect("localhost", "root", "Samurai1989", "tooted");
	$toode = $conn->query("SELECT id_product, prd_name, prd_price FROM products WHERE id_product=".$obj->id);
	$outp = array();
	$outp = $toode->fetch_all(MYSQLI_ASSOC);
	$id = $outp[0]["id_product"];
	$nimi = $outp[0]["prd_name"];
	$hind = $outp[0]["prd_price"];


	$conn->query("INSERT INTO ostukorv (id_product, prd_name, prd_price) VALUES ($id, '$nimi', $hind)");
	$conn->close();

}


if (json_decode($_GET["y"], false) == "keskmine"){

	header("Content-Type: application/json; charset=UTF-8");
	$obj = json_decode($_GET["x"], false);

	$conn = mysqli_connect("localhost", "root", "Samurai1989", "tooted");
	
	$summa = $conn->query("SELECT AVG(prd_price) AS arv, COUNT(*) AS sum FROM products");
	$outp = array();
	$outp = $summa->fetch_all(MYSQLI_ASSOC);


	array_walk_recursive($outp, function(&$value, $key) {
		if (is_string($value)) {
			$value = iconv('windows-1252', 'utf-8', $value);
		}
	});
	echo json_encode($outp, JSON_UNESCAPED_UNICODE);


	$conn->close();
}

if (json_decode($_GET["y"], false) == "leiaToode"){

	header("Content-Type: application/json; charset=UTF-8");
	$obj = json_decode($_GET["x"], false);

	$conn = mysqli_connect("localhost", "root", "Samurai1989", "tooted");
	$result = $conn->query("SELECT * FROM  products WHERE id_product = (SELECT MAX(id_product)  FROM products)");
	
    
	$outp = array();
	$outp = $result->fetch_all(MYSQLI_ASSOC);

	array_walk_recursive($outp, function(&$value, $key) {
		if (is_string($value)) {
			$value = iconv('windows-1252', 'utf-8', $value);
		}
	});
	echo json_encode($outp, JSON_UNESCAPED_UNICODE);

	$conn->close();
}


if (json_decode($_GET["y"], false) == "uuedTooted"){

	header("Content-Type: application/json; charset=UTF-8");
	$obj = json_decode($_GET["x"], false);

	$conn = mysqli_connect("localhost", "root", "Samurai1989", "tooted");
	$result = $conn->query("SELECT * FROM  products WHERE id_product BETWEEN (SELECT MAX(id_product) FROM products)-10 AND (SELECT MAX(id_product) FROM products)");
	
    
	$outp = array();
	$outp = $result->fetch_all(MYSQLI_ASSOC);

	array_walk_recursive($outp, function(&$value, $key) {
		if (is_string($value)) {
			$value = iconv('windows-1252', 'utf-8', $value);
		}
	});
	echo json_encode($outp, JSON_UNESCAPED_UNICODE);

	$conn->close();
}




?>

