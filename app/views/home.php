<?php
    session_start();
    $count=0;
    if(isset($_SESSION['email']) && $count == 0){

       echo " <div class='alert alert-success alert-dismissible' role='alert'>
             Identification success
             <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>x</span></button></div>";
        echo "<button type='button' class='btn btn-danger m-3 right'>Disconnect</button>";
    }else session_abort();

    $db = new database();
    $req = $db->queryGet("SELECT * FROM article");
    $res = $req->fetchAll(PDO::FETCH_OBJ);
?>

<h1 id="title_home">Spot France</h1>
<?php foreach ($res as $article):?>
<div class="container p-5">
    <div class="card">
        <h5 class="card-header"><?= $article->titre ?></h5> 
         <div class="card-body row">
         <img class="img_article col-4" src="<?= IMG_PATH.$article->img_path?>" alt="">
            <p class="card-text "><?= $article->content ?></p>
        </div>
        <a  href="article/<?= $article->id?>" class="btn btn-primary">lire article</a> 
    </div>
</div>
<?php endforeach; ?>

<style>
    #title_home{
        text-align: center;
        margin-bottom: 2%;
    }


</style>