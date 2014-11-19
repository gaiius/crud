<html>
	<head>
	<title><?php echo"$judul"; ?></title>
		<link href="<?php echo base_url('css');?>/style.css" rel="stylesheet">
	</head>
	<body>
		<h1><?php echo"$judul";?></h1>
		<hr>
		<fieldset>
			<legend><h3>Add New Siswa</h3></legend>
			<form method="POST" action="<?php echo site_url('crud/proses_tambah'); ?>">
				<input type="text" name="nama" placeholder="Nama"/>
				<select name="kelas">
					<option>-Pilih Kelas-</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select>

				<select name="kejuruan">
					<option>-Pilih Kejuruan-</option>
					<option value="ak">AK</option>
					<option value="ap">AP</option>
					<option value="pn">PN</option>
					<option value="rpl">RPL</option>
					<option value="upw">UPW</option>
				</select>
				<input type="submit" name="simapn" value="Simpan" class="submitButton">
				<a href="<?php echo site_url ('crud');?>">[ Home ]</a>
			</form>
		</fieldset>
		<hr>
		<p>
			Cek My Info : Demo CRUD - Codeigniter | 2014
		</p>
	</body>
</html>
