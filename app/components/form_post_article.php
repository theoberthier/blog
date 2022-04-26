<?php
    session_start();
    if(isset($_SESSION['email']) && isset($_SESSION['id'])){
        if(isset($_POST['titre']) && isset($_POST['content']) && !empty($_FILES['img'])){
            var_dump($_FILES['img']);
            $nameFile = $_FILES['img']['name'];
            $typeFile = $_FILES['img']['type'];
            $sizeFile = $_FILES['img']['size'];
            $tmpFile = $_FILES['img']['tmp_name'];
            $errorFile = $_FILES['img']['error'];

            $extensions = ['jpg','png','jpeg','gif'];
            $types = ['image/jpeg','image/png','image/jpg','image/gif'];

            $extension = explode('.', $nameFile);
            
            $max_size = 100000000000000000;
            if(in_array($typeFile,$types)){
                if(count($extension) <= 2 && in_array(strtolower(end($extension)),$extensions)){
                    echo $errorFile;
                    if($sizeFile <= $max_size && $errorFile == 0){
                        echo __DIR__."/../assets/images/".uniqid().'.'.strtolower(end($extension));
                        if(move_uploaded_file($tmpFile,"./".uniqid().'.'.strtolower(end($extension)))){
                            echo "<br/> upload";
                        }
                    }
                }
            }
            

        }
    }