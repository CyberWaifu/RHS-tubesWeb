<div class="container-fluid">
<!-- NGIKUTIN ARTIKEL PAGE SEHATQ.COM -->
<!-- INI SCRIPT UNTUK LAYOUT ARTIKEL -->
<style type="">

.content-section {
  min-height: 2000px;
}
.sidebar-section {
  position: absolute;
  height: 100%;
  width: 100%;
}

.sidebar-item {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  
  /* Position the items */
}

.make-me-sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
    
  padding: 0 15px;
}

/*INI WARNA*/
body {
  background: #fff;
}

article {
  background: #f1f1f1;
  border-radius: 12px;
  padding: 25px 0 600px;
}


.title-section, .content-section, .sidebar-section {
  background: #fff;
}

.title-section {
  text-align: center;
  padding: 50px 15px;
  margin-bottom: 30px;
}

.content-section h2 {
  text-align: left;
  margin: 0;
  padding-top: 200px;
}

.sidebar-item {
  text-align: center;
}

h3 {
    background: gold;
    max-width: 100%;
    margin: 0 auto;
    padding: 50px 0 100px; 
    border-bottom: solid 1px #fff;
  }

  /*INI UNTUK LAYOUT KONTEN*/
  .square{
    position: relative;
  }
  .square:after{
    content: '';
    display: block;
    padding-bottom: 100%;
  }
  .mb-4{
    margin-bottom: 1.5rem!important;
  }
</style>

<article>
  <!-- <div>Isi data komen: <br> <?php $date = date("D, d M Y G:i"); echo $date; var_dump($komen); echo "</div>Isi data artikel: <br><div>"; var_dump($artikel); echo "</div>Isi data user: <br><div>"; var_dump($user); ?> lihat kontroler artikel sama model_artikel</div> -->
    <div class=" container-fluid mb-1">
        <div class="row">
            <div class="col-12">
              <!-- INI TEMPAT KONTEN -->
                <div class="content-section">
                    <ul class="list-unstyled list-box-data normal" style="margin-left: 40px; margin-top: 10px;">
                     
                     <li class="mb-4">
                        <div class="content-item">
                          <div class="row row-1">
                            <div class="col-10">
                              <br> 
                              <hr class="sidebar-divider d-none d-md-block" style="margin-right: 100px;">
                            </div>
                            <div class="col-12 ">
                            <div class="col-11"> 


                              <?php echo form_open('/admin/artikel_admin/update/'.$artikel['id_artikel']) ?>
                              <h5>Silahkan isi artikel anda</h5> 
                              <hr class="sidebar-divider d-none d-md-block" style="margin-right: 100px;">
                              <div class="input-group mb-3"> 
                                <input value="<?php echo $artikel['judul']; ?>" type="text" name="judul" class="form-control" placeholder="Masukkan Judul" aria-label="Username" aria-describedby="basic-addon1">
                             </div>
                             <div class="input-group mb-3">
                                <input value="<?php echo $artikel['caption']; ?>" type="text" name="caption" class="form-control" placeholder="Masukkan Caption" aria-label="Caption" aria-describedby="basic-addon1">
                             </div>
                             <div><h5>Kategori artikel :</h5>
                               <select name="n_kategori" id="n_kategori" class="rounded btn col-12 btn-outline-secondary dropdown-toggle">
                                 <option value="Penyakit" >Penyakit</option>
                                 <option value="Kesehatan Mental" >Kesehatan Mental</option>
                                 <option value="Sex & Relationship" >Sex & Relationship</option>
                                 <option value="Parenting" >Parenting</option>
                                 <option value="Hidup Sehat" >Hidup Sehat</option>
                                 <option value="Bayi & Menyusui" >Bayi & Menyusui</option>
                                 <option value="Lainnya" >Bayi & Menyusui</option>
                               </select>
                             </div>
                             <br>
                             <div class="input-group mb-3"><h5> Isi artikel :</h5><br>
                               <div class="col-12">
                                 <textarea name="isi" cols="10" rows="20" type="text" class="form-control" placeholder="Masukkan isi artikel" aria-label="Username" aria-describedby="basic-addon1"><?php echo $artikel['isi']; ?></textarea>
                               </div>
                             </div>
                             <br>
                             
                             <!-- HIDDEN INPUT -->
                             <input type="hidden" name="">
                             <input type='hidden' name="n_author" value="<?php echo $artikel['n_author'];  ?>">
                             <input type="hidden" name="k_author" value="<?php echo $artikel['k_author'];  ?>">
                             <input type="hidden" name="n_date" value="<?php $date = date("D, d M Y"); echo $date; ?>">


                             <!-- INI UNTUK UPLOAD GAMBAR -->
                             <div class="input-group mb-3"><h5>Isikan link menuju gambar utama anda :</h5><br>
                               <div class="col-12">
                                 <input value="<?php echo $artikel['gambar']; ?>" name="gambar" type="text" class="form-control" placeholder="Link untuk gambar utama" aria-label="" aria-describedby="basic-addon1"><br>
                               </div>
                               
                               <!-- <h5>atau upload gambar :</h5><br>
                               <div class="col-11">
                               
                                 <div class="wrapper">
                                      <div class="file-upload">
                                        <?php echo $error; ?>
                                        <?php echo form_open_multipart('artikel_admin/tambah');?>
                                        <input type="file" name="userfile" size="20" />
                                          <br/><br />
                                      </div>
                                </div>
                               </div> -->
                             </div>
                              <button class="btn btn-success" type="submit" name="kirim" value="upload" >Edit Artikel</button>
                            </div>
                          </div>
                        </div>
                      </li>
                      </ul>
                </div>
            </div>            
        </div>
    </div>
</article>
  </div>
</div>