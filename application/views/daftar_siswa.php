<html>
	<head>
		<title><?php echo $judul; ?></title>
		<link href="<?php echo base_url('css');?>/style.css" rel="stylesheet">
	</head>
	<body>
		<h1><?php echo $judul; ?></h1>
		<hr>
		<a href="<?php echo site_url ('crud/tambah')?>">[ Tambah ]</a>
		<table cellpadding="5" cellspacing="5" width="100%" style="font-weight:bold;font-size:13px;">
			<tr>
				<th id="judul">No</td>
				<th id="judul">Appropal1</td>
				<th id="judul">Appropal3</td>
				<th id="judul">Appropal3</td>
				<th id="judul">Appropal4</td>
				<th id="judul">idMstUser</td>
				<th id="judul" colspan="2">Action</td>
			</tr>
			<?php foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->idMstAppr; ?></td>
				<td class="hd"><?php echo $a->MstAppr1; ?></td>
				<td class="hd"><?php echo $a->MstAppr2; ?></td>
				<td class="hd"><?php echo $a->MstAppr3; ?></td>
				<td class="hd"><?php echo $a->MstAppr4; ?></td>
				<td class="hd"><?php echo $a->idMstUser; ?></td>
				<td class="hd"><a href="<?php echo site_url ('crud/edit/'.$a->idMstAppr)?>"><input type="submit" value="Edit" class="submitButton"></a></td><td class="hd">
				<a href="<?php echo site_url ('crud/hapus/'.$a->idMstAppr)?>"><input type="submit" value="Delete" class="submitButton"></a></td>
			</tr>
			<?php } ?>
		</table>
		<hr>
		<p>
			Cek My Info : Demo CRUD - Codeigniter | 2014
		</p>
	</body>
</html>
