<?php

include("connect.php");;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Halaman Tampil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <button class="btn btn-primary my-5"> 
        <a href="tambah.php" class="text-light">Tambah</a>
    </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">No telp</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operasi</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $query = "SELECT * FROM tb_mahasiswa";
                    $result = mysqli_query($link,$query);
                    if(!$result){
                        die ("query eror :".mysqli_errno($link).
                        " - ".mysqli_errno($link));
                    }

                    while($data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<th>$data[id]</th>";
                        echo "<td>$data[nama]</td>";
                        echo "<td>$data[email]</td>";
                        echo "<td>$data[no_telp]</td>";
                        echo "<td>$data[password]</td>";
                        echo "<td>";
                        echo "<a href=\"edit.php?id_edit=$data[id]\" class=\"btn btn-info\">Edit</a>";
                        echo "<a href=\"hapus.php?id_hapus=$data[id]\" class=\"btn btn-danger\">Hapus</a>";
                        echo "</td>";
                        echo "</tr>";
                    }


                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
