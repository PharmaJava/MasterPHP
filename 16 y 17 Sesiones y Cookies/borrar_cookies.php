<?php

if($_COOKIE['micookie']){
    unset($_COOKIE['micookie']);
    setcookie("micookie","",time()-100);
}

if($_COOKIE['oneyear']){
    unset($_COOKIE['oneyear']);
    setcookie("oneyear","",time()-100);
}

header('Location:ver_cookies.php');


?>