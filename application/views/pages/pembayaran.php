<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                $grand_total = 0;
                if ($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                echo "<h4>Total Belanja Anda : Rp. ".number_format($grand_total, 0,',','.');
                 ?>
            </div><br><br>

            <h3>input alamat pengiriman dan pembayaran</h3>

            <form  method="post" action="<?php echo base_url().'index.php/dashboard/proses_pesanan' ?> ">
        
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="nama lengkap anda" class="form-control">
                </div>
                
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="alamat lengkap anda" class="form-control">
                </div>
                
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="no-tlp" placeholder="nomor telepon anda" class="form-control">
                </div>
                
                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>Jne</option>
                        <option>Gojek</option>
                        <option>RHS-delivery</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>pilih bank</label>
                    <select class="form-control">
                        <option>BCA - XXXXXXX</option>
                        <option>Mandiri - XXXXXXX</option>
                        <option>BNI - XXXXXXX</option>
                        <option>BRI - XXXXXXX</option>
                    </select>
                </div>    

                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>

            </form>

                <?php 
            }else{
                echo "<h4>keranjang anda masih kosong";
                    
            }

            
                ?>
                
        </div>

        
        <div class="col-md-2"></div>
        
    </div>
    
</div>