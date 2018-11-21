<div class="container">
<h1 class="my-4 pl-4"></h1>
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

  <div class="col-md-5">
    <h3><?php echo $konten_item['title'];?></h3>
    <!-- <p><small>Posted on :<?php echo $konten_item['created'] ?></small></p> -->
    <p class="text-justify"><?php echo limit_words($konten_item['text'], 15)." ... ";?></p>
    <a class="btn btn-outline-primary" href="<?php echo site_url('home/view/'.$konten_item['slug']); ?>">Read More</a>
  </div>
</div>

<div class="row">
  <div class="col">
    <?php echo $pagination; ?>
  </div>
</div>
</div>