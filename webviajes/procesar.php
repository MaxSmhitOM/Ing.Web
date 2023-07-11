<?php
$error;
if(!empty($_POST['nickname']) && !empty($_POST['password'])){
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    if($nickname == "userbg" && $password = "1234"){
        $error = "ok";
        echo "Accedio";
    }else{
        $error = "incorrecto";
        header("Location: login.php?error=$error");
    }
}else{
    $error = "vacio";
    header("location: login.php?error=$error");
}
?>