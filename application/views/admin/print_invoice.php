<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
        <body>
        <div class="container-fluid">
        <h4>Invoice Pemesanan Produk</h4>
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>id_invoice</th>
                <th>Nama Pemesan</th>
                <th>Alamat pengiriman</th>
                <th>Tanggal Pemesanan</th>
                <th>Batas Pembayaran</th>

                
            </tr>
            
            <?php foreach ($invoice as $inv) : ?>
            <tr>
                <td><?php echo $inv->id_invoice ?></td>
                <td><?php echo $inv->nama ?></td>
                <td><?php echo $inv->alamat ?></td>
                <td><?php echo $inv->tgl_pesan ?></td>
                <td><?php echo $inv->batas_bayar ?></td>

            </tr>

            <?php endforeach; ?>
            
        

    </table>
    <a class="btn btn-sm btn-danger" href="<?php echo base_url('index.php/admin/invoice/index') ?>">Kembali</a>
</div>

        <script type="text/javascript">window.print()</script>
    </body>

</html>