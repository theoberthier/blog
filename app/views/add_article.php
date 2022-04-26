<?php 


?>
<div class="container m-10 mt-5">

  <form method="post" action="article/post_article" enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleFormControlInput1">nom du spot</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="le titre de votre article" name="titre">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">adresse</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="le titre de votre article" name="addr">
    </div>
    <div class="form-group form-control-file">
      <label for="exampleFormControlInput1">image</label>
      <img src="" alt="">
      <input type="file" class="form-control" id="exampleFormControlInput1" name="img">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">description du spot</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="il est beau, il est vert ....." name="content"></textarea>
      <button class="btn btn-primary m-1" type="submit" name="submit">ajouter</button>
    </div>
  </form>
</div>