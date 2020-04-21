<!DOCTYPE html>
<html lang="en">
<style>
  .bg {
  /* The image used */
  background-image: url("<?php echo base_url('assets/img/header-bg.jpg'); ?>");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

<body class="bg">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <?php echo $this->session->flashdata('pesan') ?>
                  <form method="post" action="<?php echo base_url('index.php/auth/login') ?>" class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" name="username">
                        <?php echo form_error('username','<div class="text-danger small ml-2">','</div>') ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                      <?php echo form_error('password','<div class="text-danger small ml-2">','</div>') ?>
                    </div>
                    
                    <button type="submit" class="btn btn-primary form-control">Login</button>
                    
                  <div class="text-center mt-2">
                    <a class="small" href="<?php echo base_url('index.php/registrasi/index') ?>">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  

</body>

</html>
