<div class = "container bg-silver" style="border-radius: 1rem" style="border-style: grid ;" >
  <hr>
  <h2 class="my-4 pl-4">Brand</h2>
  <?php function limit_words($string, $word_limit){
   $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
  } ?>

  