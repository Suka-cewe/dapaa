<?php

include("connect.php");

if (isset($_POST['edit'])) {
    // Ambil nilai dari form
    $id = $_POST['id'];  // Ambil ID dari input hidden
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['no_tlp'];
    $password = $_POST['password'];

    // Buat query update
    $query = "UPDATE tb_mahasiswa SET ";
    $query .= "nama = '$nama', email = '$email', no_telp = '$telepon', ";
    $query .= "password = '$password' WHERE id = '$id'";

    // Jalankan query
    $result = mysqli_query($link, $query);

    // Cek apakah query berhasil dijalankan
    if (!$result) {
        die("Query error: " . mysqli_errno($link) . " - " . mysqli_error($link));
    } else {
        // Redirect ke halaman tampil.php jika update berhasil
        header('Location: tampil.php');
    }
}

// Ambil data mahasiswa berdasarkan ID dari URL
if (isset($_GET['id_edit'])) {
    $id = $_GET['id_edit'];
    $query = "SELECT * FROM tb_mahasiswa WHERE id = $id";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);

    // Simpan data mahasiswa ke dalam variabel
    $nama = $row['nama'];
    $email = $row['email'];
    $telepon = $row['no_telp'];
    $password = $row['password'];
} else {
    // Jika tidak ada id_edit di URL, redirect ke halaman lain (misalnya tampil.php)
    header('Location: tampil.php');
    exit;
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <form action="edit.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputNama1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="Masukkan nama" 
                value="<?php echo $nama; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Email"
                value="<?php echo $email; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputTlp1" class="form-label">No Telp</label>
                <input type="text" name="no_tlp" class="form-control" id="exampleInputTlp1" placeholder="Masukkan Nomor"
                value="<?php echo $telepon; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPass1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPass1" placeholder="Masukkan Password"
                value="<?php echo $password; ?>">
            </div>

            <!-- Input hidden untuk ID -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <button type="submit" name="edit" class="btn btn-primary">Edit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
