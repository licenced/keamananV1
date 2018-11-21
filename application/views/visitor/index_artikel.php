<div class="container">
<h1 class="my-4 pl-4"></h1>
<?php function limit_words($string, $word_limit){
  $words = explode(" ",$string);
  return implode(" ",array_splice($words,0,$word_limit));
} ?>
