<html>
<head>
	<style>
	 #semua{width:600px;height:1200px;margin:auto;overflow:hidden;background:#e0a504;overflow:hidden; text-align:20px; padding:10px 20px;}
	 #left{width:300px;height:600px; float:left;}
	 
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

	<div id="left">
	<div class="form-group"> 
	<img src= "<?php echo base_url().'assets/images/form/3. Alarm.jpg';?>" width = "200px" height = "150px">
	<div class="checkbox">
	<label><input type="checkbox" value="">Alarm Anti Maling</label>
	</div>
	<label for="jumlah"></label>
	<div> <input type="number" min="0" id="replyNumber" data-bind="value:replyNumber" placeholder="Jumlah" />
	</div>
	</div>
	<br>
	
	<div class="form-group"> 
	<img src= "<?php echo base_url().'assets/images/form/4. GA.jpg';?>" width = "200px" height = "150px">
	<div class="checkbox">
	<label><input type="checkbox" value="">Gembok Alarm</label>
	</div>
	<label for="jumlah"></label>
	<div> <input type="number" min="0" id="replyNumber" data-bind="value:replyNumber" placeholder="Jumlah" />
	</div>
	</div>
	<br>
	
	<div class="form-group"> 
	<img src="<?php echo base_url().'assets/images/form/5. PG.jpg';?>" width = "200px" height = "150px">
	<div class="checkbox">
	<label><input type="checkbox" value="">Pisau Gesper</label>
	</div>
	<label for="jumlah"></label>
	<div> <input type="number" min="0" id="replyNumber" data-bind="value:replyNumber" placeholder="Jumlah" />
	</div> <br>
	</div>
	
	<div class="form-group"> 
	<label for="alamat">Alamat</label>
	<div> <textarea type="text" name="alamat" placeholder="Alamat"></textarea></div></div>
	<br>
	
	<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</form>
</html>