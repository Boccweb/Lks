<?php
include 'koneksi.php';

$id = $_GET["id"];

$result = mysqli_query($conn,"DELETE FROM daftar_siswa WHERE id = '$id'");

if($result){
    echo "
    <script>
        alert('Data berhasil dihapus');
        document.location.href = 'daftarsiswa.php';
    </script>";
}else {
    echo "
    <script>
        alert('Data gagal dihapus');
    </script>";
}
?>