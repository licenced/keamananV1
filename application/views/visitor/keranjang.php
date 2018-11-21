<!DOCTYPE html>
<html lang="en">

  <head>
    <title>SecureOn|Keranjang</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/keranjang.css">

  </head>

  <div class="container">
  <h1>Shopping cart anda</h1>
  <? if (!empty($cart_list)): ?>
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Produk</th>
							<th style="width:10%">Harga</th>
							<th style="width:8%">Jumlah</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
  <?php
	echo form_open('cart/update_cart');

	foreach($cart_list as $item):
	$id = $item['id'];
	$rowid = $item['rowid'];
	echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
	echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
	echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
	echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
	echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
	?>
						<tr>
							<td data-th="Produk">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="<?php echo base_url();?>assets/images/form/<?php echo $item['foto']; ?>" width = "100px" height = "100px" alt="..." class="img-responsive"/></div>
									<div class="mx-auto">
                    <br>
										<h5><? echo $item['name'] ?></h5>
									</div>
								</div>
							</td>
							<td data-th="Harga"><? echo "Rp".number_format($item['price'], 2, ",", ".") ?></td>
							<td data-th="Jumlah">
								<?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
							</td>
							<td data-th="Subtotal" class="text-center"><? echo "Rp".number_format($item['qty'] * $item['price'], 2, ",", ".") ?></td>
							<td><a href="<? echo site_url("cart/remove/$rowid")?>" class="btn btn-success btn-block">Hapus</td>
						</tr>
            	<?php endforeach; ?>
					</tbody>
					<tfoot>
						<tr>
							<td><a href="<? echo site_url('pemesanan') ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Kembali</a></td>
							<td class="hidden-xs"></td>
              <td><input class ="btn btn-"  type="submit" value="Update Cart"></td>
							<td class="hidden-xs text-center"><strong>Total : <? echo "Rp".number_format($this->cart->total(), 2, ",", ".") ?></strong></td>
							<td><a href="<? echo site_url('cart/form_customer') ?>" class="btn btn-success btn-block">Lanjutkan <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
      <? else : ?>
        <p>Anda Belum Memasukkan Produk ke Keranjang</p>
        <td><a href="<? echo site_url('pemesanan') ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Kembali</a></td>
      <? endif ?>
</div>
