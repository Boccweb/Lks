<?php
include 'koneksi.php';

if(isset($_POST['btn-add'])){
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO daftar_siswa VALUES ('', '$nama', '$nis', '$jurusan', '$alamat')";
    $result = mysqli_query($conn, $query);

    if($result){
        echo "
        <script>
            alert('Data siswa berhasil diupdate!');
            document.location.href = 'daftarsiswa.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data siswa gagal diupdate!');
            document.location.href = 'daftarsiswa.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="navbar">
    </div>

    <div class="sidebar">
        <div class="logo">
            <a href="">SMK <span>Bisa</span></a>
        </div>
        <div class="menu-sidebar">
            <ul>
                <li><a href="index.php">Dashboard</a></li>
            </ul>
            <ul>
                <li class="active"><a href="daftarsiswa.php">Daftar Siswa</a></li>
            </ul>
            <ul>
                <li><a href="#">Setting</a></li>
            </ul>
        </div>
    </div>

    <section class="container-edit">
        <h3>Tambah Data</h3>
        <div class="form-edit">
            <form action="" method="post">
                <table>
                    <tr>
                        <td><label for="nama">Nama</label></td>
                        <td>:</td>
                        <td><input type="text" name="nama" id="nama"></td>
                    </tr>
                    <tr>
                        <td><label for="nis">NIS</label></td>
                        <td>:</td>
                        <td><input type="number" name="nis" id="nis"></td>
                    </tr>
                    <tr>
                        <td><label for="jurusan">Jurusan</label></td>
                        <td>:</td>
                        <td><input type="text" name="jurusan" id="jurusan"></td>
                    </tr>
                    <tr>
                        <td><label for="alamat">Alamat</label></td>
                        <td>:</td>
                        <td><input type="text" name="alamat" id="alamat"></td>
                    </tr>
                </table>
                <button type="submit" name="btn-edit">Tambah Data</button>
            </form>
        </div>
    </section>
</body>
</html>
