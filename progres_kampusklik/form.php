<?php
include "tampilkan_data.php";
include "edit.php";

$data = mysqli_fetch_assoc($proses);
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
							<form action="proses_pertemuan_12.php<?php if(isset($data['id'])) echo '?id='.$data['id'] ?>" method="post">
								<fieldset>

									<legend>Input Data Mahasiswa</legend>
									<div class="control-group">
										<label class="control-label" for="nama">Nama: </label>
										<div class="controls">
											<input class="input-xlarge focused" type="text" id="nama" name="nama"
                                                   value="<?php if(isset($data['nama_mahasiswa'])) echo $data['nama_mahasiswa'] ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="prodi">Prodi: </label>
										<div class="controls">
											<input class="input-xlarge focused" type="text" id="prodi" name="prodi"
                                                   value="<?php if(isset($data['prodi'])) echo $data['prodi'] ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="ulangi">Ulangi : </label>
										<div class="controls">
											<input class="input-xlarge focused" type="text" id="ulangi" name="npm" value="">
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">Proses Data</button>
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
                                        while($data = mysqli_fetch_assoc($query)){
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
				</div>
		</div>
	</body>
</html>
