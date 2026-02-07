<?php
include 'koneksi.php';

if (isset($_POST['btn-edit'])) {

    $nama     = $_POST['nama'];
    $nis      = $_POST['nis'];
    $jususan  = $_POST['jurusan'];
    $alamat   = $_POST['alamat'];
    //DATABASE
    $query = "INSERT INTO data_siswa (nama, nis, jususan, alamat)
              VALUES ('$nama', '$nis', '$jususan', '$alamat')";

    $result_db = mysqli_query($conn, $query);
    // JSON
    $data = [
        "nama"    => $nama,
        "nis"     => $nis,
        "jurusan" => $jususan,
        "alamat"  => $alamat
    ];

    $file = 'main.json';

    $isi = [];
    if (file_exists($file)) {
        $isi = json_decode(file_get_contents($file), true);
    }

    $isi[] = $data;
    $result_json = file_put_contents(
        $file,
        json_encode($isi, JSON_PRETTY_PRINT)
    );

    // POPUP
    if ($result_db && $result_json) {
        echo "
        <script>
            alert('Data berhasil di tambahkan');
            window.location.href = 'daftar.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Gagal menyimpan data!');
            window.location.href = 'tambah.php';
        </script>
        ";
    }
}
