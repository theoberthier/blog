<?php 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spot France</title>
</head>

<body>
  <div class="row content">
    <div class="container-sm logcontainer col-sm">
      <h1>login</h1>

      <form method="POST" action="form_log">
        <div class="form-group">
          <label for="exampleInputEmail1" >Adress email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mot de passe</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="passwd">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <div class="container-sm regcontainer col-sm">
      <h1>register</h1>

      <form method="post" action="form_reg">
        <div class="form-group">
          <label for="exampleInputEmail1">Adress email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mot de passe</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="passwd">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">pseudo</label>
          <input type="pseudo" class="form-control" name="pseudo">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</body>

</html>

<style>

  .content{
    margin: auto;
    width: 60%;
  }
  .logcontainer,.regcontainer{
    padding: 5%;
  }
</style>