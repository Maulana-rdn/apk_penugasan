<div class="container-fluid">
<div class="content-wrapper">

	<h3 style="text-align: center">DATA SISWA</h3><hr>

	<table style="text-align: center" class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>NISN</th>
			<th>NIS</th>
			<th>NAMA SISWA</th>
			<th>TANGGAL LAHIR</th>
			<th>JURUSAN</th>
			<th>ALAMAT</th>
			<th>EMAIL</th>
			<th>NO. TELEPON</th>
			
		</tr><hr>

		<?php 
		$no= 1;
		foreach ($siswa as $siswa): ?>

		<tr>
			<td><?php echo $no++ ?></td>
    		<td><?php echo $siswa->nisn ?></td>
    		<td><?php echo $siswa->nis ?></td>
   			<td><?php echo $siswa->nama ?></td>
   			<td><?php echo $siswa->tgl_lahir ?></td>
   			<td><?php echo $siswa->jurusan ?></td>
   			<td><?php echo $siswa->alamat ?></td>
   			<td><?php echo $siswa->email ?></td>
   			<td><?php echo $siswa->no_telp ?></td>

		</tr>

	<?php endforeach; ?>
	</table>
<hr>
</div>
</div>
