<div class="container">
  <div class="card">
    <div class="card-header">
      <h3>News List</h3>
      <h5>Selamat Datang <?php echo $this->session->userdata('ses_nama');?></h5>
    </div>
    <div class="card-body">
        <div class="container">
          <table style="table-layout: fixed; width : 100%" class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID Produk</th>
                <th scope="col">Jumlah</th>
				        <th scope="col">Harga</th>
                <th scope="col">Subtotal</th>
              </tr>
            </thead>
            <tbody>
              <?php $total=0 ?>
              <?php foreach ($konten as $konten_item):?>
                <?php $subtotal = $konten_item['jumlah']*$konten_item['harga'] ?>
              <tr>
                <td><?php echo $konten_item['idproduk']; ?></td>
                <td><?php echo $konten_item['jumlah']; ?></td>
                <td><?php echo "Rp ".number_format($konten_item['harga'], 2, ",", ".") ?></td>
                <td><?php echo "Rp ".number_format($subtotal, 2, ",", ".") ?></td>
              </tr>
              <<?php $total = $total + $subtotal ?>
              <?php endforeach; ?>
              <td class=""><strong>Total : <? echo "Rp ".number_format($total, 2, ",", ".") ?></strong></td>
            </tbody>
          </table>


    </div>
    </div>
  </div>
</div>
<br>
