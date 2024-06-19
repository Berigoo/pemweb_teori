<?php
include "koneksi.php";

$id = $_GET['id'];

$proses = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id='$id'");
?>
