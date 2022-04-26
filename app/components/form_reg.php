<?php 
    if(isset($_POST['email']) && isset($_POST['passwd']) && isset($_POST['pseudo'])){
        $email = htmlspecialchars($_POST['email']);
        $passwd = htmlspecialchars($_POST['passwd']);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $dbcheckEmail = new database();
        $dbcheckPseudo = new database();
        $checkEmail = $dbcheckEmail->queryGet("SELECT id FROM users WHERE email = ?",array($email));
        $checkPseudo = $dbcheckPseudo->queryGet("SELECT id FROM users WHERE pseudo = ?",array($pseudo));
        $resEmail = $checkEmail->fetch(PDO::FETCH_OBJ);
        $resPseudo = $checkPseudo->fetch(PDO::FETCH_OBJ);
        if($resEmail || $resPseudo) {
           header("Location:/login");
        }
        else $db = new database(); $db->querySet("INSERT INTO users (email, passwd, pseudo) VALUES (?,?,?)",array($email,$passwd,$pseudo));
        header('Location:/home');
    }

?>