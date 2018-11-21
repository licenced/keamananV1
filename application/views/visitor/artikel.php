<div class="container">

	<div class="row">
		<div class="col-lg-8">

		<h3 class="mt-4"><?php echo $konten['title'] ?> </h3>
		<hr>

		<img src="<?php echo base_url().'assets/upload/img/'.$konten['foto'];?>" alt="Foto Gan">
		<hr>

		
		<p><small>Posted on : <?php echo $konten['created'] ?></small></p>
		<hr>
		
 
		<p><?php echo $konten['text'] ?></p>
		<hr>
  
		</div>
  </div>
</div>
