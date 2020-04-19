<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">


            <h3>input data pasien</h3>

            <form  method="post" action="<?php echo base_url(). 'index.php/admin/daftar/berobat'?> ">
        
                    <div class="form-group">
                        <label>Pilih Praktik Dokter</label>
                        <select class="form-control" name="id_praktik">
                            
                        <?php foreach ($praktik as $prk) :  ?>
                            <option value="<?php echo $prk->id_praktik ?>"><?php echo $prk->nama_dokter ?></option>
                        <?php endforeach; ?>
                            
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Nama Pasien</label>
                        <input type="text" name="nama_pasien" placeholder="nama lengkap anda" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label>No. Telepon</label>
                        <input type="text" name="tlp_pasien" placeholder="No telepon" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label>Keluhan</label>
                        <input type="text" name="keluhan" placeholder="keluhan" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Daftar</button>
                

            </form>
                
        </div>

        
        <div class="col-md-2"></div>
        
    </div>
    
</div>