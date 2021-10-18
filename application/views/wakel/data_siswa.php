 <div class="container-fluid">

      <?php echo $this->session->flashdata('message'); ?>
      <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_siswa"><i class="fa fa-plus fa-sm"></i> Tambah Data Siswa</button>

      <a class="btn btn-sm btn-danger mb-3" href="<?php echo base_url('wakel/data_siswa/print') ?>" target="_blank"><i class="fa fa-print fa-sm"></i> Print </a>
      <a class="btn btn-sm btn-warning mb-3" href="<?php echo base_url('wakel/data_siswa/pdf') ?>" target="_blank"><i class="fa fa-file-pdf fa-sm"></i> Export PDF </a>


      <table class="table table-bordered">
        <tr>
          <th>NO</th>
          <th>NISN</th>
          <th>NAMA SISWA</th>
          <th>TANGGAL LAHIR</th>
          <th>JURUSAN</th>
          <th colspan="3">AKSI</th>
        </tr>

        <?php 

        $no = 1;
        foreach ($siswa as $siswa) : ?>

        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $siswa->nisn ?></td>
          <td><?php echo $siswa->nama ?></td>
          <td><?php echo $siswa->tgl_lahir ?></td>
          <td><?php echo $siswa->jurusan ?></td>
          <td><?php echo anchor('wakel/data_siswa/detail/' .$siswa->nisn, '<div class="btn btn-primary btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
           <td><?php echo anchor('wakel/data_siswa/edit/' .$siswa->nisn, '<div class="btn btn-success btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            <td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('wakel/data_siswa/hapus/'.$siswa->nisn, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
        </tr>

      <?php endforeach; ?>
      </table>

<!-- Modal -->
<div class="modal fade" id="tambah_siswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA SISWA</h5>
      </div>
      <div class="modal-body">
          <?php echo form_open_multipart('wakel/data_siswa/tambah_aksi'); ?>

            <div class="form-group">
                <label>NISN</label>
                <input type="text" name="nisn" class="form-control">
            </div>
            <div class="form-group">
                <label>NIS</label>
                <input type="text" name="nis" class="form-control">
            </div>  
            
            <div class="form-group">
                <label>NAMA SISWA</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label>TANGGAL LAHIR</label>
                <input type="date" name="tgl_lahir" class="form-control">
            </div>
             <div class="form-group">
             <label>JURUSAN</label>
             <select class="form-control" name="jurusan">
               <option>Rekayasa Perangkat Lunak</option>
               <option>Teknik Komputer Jaringan</option>
               <option>Teknik Kendaraan Ringan</option>
             </select>
           </div>
             <div class="form-group">
                <label>ALAMAT</label>
                <input type="text" name="alamat" class="form-control">
            </div>
             <div class="form-group">
                <label>EMAIL</label>
                <input type="text" name="email" class="form-control">
            </div>
             <div class="form-group">
                <label>NO. TELEPON</label>
                <input type="text" name="no_telp" class="form-control">
            </div>
            
            <div class="form-group">
                <input type="hidden" name="id_login" class="form-control">
                <label>UPLOAD FOTO</label>
                <input type="file" name="foto" class="form-control">
            </div>

      
           </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

        <?php echo form_close(); ?>
    </div>
  </div>
</div>