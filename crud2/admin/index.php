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
    <style>
    	.
    </style>
</head>

  <body>
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
    

    <div class="container-fluid">
    <center>
    	<a href="index.php" style="text-decoration:none;color:black"><h1>Aplikasi CRUD Lorem Ipsum</h1></a>
    </center>
    
    <div class="row">
    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    		<p><a href="tambah.php"><button type="button" class="btn btn-primary">Tambah Data</button></a></p>	
    	</div>
    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    		<p align="right"><a href="logout.php" onClick="return keluar()"><button type="button" class="btn btn-danger">Logout</button></a></p>	
    	</div>	
    </div>
    <?php 
    	if (isset($_GET['pesan'])) {
    		$pesan=$_GET['pesan'];
    		if ($pesan=='edit') {
    			echo "<h4>data berhasil di update</h4>";
    		}
    	}
     ?>
    <table class="table">
    	<thead>
  				<tr>
  					<th>No</th>
  					<th>Nama</th>
  					<th>Alamat</th>
  					<th>Pekerjaan</th>
  					<th>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Opsi </th>
  				</tr>
  		</thead>
  		<tbody>
	<?php
		$tampil="SELECT * FROM user";
		$query =mysqli_query($con,$tampil);
		$no 	=1;

		if (mysqli_num_rows($query) == 0 ) {
			echo "<tr><td colspan='4' align='center'>data tidak ada</td></tr>";
		}else{
			while ($hasil=mysqli_fetch_array($query)) { $id = $hasil['id']; ?>

			<tr>
				<td><?php echo $no++ ;?> </td>
				<td><?php echo $hasil['nama'];?> </td>
				<td><?php echo $hasil['alamat'];?> </td>
				<td><?php echo $hasil['pekerjaan'];?> </td>
				<td>
				<a href="edit.php?id=<?php echo $id;?>"><button type="button" class="btn btn-link">Edit</button></a>
				<a href="hapus.php?id=<?php echo $id;?>" onClick='return tanya()'><button type="button" class="btn btn-link">Hapus</button></a>
				</td>
				
			</tr>
			<?php } ?>
			<?php } ?>
		</tbody>
		</table>
      
    </div> 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	<script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
