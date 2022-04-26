<?php

$dbArticle = new database();
$dbCom = new database();
$dbLike = new database();
$dbDisLike = new database();
$dbUserCom = new database();
$dbPseudoCom = new database();
$reqArt = $dbArticle->queryGet("SELECT * FROM article WHERE id = ?",array($_GET["url2"]));
$article = $reqArt->fetch(PDO::FETCH_OBJ);
if(!$article) header("Location:/home");
$reqCom = $dbCom->queryGet("SELECT * FROM commentaire WHERE article_id = ?", array($_GET['url2']));
$com = $reqCom->fetchAll(PDO::FETCH_OBJ);
$reqUsersCom = $dbUserCom->queryGet("SELECT pseudo,id FROM users WHERE id IN ( SELECT article_id FROM commentaire );");
$pseudoCom = $reqUsersCom->fetchAll(PDO::FETCH_OBJ);
$reqLike = $dbLike->queryGet("SELECT * FROM like_article WHERE article_id = ?", array($_GET['url2']));
$reqDisLike = $dbDisLike->queryGet("SELECT * FROM dis_like_article WHERE article_id = ?", array($_GET['url2']));
$like = $reqLike->fetchAll(PDO::FETCH_OBJ);
$disLike = $reqDisLike->fetchAll(PDO::FETCH_OBJ);



if(!$like) $nbLike = 0; else $nbLike = count($like);
if(!$disLike) $nbDisLike = 0; else $nbDisLike = count($disLike);

?>

<h1 id="title_home">Spot France</h1>
<div class="container p-5">
<div class="card">
    <h5 class="card-header"><?= $article->titre ?></h5>
    
     <div class="card-body row">
     <img class="img_article col-4" src="<?= IMG_PATH.$article->img_path?>" alt="">
        <p class="card-text "><?= $article->content ?></p>
    </div>
    <div class="p-3 m-2">
        <button class="btn btn-primary">like <?= $nbLike ?></button>
        <button class="btn btn-primary">dis like <?= $nbDisLike ?></button>
        
    </div>
    <div class="p-3" >
        <input class="form-control w-75 p-2 m-2" type="text" placeholder="votre commentaire" value="">
        <button class="btn btn-primary m-2" type="submit" name="comment">poster</button>
    </div>
    <div class="w-75 p-3 m-2">
        
        <?php foreach ($com as $commentaire):?>
            <label for=""><?php foreach($pseudoCom as $pseudo) if($pseudo->id == $commentaire->id) echo $pseudo->pseudo; ?></label>
            <p class="form-control"><?= $commentaire->content;  ?></p>
        <?php endforeach; ?>
    </div>
</div>
</div>


<style>
#title_home{
    text-align: center;
    margin-bottom: 2%;
}


</style>
