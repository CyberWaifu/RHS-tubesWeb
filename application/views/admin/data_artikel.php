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
    max-width: 100%;
    margin: 0 auto;
    padding: 10px 0 10px; 
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
    <div class=" container-fluid ">
        <div class="row rounded">
            <div class="col-12 rounded">
                <div class="mt-5 bg-success rounded text-white <?php echo $dnone; ?>"> 
                  <div class="col-11 ml-1 "><br>
                    <h5> <?php echo $info; ?> </h5>
                  </div><br>
                </div><br>
                <?php echo anchor('admin/artikel_admin/tambah_page','<h5 class="btn btn-sm btn-primary"> Tambah Artikel </h5>')?>
                
              <!-- INI TEMPAT KONTEN -->
                <div class="content-section rounded">
                    <ul class="list-unstyled list-box-data normal" style="margin-left: 40px; margin-top: 10px;">
                      <br>
                     <?php if($artikel==NULL){ ?>
                      <h2 class="text-center" style="margin-bottom: 200px;">Data Kosong</h2>
                     <?php } ?>
                      <h3 class="text-center" style="margin-bottom: 2px;"> Edit Artikel </h3>
                    <hr class="sidebar-divider d-none d-md-block" style="margin-right: 100px;">
                     <?php foreach($artikel as $art) :?>
                      <table>
                        <tbody>
                          <td>
                            <div class="content-item" data-id="">
                          <div class="row row-1">
                            <div class="col-7 col-sm-9">
                              <?php echo '<div class = "col-12" style="margin-top: 25px;">
                                <h3 class="title poppins-semibold medium mt-2 js-cropText" style=" text-align: left; float: none; position: static; ">
                                  <img class="img-fluid rounded" src="'.$art->gambar.'" alt><br><br>
                                  <div class="">
                                    <span>'.$art->judul.'</span>
                                  </div>
                                </h3>
                              </div>'?>
                              <div class="col-11 desc mt-2 js-cropText" style="float: none; position: static;">
                                <?php echo $art->caption; ?>
                              </div>
                              <div class="col-11 author mt-2">
                                <span><?php echo $art->n_date?></span>
                                <span class="ml-1 mr-1">|</span>
                                <?php echo '<span class="col-7">'.$art->n_author.'</span>'?>
                              </div>
                              <div class="col-11">
                                Kategori : <?php echo '<span class="col-7" style="margin-top: 0px;">'.$art->n_kategori.'</span>' ?>
                              </div>
                              <div class="col-11 mt-2">
                                <?php echo anchor('admin/artikel_admin/editor/'.$art->id_artikel,'<span class="btn btn-sm btn-success"> Edit </span>')?>
                                <?php echo anchor('admin/artikel_admin/hapus/'.$art->id_artikel,'<span class="btn btn-sm btn-danger">Hapus</span>')?>
                              </div>
                            </div>
                          </div>
                        </div>
                          </td>
                        </tbody>
                      </table>
                      <hr class="sidebar-divider d-none d-md-block" style="margin-right: 100px;">
                      
                          
                      <?php endforeach; ?>
                   </ul>
                </div>
            </div>
            
    </div>
</article>
  </div>
</div>