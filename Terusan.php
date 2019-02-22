<html>
<html>
<head>
	<title>Masuk</title>
	<link rel="stylesheet" href="Style.css" type="text/css">
</head>
<body>
<?php
$user = $_POST['name']; 
$pass = $_POST['psw']; 
if ($user == "Ghufron" && $pass == "123") {
    echo "<h1>Login Berhasil</h1>"; 
} else {
    echo "<h1>Login Gagal</h1>";
} 
?>
<br>
<a href="TugasModul3.php"><button type="button" class="cancelbtn">Kembali</button></a>


