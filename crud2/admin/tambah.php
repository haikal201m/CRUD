<?php
include "../koneksi.php";
include "../ceksession.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>CRUD</title>
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    
    <link href="../css/signin.css" rel="stylesheet">
    <script src="../js/ie-emulation-modes-warning.js"></script>
    <script language="JavaScript">
    function tanya(){
      if (confirm("apakah anda ingin menghapusnyanya? ")){
        return true;
      }else{
        return false;
      }
    }
    function keluar(){
      if (confirm("apakah anda ingin keluar? ")){
        return true;
      }else{
        return false;
      }
    }
  </script>
  </head>
  <body>
    <div class="container-fluid">
      
      <h1><center>From Pengisian Data</center></h1>
      <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p align="right"><a href="logout.php" onClick="return keluar()"><button type="button" class="btn btn-danger">Logout</button></a></p>  
      </div>  
    </div>
      <div class="row">
        <div class="col-md-4">
          
        </div>
        <div class="col-md-4">
          <center><h4>Silahkan Isi data</h4></center>
          <form class="form-horizontal" method="post">
            <div class="form-group">
              <label class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Nama Anda" name="nama">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Alamat Anda" name="alamat">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Pekerjaan</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Pekerjaan Anda" name="pekerjaan">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" value="kirim" name="kirim" class="btn btn-default">kirim</button> &nbsp; &nbsp;
                <a href="index.php"><button type="button" class="btn btn-default">Batal</button></a>
              </div>
            </div>
          </form>
         <?php 
          if (isset($_POST['kirim'])) {
            $nama =$_POST['nama'];
            $alamat =$_POST['alamat'];
            $pekerjaan=$_POST['pekerjaan'];
            $input ="INSERT INTO user VALUES('','$nama','$alamat','$pekerjaan')";
            $query =mysqli_query($con,$input); ?>
            <div class="col-sm-offset-2 col-sm-10">
            <?php if ($query) {
              echo "data berhasil di input lihat <a href='index.php'>disini</a>";
            }else{
              echo "data gagal di input";
            } ?>
            </div>
          <?php } ?>
          
        </div>
        <div class="col-md-4">
          
        </div>
      </div>
      
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>