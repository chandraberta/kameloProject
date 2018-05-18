<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <link rel="shortcut icon" href="assets/img/favicon.png">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin.css');?>" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="<?php echo base_url('Login/aksi_login'); ?>" method="post"">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Username" name="username" required="required">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="password" required="required">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
            </div>
          <input type="submit" class="btn btn-primary btn-block" value="Login">
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('vendor/jquery-easing/jquery.easing.min.js');?>"></script>
</body>

</html>
