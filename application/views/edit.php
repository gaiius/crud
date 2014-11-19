<html>
	<head>
	<title><?php echo"$judul"; ?></title>
		<link href="<?php echo base_url('css');?>/style.css" rel="stylesheet">
	</head>
	<body>
		<h1><?php echo"$judul";?></h1>
		<hr>
		<fieldset>
			<legend><h3>Update Data Siswa</h3></legend>
			<form method="POST" action="<?php echo site_url('crud/proses_edit'); ?>">
				<?php foreach($daftar->result() as $a):?>
					<input type="hidden" name="idMstAppr" value="<?php echo $a->idMstAppr; ?>"/>
					<input type="text" name="MstAppr1" value="<?php echo $a->MstAppr1; ?>"/>
					<input type="text" name="MstAppr2" value="<?php echo $a->MstAppr2; ?>"/>
					<input type="text" name="MstAppr3" value="<?php echo $a->MstAppr3;?>"/>
					<input type="text" name="MstAppr4" value="<?php echo $a->MstAppr4;?>"/>
					<input type="text" name="idMstUser" value="<?php echo $a->idMstUser;?>"/>
					<input type="submit" name="simapn" value="Update" class="submitButton">
					<a href="<?php echo site_url ('crud');?>">[ Home ]</a></td>
				<?php endforeach; ?>
			</form>
		</fieldset>
		<hr>
		<p>
			Cek My Info : Demo CRUD - Codeigniter | 2014
		</p>
	</body>
</html>
