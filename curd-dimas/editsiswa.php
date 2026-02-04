<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "SELECT * FROM daftar_siswa WHERE id = $id";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result)
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
        <ul class="active"><a href="daftarsiswa.php">Daftar Siswa</a></li>
        </ul>
        <ul>
            <li><a href="">Settings</a></li>
        </ul>
    </div>
</div>
<div class="container-edit">
    <h1>Edit Data</h1>
    <div class="form-edit">
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td><input type="text" name="nama" id="nama" value="<?= $row['nama']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="nis">NIS</label></td>
                    <td><input type="number" name="nis" id="nis" value="<?= $row['nis']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="jurusan">Jurusan</label></td>
                    <td><input type="text" name="jurusan" id="jurusan" value="<?= $row['jurusan']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td><input type="text" name="alamat" id="alamat" value="<?= $row['alamat']; ?>"></td>
                </tr>
            </table>
            <div class="btn-edit">
                <button type="submit" name="btn-edit">Edit Data</button>
            </div>
        </form>
    </div>
</div>

<?php
if(isset($_POST['btn-edit'])){
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE daftar_siswa SET
                nama = '$nama',
                nis = '$nis',
                jurusan = '$jurusan',
                alamat = '$alamat'
                WHERE id = $id";
    
    $result = mysqli_query($conn,$query);

    if($result){
        echo "<script>
                alert('Data siswa berhasil diupdate!');
                document.location.href = 'daftarsiswa.php';
            </script>";
    } else {
        echo "<script>
                alert('Data siswa gagal diupdate!');
                document.location.href = 'daftarsiswa.php';
            </script>";
    }
}
?>

<script src="script.js"></script>
</body>
</html>