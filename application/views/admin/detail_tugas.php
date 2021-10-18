<div class="container-fluid">
<div class="content-wrapper">
		<h3><i class="fas fa-search-plus"></i> DETAIL DATA TUGAS</h3>

	   <table class="table table-bordered">
			<tr>
				<th>PENDIDIKAN AGAMA ISLAM</th>
				<td><?php echo $detail->pai ?></td>
			</tr>
			<tr>
				<th>BAHASA INDONESIA</th>
				<td><?php echo $detail->indo ?></td>
			</tr>
			<tr>
				<th>MATEMATIKA</th>
				<td><?php echo $detail->matematika ?></td>
			</tr>
			<tr>
				<th>TANGGAL TUNTAS</th>
				<td><?php echo $detail->tgl_tuntas ?></td>
			</tr>
			<tr>
				<th>TANGGAL BATAS</th>
				<td><?php echo $detail->tgl_batas ?></td>
			</tr>
		</table>

		<a href="<?php echo base_url('admin/data_tugas/index') ?>" class="btn btn-sm btn-primary">Kembali</a>
		<hr>
</div>
</div>