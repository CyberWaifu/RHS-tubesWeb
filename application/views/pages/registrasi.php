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

    <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form method="post" class="user" action="<?php echo base_url('index.php/registrasi/index') ?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nama anda" name="nama">
                  <?php echo form_error('nama','<div class="text-danger small ml-2">','</div>') ?>
                </div>
                

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username" name="username">
                  <?php echo form_error('username','<div class="text-danger small ml-2">','</div>') ?>
                </div>  
                
                

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password_1">
                        <?php echo form_error('password_1','<div class="text-danger small ml-2">','</div>') ?>
                    </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Re-enter Password" name="password_2">
                  </div>
                </div>
                
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Register
                </button>
              
               
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?php echo base_url('index.php/auth/login')?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>

</html>
