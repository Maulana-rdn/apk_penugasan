 <div class="container-fluid">

      <a class="btn btn-sm btn-danger mb-3" href="<?php echo base_url('siswa/data_tugas/print') ?>" target="_blank"><i class="fa fa-print fa-sm"></i> Print </a>
       <a class="btn btn-sm btn-warning mb-3" href="<?php echo base_url('siswa/data_tugas/pdf') ?>" target="_blank"><i class="fa fa-file-pdf fa-sm"></i> Export PDF </a>

      <table class="table table-bordered">
        <tr>
          <th>NO</th>
          <th>NAMA SISWA</th>
          <th>TUGAS</th>
          <th>TANGGAL TUNTAS</th>
          <th>TANGGAL BATAS</th>
          <th colspan="1">DETAIL</th>
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
          <td><?php echo anchor('siswa/data_tugas/detail/' .$tugas->id_tugas, '<div class="btn btn-primary btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
      
        </tr>

      <?php endforeach; ?>
      </table>
  </div>
  