<?php
include "koneksi.php";

$perulangan = $_POST['ulangi'];

$nama = $_POST['nama'];
$prodi = $_POST['prodi'];

$proses = null;
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $proses =  mysqli_query($conn, "UPDATE mahasiswa SET nama_mahasiswa='$nama',prodi='$prodi' WHERE id='$id'");
}else {
    $proses = mysqli_query($conn, "INSERT INTO mahasiswa VALUES(null, '$nama', '$prodi')");
}

if($proses){
    header('Location: /form.php');
}else echo "<script>alert('Data Gagal disimpan')</script>";
?>
