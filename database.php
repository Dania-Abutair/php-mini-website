<?php
    session_start();
    $username= $_POST["username"];
    $password=$_POST["password"];
    
    if(empty($_POST["username"])){
    $loname="Please insert your username";
  }
  if(empty($_POST["password"])){
    $lopass="Please insert your password";
  }


    foreach($_SESSION["multi"] as $key =>$value){
     if( $value["name"]==$username && $value["pass"]==$password){
         if($value["role"]=="admin"){
          $_SESSION["nameuser"]=$username;
            header("Location: admin.php");
           
           }
           else{
            $_SESSION["nameuser"]=$username;
            header("Location: user.php");
           
           }
     }
     else {
      if(!empty($_POST["username"])&&!empty($_POST["password"])){
       $x="Please Sign up first";
      }
     }
    }
    
    include('login.php');

    ?>
         
    
 
            