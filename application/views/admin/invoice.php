<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>id_invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
            
        </tr>
        
        <?php foreach ($invoice as $inv): ?>
        <tr>
            <td><?php echo $inv->id_invoice ?></td>
            <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->alamat ?></td>
            <td><?php echo $inv->tgl_pesan ?></td>
            <td><?php echo $inv->batas_bayar ?></td>
            <td><div class="btn btn-sm btn-primary">detail</div></td>
        </tr>

        <?php endforeach; ?>
    </table>
</div>