<div class = "container bg-silver" style="border-radius: 1rem" style="border-style: grid ;" >
  <hr>
  <h2 class="my-4 pl-4">Brand</h2>
  <?php function limit_words($string, $word_limit){
   $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
  } ?>

  <div class="row">
  <div class="col-md-7">
    <a href="#">
      <img class="img-fluid rounded mb-3 mb-md-0 pl-4<!--pl-4-->" src="<?php echo base_url().'assets/upload/img/'.$konten_item['foto'];?>" alt="">
    </a>
  </div>
  <div class="col-md-3">
    <h3><?php echo $konten_item['title'];?></h3>
    <p><small>Posted on :<?php echo $konten_item['created'] ?></small></p>
    <p class="text-justify"><?php echo limit_words($konten_item['text'], 15)."...";?></p>
    <a class="btn btn-primary" href="<?php echo site_url('home/view_tools/'.$konten_item['slug']); ?>">View Article</a>
  </div>
</div>
<br>