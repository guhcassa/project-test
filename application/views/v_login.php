<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Produk By Mfikri.com">
    <meta name="author" content="M Fikri Setiadi">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets2/css/bootstrap.css'?>" rel="stylesheet">
  </head>
  <body>
 
    <div class="container row-centered col-md-3">
          <form class="form-signin" class="col-md-4 col-md-offset-4" action="<?php echo base_url().'index.php/login/auth'?>" method="post">
      
            <h2 class="form-signin-heading" align="center"> Login Administrator </h2>
            <?php echo $this->session->flashdata('msg');?>
            <label for="username" class="sr-only">Username</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
          </form>
          <form class="form-signin" action="<?php echo base_url().'index.php/registrasi'?>" method="post">
          <button class="btn btn-lg btn-success btn-block" type="submit">Daftar Pasien</button>
          </form>
        </div>
        </div>
        </div> <!-- /container -->
 

 
    <!-- jQuery-->
    <script src="<?php echo base_url().'assets2/js/jquery.js'?>"></script>
    <!-- Bootsrap -->
    <script src="<?php echo base_url().'assets2/js/bootstrap.min.js'?>"></script>
 
  </body>
</html>