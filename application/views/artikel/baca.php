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

h3{
    background: white;
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
    <div class=" container-fluid">
        <div class="row">
            <div class="col-12">
              <!-- INI TEMPAT KONTEN -->
                <div class="content-section">
                    <ul class="list-unstyled list-box-data normal" style="margin-left: 40px; margin-top: 10px;">
                     <!-- <?php if($artikel==NULL){ ?>
                      <h2 class="text-center" style="margin-bottom: 200px;">Data Kosong</h2>
                     <?php } ?> -->
                     <?php  foreach($artikel as $artikel) :?>
                     <li class="mb-4">
                        <div class="content-item" data-id="">
                          <div class="row row-1">
                            <div class="col-10">
                              <br>
                              <h4 class=""><?php echo $artikel['judul']; ?></h4>
                            </div>
                            <div class="col-11 author mt-2">
                              <span><div class="">
                                Kategori : <?php echo anchor('artikel/per_kategori/'.$artikel['k_kategori'], '<div class="btn btn-link" style="margin-top: 0px;">'.$artikel['n_kategori'].'</div>') ?>
                              </div></span>
                              <span><?php echo $artikel['n_date'] ?></span>
                                <span class="ml-1 mr-1">|</span>
                                <?php echo anchor('artikel/author/' .$artikel['k_author'] ,'<div class="btn btn-link">'.$artikel['n_author'] .'</div>')?>
                            </div>
                            <div class="col-12">
                              <br>
                              <img class="rounded img-fluid" src="<?php echo $artikel['gambar']; ?>">
                              <!-- <?php echo "<img src".base_url("assets/".$gambar['nama_file']."' width='545' height='373'>"); ?> -->
                              <br>
                            </div> 
                            <div class="col-11">
                              <br>
                              <p style="text-align: left;"><?php 
                                  $input = $artikel['isi'];
                                  $explosion = explode("\r\n\r\n", $input);
                                  $text = "";

                                  for($i=0; $i<=count($explosion)-1;$i++){
                                    $part = str_replace($explosion[$i], "<p>".$explosion[$i]."</p>", $explosion[$i]);
                                    $text.=$part;
                                  }
                                  echo $text; ?></p>
                            </div>
                          </div>
                        </div>
                      </li>
                      <hr class="sidebar-divider d-none d-md-block" style="margin-right: 100px;">
                     <?php endforeach; ?>
                      <div class="col-7">
                        <h3>Komentar</h3>
                          <span name="name" >as <?php echo $user['nama'] ?></span>
                      </div>
                      <div class="col-7">
                        
                        <?php echo form_open('artikel/simpan_komentar')?>
                        <input type="hidden" name="refresh" value="<?php echo base_url(uri_string()) ?>">
                        <input type="hidden" name="iduser" value="<?php echo $user['id_user'] ?>">
                        <input type="hidden" name="idart" value="<?php echo $artikel['id_artikel'] ?>">
                        <input type="hidden" name="date" value="<?php $date = date("D, d M Y"); echo $date; ?>">
                        <input type="hidden" name="name" value="<?php echo $user['nama'] ?>">
                        <div class="input-group">
                          <textarea name="isi" cols="70" rows="5" class="form-control" aria-label=""></textarea>
                        </div><br>
                        <button class="btn btn-success" type="submit" name="kirim">Kirim Komentar</button>

                      </div>
                      <br>
                      <hr class="sidebar-divider d-none d-md-block" style="margin-right: 100px;">
                      <div class="col-10">

                          <?php foreach ($komen as $komen) :?>
                          
                          <div>
                            <ul>
                            <li>
                            <img height="50" src="https://www.pinclipart.com/picdir/big/200-2008697_account-customer-login-man-user-icon-login-icon.png">
                              <span class="col-7">&ensp;Dari <?php echo $komen['nama']; ?> pada <?php echo $komen['n_date']; ?> 
                              </span>
                                <br><br>
                               <p><?php echo $komen['isi']; ?></p> 
                            </ul>
                            <br><br>
                            </li>
                          </div>

                          <?php endforeach; ?>
                          </div>
                      </ul>
                </div>
            </div>
            
            
        </div>
    </div>
</article>
  </div>
</div>