<div class="container bg-silver mb-4" style="border-radius: 1rem">
	<br>
	<h3 style="text-align: middle">FORM PEMESANAN</h3>
<form action="<?php echo base_url().'cart/simpan'?>" method="post" enctype="multipart/form-data">

	<div class="form-group">
	<label for="nama"> Nama</label>
	<div> <input type="text" name="nama" placeholder="Nama" /></div>
	</div>
	<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <div> <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div>
	<div class="form-group"><br>
	<label for="nama">Alamat</label>
	<textarea type="text" name="alamat" placeholder="Alamat" style="width: 100%; height: 150px;"></textarea>
	<br>
	</div>
	<button type="submit" class="btn btn-success float-right">Submit</button>
</form>
		<a href="<? echo site_url('cart') ?>" class="btn btn-warning float">Kembali</a>
