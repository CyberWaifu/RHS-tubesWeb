<div class="container-fluid">
    <h3>Jadwal Praktik Dokter   <button class="btn btn-danger">Hari Minggu Libur</button></h3>
    
    <table class="table table-bordered mt-3">
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
                <td><?php echo anchor('admin/daftar/daftar_berobat/' .$prk->id_praktik,'<div class="btn btn-warning btn-sm"><i class="fa fa-edit">   Daftar</i></div>') ?></td>
            </tr>

        <?php endforeach; ?>

    </table>
    
</div>