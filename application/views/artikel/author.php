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
    <div class=" container-fluid">
        <div class="row">
            <div class="col">
                <div class="title-section">
                    <!-- INI TITLE -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="<?php echo base_url('assets/img/slider5.jpg') ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="<?php echo base_url('assets/img/slider4.jpg') ?>" class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            
            </div>
        </div>
        <div class="row">
            <div class="col-12">
              <!-- INI TEMPAT KONTEN -->
                <div class="content-section">
                    <ul class="list-unstyled list-box-data normal" style="margin-left: 40px; margin-top: 10px;">
                      <br>
                     <?php if($artikel==NULL){ ?>
                      <h2 class="text-center " style="margin-bottom: 200px;">Data Kosong</h2>
                     <?php } ?>
                      <h4 class="text-center font-weight-bold" style="margin-bottom: 2px;"> Author <?php $i=0; foreach($artikel as $art): if($i<1){ echo $art->n_author; }else {echo "";} $i++; endforeach;  ?> </h4>
                    <hr class="sidebar-divider d-none d-md-block" style="margin-right: 100px;">
                     <?php foreach($artikel as $art) :?>
                      <table>
                        <tbody>
                          <td>
                            <div class="content-item" data-id="">
                          <div class="row row-1">
                            <div class="col-7 col-sm-9">
                              <?php echo anchor('artikel/detail/' .$art->id_artikel,'<div class = "btn btn-link" style="margin-top: 25px;">
                                <h4 class="title poppins-semibold medium mt-2 js-cropText" style=" text-align: left; float: none; position: static; ">
                                  <img class="img-fluid" src="'.$art->gambar.'" alt>
                                  <div class="">
                                    <span>'.$art->judul.'</span>
                                  </div>
                                </h4>
                              </div>')?>
                              <div class="col-11 desc mt-2 js-cropText" style="float: none; position: static;">
                                <?php echo $art->caption; ?>
                              </div>
                              <div class="col-11 author mt-2">
                                <span><?php echo $art->n_date?></span>
                                <span class="ml-1 mr-1">|</span>
                                <?php echo anchor('artikel/author/' .$art->k_author,'<div class="btn btn-link">'.$art->n_author.'</div>')?>
                              </div>
                              <div class="col-11">
                                Kategori : <?php echo anchor('artikel/per_kategori/'.$art->k_kategori, '<div class="btn btn-link" style="margin-top: 0px;">'.$art->n_kategori.'</div>') ?>
                              </div>
                              <div class="col-11 mt-2">
                                <?php echo anchor('artikel/detail/' .$art->id_artikel,'<div class="btn btn-sm btn-success">Baca selengkapnya</div>')?>
                              </div>
                            </div>
                          </div>
                        </div>
                          </td>
                        </tbody>
                      </table>
                     <!-- <li class="mb-4">
                        <div class="content-item" data-id="">
                          <div class="row row-1">
                            <div class="col-7 col-sm-9">
                              <div class="col-11">
                                <?php echo anchor('artikel/per_kategori/'.$art->k_kategori, '<div class="btn btn-link" style="margin-top: 0px;">'.$art->n_kategori.'</div>') ?>
                              </div>
                              <?php echo anchor('artikel/detail/' .$art->id_artikel,'<div class = "btn btn-link" style="margin-top: 25px;">
                                <h4 class="title poppins-semibold medium mt-2 js-cropText" style=" text-align: left; float: none; position: static; ">
                                  <img class="img-fluid" src="'.$art->gambar.'" alt>
                                  <div class="">
                                    <span>'.$art->judul.'</span>
                                  </div>
                                </h4>
                              </div>')?>
                              <div class="col-11 desc mt-2 js-cropText" style="float: none; position: static;">
                                <?php echo $art->caption; ?>
                              </div>
                              <div class="col-11 author mt-2">
                                <span><?php echo $art->tanggal?>-<?php echo $art->bulan?>-<?php echo $art->tahun?></span>
                                <span class="ml-1 mr-1">|</span>
                                <?php echo anchor('artikel/author/' .$art->k_author,'<div class="btn btn-link">'.$art->n_author.'</div>')?>
                              </div>
                              <div class="col-11 mt-2">
                                <?php echo anchor('artikel/detail/' .$art->id_artikel,'<div class="btn btn-sm btn-success">Baca selengkapnya</div>')?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li> -->
                      <hr class="sidebar-divider d-none d-md-block" style="margin-right: 100px;">
                      
                          
                      <?php endforeach; ?>
                   </ul>
                </div>
            </div>
            
        </div>
    </div>
</article>
  </div>
</div>