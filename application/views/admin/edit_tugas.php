<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> EDIT DATA TUGAS</h3>
	<?php foreach($tugas as $tugas) : ?>
		<form method="post" action="<?php echo base_url(). 'admin/data_tugas/update' ?>" >
			
			<div class="form-group">
				<label>ID WAKEL</label>
				<input type="hidden" name="id_tugas" class="form-control" value="<?php echo $tugas->id_tugas ?>">
				<input type="text" name="id_wakel" class="form-control" value="<?php echo $tugas->id_wakel ?>">
			</div>
			<div class="form-group">
				<label>NAMA SISWA</label>
		        <input type="text" name="nama_siswa" class="form-control" value="<?php echo $tugas->nama_siswa?>">
			</div>
			 <div class="form-group">
             <label>TUGAS</label>
             <select class="form-control" name="tugas">
               <option>Belum Tuntas</option>
               <option>Tuntas</option>
             </select>
            </div>
			<div class="form-group">
				<label>TANGGAL TUNTAS</label>
		        <input type="date" name="tgl_tuntas" class="form-control" value="<?php echo $tugas->tgl_tuntas?>">
			</div>
			<div class="form-group">
				<label>TANGGAL BATAS</label>
		        <input type="date" name="tgl_batas" class="form-control" value="<?php echo $tugas->tgl_batas?>">
			</div>
			<div class="form-group">
				<label>PENDIDIKAN AGAMA ISLAM</label>
		        <input type="text" name="pai" class="form-control" value="<?php echo $tugas->pai?>">
			</div>
			<div class="form-group">
				<label>BAHASA INDONESIA</label>
		        <input type="text" name="indo" class="form-control" value="<?php echo $tugas->indo?>">
			</div>

			<div class="form-group">
				<label>MATEMATIKA</label>
		        <input type="text" name="matematika" class="form-control" value="<?php echo $tugas->matematika?>">
			</div>
			
			<a href="<?php echo base_url('admin/data_tugas/index') ?>" class="btn btn-sm mt-3 btn-primary">Kembali</a>
			<button type="submit" class="btn btn-success btn-sm mt-3"> Simpan </button>
			<hr>
		
		</form>

	<?php endforeach; ?>
</div>