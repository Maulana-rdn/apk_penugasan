<div class="container-fluid">
<div class="content-wrapper">

	<h3 style="text-align: center">DATA TUGAS</h3><hr>

	<table style="text-align: center" class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>ID TUGAS</th>
			<th>ID WAKEL</th>
			<th>NAMA SISWA</th>
			<th>TUGAS</th>
			<th>TANGGAL TUNTAS</th>
			<th>TANGGAL BATAS</th>
			<th>PENDIDIKAN AGAMA ISLAM</th>
			<th>BAHASA INDONESIA</th>
			<th>MATEMATIKA</th>
		</tr>
		<?php 
		$no= 1;
		foreach ($tugas as $tugas): ?>

		<tr>
			<td><?php echo $no++ ?></td>
    		<td><?php echo $tugas->id_tugas ?></td>
    		<td><?php echo $tugas->id_wakel ?></td>
   			<td><?php echo $tugas->nama_siswa ?></td>
   			<td><?php echo $tugas->tugas ?></td>
   			<td><?php echo $tugas->tgl_tuntas ?></td>
   			<td><?php echo $tugas->tgl_batas ?></td>
   			<td><?php echo $tugas->pai ?></td>
   			<td><?php echo $tugas->indo ?></td>
   			<td><?php echo $tugas->matematika ?></td>
		</tr>

	<?php endforeach; ?>
	</table>
<hr>
</div>
</div>