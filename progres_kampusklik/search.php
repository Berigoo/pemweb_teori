<?php
include "tampilkan_data.php";
include "edit.php";

$data = mysqli_fetch_assoc($proses);

if(isset($_POST['nama']) && $_POST['npm'] != "") {
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];

    $arr = array();
    for ($i = 0; $i < strlen($nama); $i++) {
        array_push($arr, $nama[$i]);
    }
    $a = implode('%', $arr);

    $find = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nama_mahasiswa LIKE '$a' AND id='$a'");
}if($_POST['nama'] != "" && $_POST['npm'] == "") {
    $nama = $_POST['nama'];
    $arr = array();
    array_push($arr, '%');
    for ($i = 0; $i < strlen($nama); $i++) {
        array_push($arr, $nama[$i]);
    }
    $a = implode('%', $arr);
    var_dump($a);

    $find = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nama_mahasiswa LIKE '$a'");
}elseif($_POST['npm'] != "" && $_POST['nama'] == ""){
    $npm = $_POST['npm'];
    $find = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id='$npm'");
}
?>

  <html>
  <header>
    <title>Form</title>
    <link rel="stylesheet" href="llibrary/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="llibrary/bootstrap/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="llibrary/assets/styles.css">
    <script src="llibrary/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </header>
  <body>

		<!--/span-->
		<div class="span9" id="content">
			<!-- morris stacked chart -->
			<div class="row-fluid">
				<!-- block -->
				<div class="block">
					<div class="navbar navbar-inner block-header">
						<div class="muted pull-left">Form Example</div>
					</div>
					<div class="block-content collapse in">
						<div class="span12">
							<form action="search.php" method="post">
								<fieldset>
									<legend>Search</legend>
									<div class="control-group">
										<label class="control-label" for="nama">NPM: </label>
										<div class="controls">
											<input class="input-xlarge focused" type="text" id="npm" name="npm"
                                                   value="">
										</div>
                                        <label class="control-label" for="nama">Nama: </label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" type="text" id="nama" name="nama"
                                                   value="">
                                        </div>
  <div class="form-actions">
										<button type="submit" class="btn btn-primary">Cari Data</button>
									</div>
								</div>
								</fieldset>
							</form>
						</div>
						</div>
						</div>
	
<div class="row-fluid">
          <!-- block -->
          <div class="block">
            <div class="navbar navbar-inner block-header">
              <div class="muted pull-left">Data Mahasiswa</div>
            </div>
            <div class="block-content collapse in">
              <div class="span12">
                <table class="table">
                  <thead>
                  <tr>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

<?php
while($data = mysqli_fetch_assoc($find)){
?>
                  <tr>
                    <td><?php echo $data['id'] ?></td>
                    <td><?php echo $data['nama_mahasiswa'] ?></td>
                    <td><?php echo $data['prodi'] ?></td>
                                        <td><a href="form.php?id=<?php echo $data['id'] ?>">Edit</a> | <a href="/delete.php?id=<?php echo $data['id']?>">Hapus</a></td>
                  </tr>
<?php
}
?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
</body>
</html>
