<?php   
    //logout.php  
    session_start(); 
    require_once('./library/library.php');
    if(!isLoged()){
    header('location: ./../index.php');
    die();
} 
    session_unset();
    session_destroy();  
    header("location:../index.php");  
    exit();
 ?>  