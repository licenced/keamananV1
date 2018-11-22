<html>
<head>
	<style>
	 #semua{width:600px;height:1200px;margin:auto;overflow:hidden;background:#e0a504;overflow:hidden; text-align:20px; padding:10px 20px;}
     #left{width:300px;height:300px; float:left;}
	 #right{width:300px;height:300px;float:right;}

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
	<h1> <br> <center> Daftar Alat Keamanan </center> </h1>
	<img src = "<?php echo base_url();?>assets/images/form/logo.png" class="tengah" width = "200px" height = "200px"/>
	<br><br><br>



  <?php if (!empty($product_list)): ?>
  <?php foreach($product_list as $product): ?>
  <?php
  $i = 0;
  if($i%2==0){?>
    <div id="left">
    <div class="form-group">
  	<img src="<?php echo base_url();?>assets/images/form/<?php echo $product->foto; ?>" width = "200px" height = "150px"><br>
    <label for="">	<?php echo $product->nama ?></label>
  	<div> <p><?php echo $product->harga ?></p>
  	</div>
    <a href='<?php echo site_url("cart/add/$product->id") ?>' >Add To Chart</a>
  	</div>
    </div>
  <?php } else { ?>
    <div id="right">
    <div class="form-group">
    <img src="<?php echo base_url();?>assets/images/form/<?php echo $product->foto; ?>" width = "200px" height = "150px">
    <label for="">	<?php echo $product->nama ?></label>
    <div> <p><?php echo $product->harga ?></p>
    </div>
    <a href='<?php echo site_url("cart/add/$product->id") ?>' >Add To Chart</a>
    </div>
    </div>
  <?php };
        $i++;
  ?>
  <?php endforeach ?>
    <button class="btn btn-success" href='<?php echo site_url("cart") ?>' role ="button">Next</button>
<?php else : ?>
  <p>Pilih produk dahulu.</p>
<?php endif ?>

</form>
</html>
