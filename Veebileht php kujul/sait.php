<!DOCTYPE html>

<html>

<head>
</head>

<body>

    <?php
$int = "100x";

if (filter_var($int, FILTER_VALIDATE_INT)) {
    echo("Integer is valid");
} else {
    echo("Integer is not valid");
}
?>

	
	<!-- var_dump() -->
	
</body>

</html>