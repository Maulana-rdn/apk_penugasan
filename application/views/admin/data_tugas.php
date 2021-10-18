 <div class="container-fluid">

      <?php echo $this->session->flashdata('message'); ?>
      <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_tugas"><i class="fa fa-plus fa-sm"></i> Tambah Data Tugas</button>

      <a class="btn btn-sm btn-danger mb-3" href="<?php echo base_url('admin/data_tugas/print') ?>" target="_blank"><i class="fa fa-print fa-sm"></i> Print </a>
       <a class="btn btn-sm btn-warning mb-3" href="<?php echo base_url('admin/data_tugas/pdf') ?>" target="_blank"><i class="fa fa-file-pdf fa-sm"></i> Export PDF </a>

      <table class="table table-bordered">
        <tr>
          <th>NO</th>
          <th>NAMA SISWA</th>
          <th>TUGAS</th>
          <th>TANGGAL TUNTAS</th>
          <th>TANGGAL BATAS</th>
          <th colspan="3">AKSI</th>
        </tr>

        <?php 

        $no = 1;
        foreach ($tugas as $tugas) : ?>

        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $tugas->nama_siswa ?></td>
          <td><?php echo $tugas->tugas ?></td>
          <td><?php echo $tugas->tgl_tuntas ?></td>
          <td><?php echo $tugas->tgl_batas ?></td>
          <td><?php echo anchor('admin/data_tugas/detail/' .$tugas->id_tugas, '<div class="btn btn-primary btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
           <td><?php echo anchor('admin/data_tugas/edit/' .$tugas->id_tugas, '<div class="btn btn-success btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            <td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('admin/data_siswa/hapus/'.$tugas->id_tugas, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
        </tr>

      <?php endforeach; ?>
      </table>

<!-- Modal -->
<div class="modal fade" id="tambah_tugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA TUGAS</h5>
      </div>
      <div class="modal-body">
          <?php echo form_open_multipart('admin/data_tugas/tambah_aksi'); ?>

            <div class="form-group">
                <input type="hidden" name="id_tugas" class="form-control">
                <label>ID WAKEL</label>
                <input type="text" name="id_wakel" class="form-control">
            </div>  
            
            <div class="form-group">
                <label>NAMA SISWA</label>
                <input type="text" name="nama_siswa" class="form-control">
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
                <input type="date" name="tgl_tuntas" class="form-control">
            </div>
             <div class="form-group">
                <label>TANGGAL BATAS</label>
                <input type="date" name="tgl_batas" class="form-control">
            </div>
             <div class="form-group">
                <label>PENDIDIKAN AGAMA ISLAM</label>
                <input type="text" name="pai" class="form-control">
            </div>
             <div class="form-group">
                <label>BAHASA INDONESIA</label>
                <input type="text" name="indo" class="form-control">
            </div>

            <div class="form-group">
                <label>MATEMATIKA</label>
                <input type="text" name="matematika" class="form-control">
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