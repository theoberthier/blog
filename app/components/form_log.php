<?php 
    session_start();

    if(isset($_POST['email']) && isset($_POST['passwd'])){
        $email = htmlspecialchars($_POST['email']);
        $passwd = htmlspecialchars($_POST['passwd']);
        $dbcheck = new database();
        $check = $dbcheck->queryGet("SELECT * FROM users WHERE email = ? AND passwd = ?",array($email,$passwd));
        $res = $check->fetch(PDO::FETCH_OBJ);
        if(!$res) {
            session_abort();
            header("Location:/login");
        }
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $res->id;
        $_SESSION['pseudo'] = $res->pseudo;
        header('Location:/home');
    }
?>