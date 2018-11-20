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
          <table style="table-layout: fixed" class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Posted on</th>
                <th scope="col">Text</th>
                <th scope="col">Foto</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"><?php echo $konten_item['id']; ?></th>
                <td><a href="<?php echo site_url('home/view/'.$konten_item['slug']); ?>"><?php echo $konten_item['title']; ?></a></td>
                <td><?php echo $konten_item['category'] ?></td>
                <td><?php echo $konten_item['created'] ?></td>
                <td><?php echo limit_words($konten_item['text'], 5)."...";?></td>
                <td><?php echo $konten_item['foto']; ?></td>
                <td>
                  <a class="btn btn-primary" href="<?php echo site_url('post/update/'.$konten_item['id']); ?>" role="button">Edit</a><br><br>
                  <a class="btn btn-primary" href="<?php echo site_url('post/delete/'.$konten_item['id']); ?>" role="button">Delete</a>
                </td>
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
