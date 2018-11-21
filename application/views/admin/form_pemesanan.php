<div class="container">
  <div class="card">
    <div class="card-header">
      <h3>News List</h3>
      <h5>Selamat Datang <?php echo $this->session->userdata('ses_nama');?></h5>
    </div>
    <div class="card-body">
        <div class="container">
          <?php
          function limit_words($string, $word_limit){
          $words = explode(" ",$string);
          return implode(" ",array_splice($words,0,$word_limit));
          }
           ?>
          <?php foreach ($konten as $konten_item):?>
          <table style="table-layout: fixed; width : 100%" class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
				<th scope="col">Alamat</th>
                <th scope="col">Tanggal Pemesanan</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>

                
              </tr>
            </tbody>
          </table>
      <?php endforeach; ?>
      <?php echo $pagination; ?>
    </div>
    </div>
  </div>
</div>
<br>
