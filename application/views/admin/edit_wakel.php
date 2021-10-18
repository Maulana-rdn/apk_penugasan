<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> EDIT DATA WAKEL</h3>
	<?php foreach($wakel as $wakel) : ?>
		<form method="post" action="<?php echo base_url(). 'admin/data_wakel/update' ?>" >
			
			<div class="form-group">
				<label>NAMA WAKEL</label>
				<input type="hidden" name="id_wakel" class="form-control" value="<?php echo $wakel->id_wakel ?>">
				<input type="text" name="nama_wakel" class="form-control" value="<?php echo $wakel->nama_wakel ?>">
			</div>
			<div class="form-group">
				<label>ID LOGIN</label>
		        <input type="text" name="id_login" class="form-control" value="<?php echo $wakel->id_login?>">
			</div>
			<div class="form-group">
				<label>FOTO</label>
				<input type="file" name="foto" class="form-control" value="<?php echo $wakel->foto ?>">
			</div>

			<a href="<?php echo base_url('admin/data_wakel/index') ?>" class="btn btn-sm mt-3 btn-primary">Kembali</a>
			<button type="submit" class="btn btn-success btn-sm mt-3"> Simpan </button>
			<hr>
		
		</form>

	<?php endforeach; ?>
</div>