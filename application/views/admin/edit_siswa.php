<div class="container-fluid">
	<div class="content-wrapper">
	<h3><i class="fas fa-edit"></i> EDIT DATA SISWA</h3>
	<?php foreach($siswa as $siswa) : ?>
		<form method="post" action="<?php echo base_url(). 'admin/data_siswa/update' ?>" >
			
			<div class="form-group">
				<label>NIS</label>
				<input type="hidden" name="nisn" class="form-control" value="<?php echo $siswa->nisn ?>">
				<input type="text" name="nis" class="form-control" value="<?php echo $siswa->nis ?>">
			</div>
			<div class="form-group">
				<label>NAMA SISWA</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $siswa->nama ?>">
			</div>
			<div class="form-group">
				<label>TANGGAL LAHIR</label>
				<input type="date" name="tgl_lahir" class="form-control" value="<?php echo $siswa->tgl_lahir ?>">
			</div>
			<div class="form-group">
             <label>JURUSAN</label>
             <select class="form-control" name="jurusan" value="<?php echo $siswa->jurusan?>"> >
               <option>Rekayasa Perangkat Lunak</option>
               <option>Teknik Komputer Jaringan</option>
               <option>Teknik Kendaraan Ringan</option>
             </select>
           </div>
			<div class="form-group">
				<label>ALAMAT</label>
				<input type="text" name="alamat" class="form-control" value="<?php echo $siswa->alamat ?>">
			</div>
			<div class="form-group">
				<label>EMAIL</label>
				<input type="text" name="email" class="form-control" value="<?php echo $siswa->email ?>">
			</div>
			<div class="form-group">
				<label>NO. TELEPON</label>
		        <input type="text" name="no_telp" class="form-control" value="<?php echo $siswa->no_telp?>">
			</div>
			
			<div class="form-group">
				<label>FOTO</label>
				<input type="file" name="foto" class="form-control" value="<?php echo $siswa->foto ?>">
			</div>

			<a href="<?php echo base_url('admin/data_siswa/index') ?>" class="btn btn-sm mt-3 btn-primary">Kembali</a>
			<button type="submit" class="btn btn-success btn-sm mt-3"> Simpan </button>
			<hr>
		
		</form>

	<?php endforeach; ?>
</div>