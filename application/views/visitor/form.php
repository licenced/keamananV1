<html>
<head>
	<style>
	 #semua{width:600px;height:1200px;margin:auto;overflow:hidden;background:#e0a504;overflow:hidden; text-align:20px; padding:10px 20px;}
	 
	 img.tengah {
     display: block;
     margin-left: auto;
     margin-right: auto;
	 }
	 

</style>
	<link href="form.css" rel="stylesheet" type="text/css">
	
</head>

<form>

	<div id="semua">
	<h1> <br> <center> Formulir Pembelian Alat Keamanan </center> </h1>
	<img src = "logo.png" class="tengah" width = "200px" height = "200px"/>
	<br>
	
	<div class="form-group"> 
	<label for="nama">Nama</label>
	<div> <input type="text" name="nama" placeholder="Nama" /></div></div>
	<br>
	
	<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <div> <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">
	<br> We'll never share your email with anyone else. </small>
	</div>
	</div>
	<br>
	
	<div class="form-group"> 
	<label for="alamat">Alamat</label>
	<div> <textarea type="text" name="alamat" placeholder="Alamat"></textarea></div></div>
	<br>
	
	<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</form>
</html>