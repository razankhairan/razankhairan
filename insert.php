<?php
    include 'koneksi.php';
    $id_mhs = $_POST['id_mhs'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $jenis_kelamin = $_POST ['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $query ="INSERT INTO mahasiswa (`id_mhs`, `nim`, `nama`, `jenis_kelamin`, `jurusan`, `alamat`) values ('$id_mhs','$nim', '$nama', '$jenis_kelamin', '$jurusan', '$alamat')";
    mysqli_query($koneksi, $query);
    header("location:index.php");
?>
