<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Aplikasi Data DBC</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    
    <link href="css/signin.css" rel="stylesheet">


    <script src="js/ie-emulation-modes-warning.js"></script>
</head>

  <body>
    <?php 
      session_start();
      if (isset($_SESSION['user'])) {
        header("location:admin/index.php");
      }
     ?>

    <div class="container">

      <form class="form-signin" method="post" action="vertifikasi.php">
        <h2 class="form-signin-heading">Silahkan Login</h2>
        Username
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
        Password 
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" >Sign in</button>
      </form>
    <?php 
      if (isset($_GET['logout'])) {
        $logout=$_GET['logout'];
        if ($logout=="salah") {
          echo "anda salah login";
        }
      }
     ?>
    </div> 


    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
