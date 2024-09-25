<?php
//koneksi db
$host = 'localhost';
$username = 'root';
$password ='';
$link = mysqli_connect($host, $username, $password);

if(!$link) {
    die ("Koneksi gagal bro : ".mysqli_connect_errno().
    " - ".mysqli_connect_error());

}
//membuat db
$query = "CREATE DATABASE IF NOT EXISTS dapa";
$result = mysqli_query($link, $query);
if(!$result){
    die ("query eror :".mysqli_errno($link).
    " - ".mysqli_errno($link));
}else {
    echo "database <b>dapa</b> berhasil dibuat ..<br>";
}

$result = mysqli_select_db($link, "dapa");
if(!$result){
    die ("query eror :".mysqli_errno($link).
    " - ".mysqli_errno($link));
}else {
    echo "database <b>dapa</b> berhasil dipilih ..<br>";
}

$query = "DROP TABLE IF EXISTS tb_dapa";
$result = mysqli_query($link, $query);
if(!$result){
    die ("query eror :".mysqli_errno($link).
    " - ".mysqli_errno($link));
}else {
    echo "tabel <b>tb_dapa</b> berhasil dihapus ..<br>";
}

$query = "CREATE TABLE tb_diri (id INT(10) NOT NULL AUTO_INCREMENT, ";
$query .= "nama VARCHAR(100), email VARCHAR(100), no_telp VARCHAR(20), ";
$query .= "password VARCHAR(100), PRIMARY KEY (id))";
$result =mysqli_query($link, $query);
if(!$result){
    die ("query eror :".mysqli_errno($link).
    " - ".mysqli_errno($link));
}else {
    echo "tabel <b>tb_mahasiswa</b> berhasil dibuat ..<br>";
}

$query = "INSERT INTO tb_mahasiswa VALUES ";
$query .= "('1','daffa','daffa@gmail.com','0826172537','daffa123')";
$result = mysqli_query($link, $query);
if(!$result){
    die ("query eror :".mysqli_errno($link).
    " - ".mysqli_errno($link));
}else {
    echo "tabel <b>dapa</b> telah diisi ..<br>";
}
?>