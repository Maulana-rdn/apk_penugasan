<div class="container-fluid">

  <?php echo $this->session->flashdata('message'); ?>
  <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_wakel"><i class="fas fa-plus fa-sm"></i> Tambah Data Wakel </button> 

    <table class="table table-bordered">
      <tr>
        <th>NO</th>
        <th>ID WAKEL</th>
        <th>NAMA WAKEL</th>
        <th>ID LOGIN</th>
        <th>FOTO</th>
        <th colspan="2">AKSI</th>

      </tr>

      <?php
      $no=1;
      foreach($wakel as $wakel) : ?>

        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $wakel->id_wakel?></td>
          <td><?php echo $wakel->nama_wakel?></td>
          <td><?php echo $wakel->id_login?></td>
          <td><img src="<?php echo base_url (); ?>assets/foto/<?php echo $wakel->foto; ?>" width="100" height="100"></td>
                    <td><?php echo anchor('admin/data_wakel/edit_wakel/' .$wakel->id_wakel, '<div class="btn btn-success btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                    <td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('admin/data_wakel/hapus/' .$wakel->id_wakel, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                </tr>

            <?php endforeach; ?>
        </table>
</div>


<!-- Modal -->
<div class="modal fade" id="tambah_wakel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA WAKEL</h5>
      </div>
      <div class="modal-body">
          <?php echo form_open_multipart('admin/data_wakel/tambah_aksi'); ?>

            <div class="form-group">
                <input type="hidden" name="id_wakel" class="form-control">
                <label>NAMA WAKEL</label>
                <input type="text" name="nama_wakel" class="form-control">
            </div>
            <div class="form-group">
                <label>ID LOGIN</label>
                <input type="text" name="id_login" class="form-control">
            </div>

            <div class="form-group">
                <label>UPLOAD FOTO</label><br>
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