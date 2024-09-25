<?php

include("connect.php");

if(isset($_POST['submit'])) {
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['no_tlp'];
    $password = $_POST['password'];

    $query = "INSERT INTO tb_mahasiswa (nama, email, no_telp, password) VALUES";
    $query .= "('$nama','$email','$telepon','$password')";
    $result = mysqli_query($link, $query);
    if(!$result){
        die ("query eror :".mysqli_errno($link).
        " - ".mysqli_errno($link));
    }else {
        // echo "tabel 'tb_mahasiswa' telah ditambah ..<br>";
        header('Location: tampil.php');
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="tambah.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputNama1" class="form-label">Nama</label>
                <input type="nama" name="nama" class="form-control" id="exampleInputNama1" placeholder="Masukin nama">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email"class="form-control" id="exampleInputEmail1" placeholder="Masukin Email">
            </div>
            <div class="mb-3">
                <label for="exampleInputTlp1" class="form-label">No telp</label>
                <input type="text" name="no_tlp" class="form-control" id="exampleInputTlp1" placeholder="Masukin Nomor">
            </div>
            <div class="mb-3">
                <label for="exampleInputPass1" class="form-label">Password</label>
                <input type="password" name="password"class="form-control" id="exampleInputPass1" placeholder="Masukin Passowrd">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>