<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header("Connection: keep-alive");

$conn = mysqli_connect("localhost", "root", "", "tooted");
$result = $conn->query("SELECT COUNT(*) AS kokku FROM products");
$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);

while (true) {
    
    if (true) {
        sendMessage($outp[0]['kokku']);
    }
	$result = $conn->query("SELECT COUNT(*) AS kokku FROM products");
	$outp = array();
	$outp = $result->fetch_all(MYSQLI_ASSOC);
    sleep(2);
}

function sendMessage($outp) {
    
    echo "data: $outp \n\n";
    ob_flush();
    flush();
}



?>