<?php
include "koneksi.php";

$id = $_GET['id'];
$proses = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id='$id'");

header('Location: /', true, 301);
?>
