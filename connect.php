<?php  

$host = 'localhost';
$username = 'root';
$password ='';
$dbname = 'dapa';
$link = mysqli_connect($host, $username, $password, $dbname);
if(!$link) {
    die ("Koneksi gagal bro : ".mysqli_connect_errno().
    " - ".mysqli_connect_error());

}
?>