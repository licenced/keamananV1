<style type="text/css">
.nyumput{
   visibility:hidden;
}
</style>

<div class="container">
  <form action="<?php echo base_url().'post/edit_post'?>" method="post" enctype="multipart/form-data">

    <input type="text" class="nyumput" name="id" value="<?php echo $konten['id'] ?>" required><br>

    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" value="<?php echo $konten['title'] ?>" required>

    <label for="text">Content</label>
    <textarea id="ckeditor" class="form-control" name="text" rows="10" required><?php echo $konten['text']?></textarea>

    <input type="file" name="foto"><br><br>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>

<script src="<?php echo base_url().'assets/jquery/jquery-3.3.1.min.js'?>"></script>
<script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
<script type="text/javascript">
  $(function () {
    CKEDITOR.replace('ckeditor');
  });
</script>
