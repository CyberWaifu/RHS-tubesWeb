<div class="container-fluid">
    
    <h3>Daftar Pasien yang berobat</h3>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>Nama pasien</th>
            <th>No Telepon</th>
            <th>Keluhan</th>
        </tr>

        <?php 
        $no=1;
        foreach ($praktik as $prk) :  ?>
           
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $prk->nama_pasien ?></td>
                <td><?php echo $prk->tlp_pasien ?></td>
                <td><?php echo $prk->keluhan ?></td>
            </tr>

        <?php endforeach; ?>

    </table>
    <?php echo anchor('admin/daftar/index/','<div class="btn btn-sm btn-danger">Kembali</div>') ?>
</div>