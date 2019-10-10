<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BF21 - Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../dashboard-admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../dashboard-admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../dashboard-admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../dashboard-admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dashboard-admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../dashboard-admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../dashboard-admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../dashboard-admin/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <img src="../dashboard-admin/dist/img/bf21.png" alt="" style="width: 10rem; height: 10rem;">
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="login-logo">
        <img src="dist/img/bf21.png" alt="" style="width: 10rem; height: 10rem;">
      </div>
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="index.html" method="POST" action="">
          <div class="input-group mb-3">
            <input type="email" name="user" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" name="btnaccess" class="btn btn-block btn-flat btn-primary">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
          <?php
  if(isset($_POST['btnaccess'])){
   // Conexao com o banco
 include 'connect.php';
 $user=addslashes($_POST['user']);
 $password=addslashes($_POST['password']);
 $consult=$pdo->prepare("select * from usuarios where usuario='$user' and senha='$password'");
 $consult->execute();
 if($consult->rowCount()== 1){
 $consult1=$consult->fetch(PDO::FETCH_ASSOC);
 $_SESSION['userc'] = $user;
 $_SESSION['passwordc'] = $password;
 echo ("<script language="javascript">window.location='../dashboard-admin/dashboard.php';</script>
 <script type='text/javascript'> alert('Bienvenu');</script>");
 }else {
 echo '<center><br><p style="color:red">ACCESS DENYED! INVALID EMAIL/PASSWORD</p></center>';
 }
}
                                                                            ?> 
        </form>

        <div class="social-auth-links text-center mb-3">
          <a href="../dashboard-user/dashboard.php">User</a>
          ||||
          <a href="../dashboard-admin/dashboard.php">Admin</a>

        </div>
        <!-- /.social-auth-links -->

        <!-- /.social-auth-links -->

        <p class="mb-1">
          <a href="#">I forgot my password</a>
        </p>
        <p class="mb-0">
          <a href="register.php" class="text-center">Register a new membership</a>
        </p>
      </div>
    </div>
    <!-- /.login-box -->
</body>

</html>