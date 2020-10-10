<?php
	$server ="localhost";
	$user ="root";
	$pass = "";
	$database ="kursus";

	$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));

	//jika tombol simpan diklik
	if(isset($_POST['ssubmit'])){

		//Data akan diedit atau disimpan baru
		


		
			//data simpan baru
			$simpan = mysqli_query($koneksi, "INSERT INTO produk (name, thumbnail, Id_author, duration, description) VALUES  ('$_POST[nama_course]', 
																											  '$_POST[thumbnail_course]',
																											  '$_POST[Id_author_course]',
																											  '$_POST[duration_course]',
																											  '$_POST[description_course]')
										 ");
			if($simpan){
				echo "<script>
				        alert('Data tersimpan !');
				        document.location='index.php';
				      </script>";
			}

			else {
				echo "<script>
				        alert('Data gagal tersimpan !!');
				        document.location='index.php';
				      </script>";
			}
		

		
	}


?>





<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<h1 class="text-center">CRUD</h1>

	<!-- awal card -->
	<div class="card mt-5">
	  <div class="card-header bg-warning">
	    ADD COURSE
	  </div>
	  <div class="card-body">
	    <form action="" method="post">
	    	<div class="form-group">
	    		<label>Nama Course</label>
	    		<input type="text" name="nama_course" value="<?=@$var_nama_course?>" class="form-control" placeholder="nama course" required>
	    			    	</div>

	    	<div class="form-group">
	    		<label>thumbnail</label>
	    		<input type="upload" name="thumbnail_course" value="<?=@$var_thumbnail?>" class="form-control" placeholder="thumbnail">
	    	</div>

	    	<div class="form-group">
	    		<label>Id_author</label>
	    		<input type="number" name="Id_author_course" value="<?=@$var_Id_author?>" class="form-control" placeholder="ID author" required>
	    	</div>

	    	<div class="form-group">
	    		<label>Duration</label>
	    		<input type="number" name="duration_course" value="<?=@$var_duration?>" class="form-control" placeholder="Duration" required>
	    	</div>

	    	<div class="form-group">
	    		<label>Description</label>
	    		<input type="text" name="description_course" value="<?=@$var_description?>" class="form-control" placeholder="Description" required>
	    	</div>

	    	<button type="submit" class="btn btn-success" name="ssubmit">Simpan</button>
	    	<button type="reset" class="btn btn-success" name="sreset">Kosongkan</button>

	    </form>
	  </div>
	</div>
	<!-- akhir card -->

	<!-- awal card tabel -->
	<div class="card mt-5">
	  <div class="card-header bg-primary">
	    COURSE
	  </div>
	  <div class="card-body">
	    <table class="table table-bordered table-striped">
	    	<tr>
	    		<th>No.</th>
	    		<th>Nama Course</th>
	    		<th>Thumbnail</th>
	    		<th>Id Author</th>
	    		<th>Duration</th>
	    		<th>Description</th>
	    	</tr>

	    	<?php
	    		$no = 1;
	    		$tampil = mysqli_query($koneksi, "SELECT * from course ");
	    		while($data = mysqli_fetch_array($tampil)) :
	    	?>

	    	<tr>
	    		<td><?php echo $no++; ?></td>
	    		<td><?php echo $data['name'] ?></td>
	    		<td><?php echo $data['thumbnail'] ?></td>
	    		<td><?php echo $data['Id_author'] ?></td>
	    		<td><?php echo $data['duration'] ?></td>
	    		<td><?php echo $data['description'] ?></td>
	    		
	    	</tr>

	    	<?php endwhile;?>

	    </table>
	  </div>
	</div>
	<!-- akhir card tabel-->

</div>


<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>