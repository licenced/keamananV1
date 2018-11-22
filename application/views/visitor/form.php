<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/cssform.css">
    <meta charset="utf-8">
    <title>SecureOne|Pemesanan</title>
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
    <button class = "button btn1" href='<?php echo site_url("cart/add/$product->id") ?>' >Add To Chart</button>
  	</div>
    </div>
  <?php } else { ?>
    <div id="right">
    <div class="form-group">
    <img src="<?php echo base_url();?>assets/images/form/<?php echo $product->foto; ?>" width = "200px" height = "150px">
    <label for="">	<?php echo $product->nama ?></label>
    <div> <p><?php echo $product->harga ?></p>
    </div>
    <button class = "button btn1" href='<?php echo site_url("cart/add/$product->id") ?>' >Add To Chart</button>
    </div>
    </div>
  <?php };
        $i++;
  ?>
  <?php endforeach ?>
    <button class="button btnnext" href='<?php echo site_url("cart") ?>'><span>Next </span></button>
<?php else : ?>
  <p>Pilih produk dahulu.</p>
<?php endif ?>

</form>
</html>
