<?php

session_start();

$username = $phone = $repass = $pass = "";


if(empty($_POST["user_name"])){
    $name_error="Please insert your username";
}
else{
    $username=test_input($_POST["user_name"]);
}
if(empty($_POST["user_pass"])){
    $pass_error="Please insert your password";
}
else{
   $pass= test_input($_POST["user_pass"]);
}
if(empty($_POST["user_phone"])){
    $phone_error="Please insert your Phone Number";
}
else{
    $phone=test_input($_POST["user_phone"]);
}
if(empty($_POST["user_repass"])){
    $repass_error="Please insert your password";
}
else{
    $repass=test_input($_POST["user_repass"]);
}

if(($pass!=$repass)&&($pass !="")&&($repass !="")){
    $match="Password not matching";
}
else{
      
    if(!empty($username)&&!empty($pass)){
    $new_array=array("name"=>$username,"pass"=>$pass,"role"=>"user");
   array_push($_SESSION['multi'],$new_array);
   
    }

    

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
  if(empty($name_error) && empty($pass_error) && empty($phone_error)  && empty($repass_error)&&($pass==$repass) )
    { header("Location: login.php");
    }
else{ include('register.php');
}
?>
