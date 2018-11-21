  <div class="container">
    <form action="<?php echo base_url().'post/create_post'?>" method="post" enctype="multipart/form-data">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" placeholder="Your Title Here" required><br>

      <label for="category">Category</label><br>

      <input type="radio" name="category" value="article">Article<br>
      <input type="radio" name="category" value="tools">Tools<br><br>

      <label for="text">Content</label>
      <textarea id="ckeditor" class="form-control" name="text" rows="10" required></textarea>

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
