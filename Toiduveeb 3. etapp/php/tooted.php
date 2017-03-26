<?php

header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["x"], false);

$conn = mysqli_connect("localhost", "toiduveebcsut", "3+9hol4J=Kz9", "toiduveebcsut_tooted");
$result = $conn->query("SELECT * FROM products WHERE prg_category=".$obj->kategooria);
$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);

array_walk_recursive($outp, function(&$value, $key) {
    if (is_string($value)) {
        $value = iconv('windows-1252', 'utf-8', $value);
    }
});
echo json_encode($outp, JSON_UNESCAPED_UNICODE);

$conn->close();
?>
