<div class="container-fluid">
<div class="content-wrapper">
		<h3><i class="fas fa-search-plus"></i> DETAIL DATA SISWA</h3>

		<table class="table table-bordered">
			<tr>
				<th>NISN</th>
				<td><?php echo $detail->nisn ?></td>
			</tr>
			<tr>
				<th>NIS</th>
				<td><?php echo $detail->nis ?></td>
			</tr>
			<tr>
				<th>NAMA SISWA</th>
				<td><?php echo $detail->nama ?></td>
			</tr>
			<tr>
				<th>TANGGAL LAHIR</th>
				<td><?php echo $detail->tgl_lahir ?></td>
			</tr>
			<tr>
				<th>JURUSAN</th>
				<td><?php echo $detail->jurusan ?></td>
			</tr>
			<tr>
				<th>ALAMAT</th>
				<td><?php echo $detail->alamat ?></td>
			</tr>
			<tr>
				<th>EMAIL</th>
				<td><?php echo $detail->email ?></td>
			</tr>
			<tr>
				<th>N0. TELEPON</th>
				<td><?php echo $detail->no_telp?></td>
			</tr>
			
			<tr>
				<th>FOTO</th>
				<td>
					<img src="<?php echo base_url(); ?>assets/foto/<?php echo $detail->foto; ?>" width="100" height="100">
				</td>
			</tr>
		</table>

		<a href="<?php echo base_url('admin/data_siswa/index') ?>" class="btn btn-sm btn-primary">Kembali</a>
		<hr>
</div>
</div>