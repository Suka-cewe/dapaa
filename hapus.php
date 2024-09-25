<?php

include("connect.php");

if(isset($_GET['id_hapus'])) {
    $id_hapus = $_GET['id_hapus'];

    $query = "DELETE FROM tb_mahasiswa WHERE id=$id_hapus";
    $result =mysqli_query($link, $query);

    if(!$result) {
        die ("query error : ".mysqli_errno($link).
        " _ ".mysqli_error($link));
    } else {
        // echo "data tb_mahasiswa berhasil dihapus";
        header('Location: tampil.php');
    }
}
?>