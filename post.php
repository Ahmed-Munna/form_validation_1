<?php

//  name field
    $name = filter_var($_POST["fname"],FILTER_SANITIZE_STRING);

    if(empty($name)){
        header('location:index.php?nameAlart=');
    }else{ ?>
        
        <h4><?php echo $name?></h4><br>

    <?php }

//  email field
    $email = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);

    if(empty($email)){
        header('location:index.php?emailAlart=');
    }elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
        header('location:index.php?emailAlart=');
    }else{
        echo $email;
    }

//  fass word field

    $pass     = $_POST["password"];
    $uper     = preg_match('@[A-Z]@',$pass);
    $conpass  = $_POST["confirm_password"];
    if(empty($pass) | empty($conpass)){
        header('location:index.php?passAlart=');
    }elseif($pass != $conpass){
        header('location:index.php?notpassAlart=');
    }elseif (!$uper) {
        header('location:index.php?notpassAlart=');
    }


















?>