<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Agency - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>



  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Dr Ramdan Hospital Service</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in" style="color: gold;">Layanan Kesehatan Terpadu Berbasis WEB</div>
        <div class="intro-heading text-uppercase" style="color:white">Dr Ramdan Hospital Service</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger">Register</a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Layanan</h2>
          <h3 class="section-subheading text-muted">Kami menyediakan berbagai macam layanan kesehatan sebagai berikut</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-success"></i>
            <i class="fas fa fa-cart-plus fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Apotek Online</h4>
          <p class="text-muted">Kami menyediakan berbagai macam obat-obatan dan alat-alat kesehatan
			yang bisa anda pesan secara online.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-success"></i>
            <i class="fas fa fa-plus-square fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Info Kesehatan</h4>
          <p class="text-muted">kami menyediakan berbagai info dan berita terkini terkait dengan
			kesehatan.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-success"></i>
            <i class="fas fa fa-stethoscope fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Daftar Online</h4>
          <p class="text-muted">Kami menyedikan pendaftaran online bagi pasien Dr Ramdan Hospital
			Service</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Portfolio</h2>
          <h3 class="section-subheading text-muted">Kami berusaha untuk memberikan pelayanan yang terbaik
			  bagi masyarakat Indonesia.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/portfolio/RS-Ambulance.jpg" alt="Ambulance">
          </a>
          <div class="portfolio-caption">
            <h4>Cepat Tanggap</h4>
            <p class="text-muted">Respon cepat dan tanggap selama 24 jam, siap menerjang badai demi keselamatan anda</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/portfolio/RS-Medic.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Tenaga Kerja</h4>
            <p class="text-muted">Tenaga kerja kami bekerja dengan prinsip profesionalitas demi memberikan yang terbaik</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/portfolio/RS-Coridor.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Fasilitas</h4>
            <p class="text-muted">Kami menyediakan Fasilitas yang lengkap
			  demi menunjang kebutuhan pasien</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/portfolio/RS-Kebersihan.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Kebersihan</h4>
            <p class="text-muted">Kami selalu menjaga kebersihan dan kesehatan lingkungan kami</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/portfolio/RS-Pembayaran.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Pembayaran</h4>
            <p class="text-muted">Kami memberikan berbagai kemudahan dalam proses pembayaran</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/portfolio/RS-News.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>News</h4>
            <p class="text-muted">Kami Selalu menyediakan info kesehatan untuk mengedukasi masyarakat</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">About</h2>
          <h3 class="section-subheading text-muted">Kepercayaan anda adalah motivasi kami</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="<?php echo base_url(); ?>assets/img/about/DrRamdan.png" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>2020-2020</h4>
                  <h4 class="subheading">Sejarah Dr Ramdan Hospital Service</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Dr ramdan adalah pelopor berdirinya layanan ini, Beliau adalah jenius dan pakar dalam bidang kesehatan. Untuk menghargai jasa-jasa beliau yang tidak ternilai maka didirikanlah layanan web ini.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="<?php echo base_url(); ?>assets/img/about/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>March 2020</h4>
                  <h4 class="subheading">Layanan dilahirkan</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Dr Ramdan yang baru pulang dari luar negeri, menggagaskan idenya dan mengumpulkan sebuah tim untuk membentuk suatu layanan kesehatan terpadu berbasis web.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="<?php echo base_url(); ?>assets/img/about/3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>April 2020</h4>
                  <h4 class="subheading">Awal dari Perjuangan</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Dr Ramdan beserta Tim berhasil membuat suatu layanan sebuah web prototype yang
					dapat menunjang kebutuhan akan pelayanan kesehatan pada masa ini.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="<?php echo base_url(); ?>assets/img/about/4.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Mei 2020</h4>
                  <h4 class="subheading">Perjalan Masih Panjang</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Perjuangan kami telah mengantarkan kami kepada masa ini. Kami akan terus berjuang untuk menyediakan dan memberikan pelayan demi masyarakat Indonesia</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Be Part
                  <br>Of Our
                  <br>Story!</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">team kami</h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/img/team/hakim.jpg" alt="hakim">
            <h4>Rizki Amalullah Hakim</h4>
            <p class="text-muted">1301180522</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/rizkiamanullah/?hl=id">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/img/team/reihan.jpg" alt="">
            <h4>Reihan Muhamad Aziz</h4>
            <p class="text-muted">1301184043</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/xray.reihan">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/reihan_xray/">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/img/team/ariq.jpg" alt="">
            <h4>M Rizq Athariq</h4>
            <p class="text-muted">1301180349</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/mhmdariq/?hl=id">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
		  
        </div>
      </div>
	<div class="row">
		<div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/img/team/dini.jpg" alt="">
            <h4>Khalisyahdini</h4>
            <p class="text-muted">1301180208</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/khalisyahdini/?hl=id">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
		<div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/img/team/hafiz.jpg" alt="">
            <h4>Hafizh Indriyanto</h4>
            <p class="text-muted">1301180386</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/hazhindrynto/?hl=id">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
	</div>
	  
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">Kami segenap team Dr Ramdan Hospital Service mengucapkan terimakasih yang sebesar-besarnya telah mengunjungi dan menikmati web ini</p>
        </div>
      </div>
    </div>
  </section>

  

  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contact Us</h2>
          <h3 class="section-subheading text-white">DrRHS@gmail.com<br>Emergency cal : 119</h3>
			
        </div>
      </div>
	</div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; DrRamdanHospitalService</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Cepat Tanggap</h2>
                <img class="img-fluid d-block mx-auto" src="<?php echo base_url(); ?>assets/img/portfolio/RS3.jpg" alt="">
                <p>Kami selau siap waspada , selalu stanby 24 jam demi mengatasi segala kemungkinan kritikal yang mung
				  kin saja terjadi. Tim kami siap menerjang badai apabila diperlukan karena keselamatan pasienlah
				  yang selalu kami utamakan</p>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Portfolio</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Tenaga Kerja</h2>
                <img class="img-fluid d-block mx-auto" src="<?php echo base_url(); ?>assets/img/portfolio/RS2.jpg" alt="">
                <p>Tenaga kerja kami dipilih dari orang orang yang berkompeten dan berkeahlian tinggi
				  demi dapat memberikan layanan dengan profesionalitas tinggi kepada pasien dan masyarakat </p>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Portfolio</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Fasilitas</h2>
                <img class="img-fluid d-block mx-auto" src="<?php echo base_url(); ?>assets/img/portfolio/RS1.jpg" alt="">
                <p>Fasilitas yang disediakan kami adalah standar internasional sehingga terjamin keamanannya dan
				  kelengkapannya sehingga layanan kami bisa mengcover kondisi-kondisi darurat yang
				  biasanya rawan terjadi kepada pasien</p>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Portfolio</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Kebersihan</h2>
                <img class="img-fluid d-block mx-auto" src="<?php echo base_url(); ?>assets/img/portfolio/RS5.jpg" alt="">
                <p>Kebersihan lingkungan kami juga sangatlah penting untuk menjamin kesehatan lingkungan
				 , semua ini demi mencegah penularan penyakit dari suatu individu ke indvidu lain oleh karena
				  itu kami menyediakan tim kebersihan untuk selalu berkeliling untuk membersihkan lingkungan</p>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Portfolio</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Pembayaran</h2>
                <img class="img-fluid d-block mx-auto" src="<?php echo base_url(); ?>assets/img/portfolio/RS4.jpg" alt="">
                <p>kami memberikan proses pembayaran dengan alur yang sederhana, selain itu kami menyediakan
				  berbagai macam pilihan pembayaran demi memuaskan dan memudahkan konsumen</p>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Portfolio</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">News</h2>
                <img class="img-fluid d-block mx-auto" src="<?php echo base_url(); ?>assets/img/portfolio/RS6.jpg" alt="">
                <p>Kami menyediakan berita dan informasi terupdate terkait dengan dunia kesehatan
				  guna menjadikan masyarakat teredukasi dan waspada akan penyakit-penyakit berbahaya
				  yang terjadi di masyarakat</p>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Portfolio</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>  
  <script src="https://kit.fontawesome.com/yourcode.js"></script>


  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url(); ?>assets/js/agency.min.js"></script>

</body>

</html>
