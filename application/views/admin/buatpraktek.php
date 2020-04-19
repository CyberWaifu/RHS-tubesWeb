<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambahpraktik"><i class="fas fa-plus fa-sm"></i>Buat jadwal Praktik baru</button>

    
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>Nama Dokter</th>
            <th>Jenis Dokter</th>
            <th>Jam Praktik</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php 
        $no=1;
        foreach ($praktik as $prk) :  ?>
           
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $prk->nama_dokter ?></td>
                <td><?php echo $prk->jenis_dokter ?></td>
                <td><?php echo $prk->tgl_praktik?></td>
                <td><?php echo anchor('admin/daftar/pasien/' .$prk->id_praktik,'<div class="btn btn-sm btn-success"><i class="fas fa-edit">Pasien</i></div>') ?></td>
                

        <?php endforeach; ?>

    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahpraktik" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Praktik</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'index.php/admin/daftar/tambah_praktik'?>" method="post" enctype="multipart/form-data">

            <div class="form group">
                <label>Nama Dokter</label>
                <input type="text" name="nama_dokter" class="form-control">
            </div>

            <div class="form group">
                <label>Jenis Dokter</label>
                <input type="text" name="jenis_dokter" class="form-control">
            </div>

            <div class="form group">
                <label>HH/II</label>
                <input type="text" name="tgl_praktik" class="form-control" placeholder="Jam praktik">
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>
     

    </div>
  </div>
</div>
