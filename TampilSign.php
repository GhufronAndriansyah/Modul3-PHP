<html> 
    <head> 
        <title> Data Anda </title>
    </head> 
    <body>
<?php
$nama =$_POST ['nama']; 
$email =$_POST ['emai']; 
$psw =$_POST ['al']; 
$usia =$_POST ['us']; 
$tgl =$_POST ['tgl']; 
function tampil_nama() {  
    global $nama;  
    echo "Nama Anda : ".$nama; 
}   
function tampil_email() {  
    global $email;  
    echo "Email Anda : ".$email; 
} 
function tampil_usia() {  
    global $usia;  
    echo "Usia Anda : ".$usia; 
} 
function tampil_tgl() {  
    global $tgl;  
    echo "Tanggal Lahir Anda : ".$tgl; 
}   
tampil_nama(); 
echo "<br>";
tampil_email(); 
echo "<br>";
tampil_usia(); 
echo "<br>";
tampil_tgl(); 
echo "<br>";

echo " <h1>Selamat Anda Belum Terdaftar</h1>";
?>
<a href="TugasModul3.php"><button type="button" class="cancelbtn tengah1">Cancel</button></a>