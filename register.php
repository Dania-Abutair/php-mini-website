<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
    body {
    background-image: url("https://cdn.pixabay.com/photo/2016/09/08/12/00/starry-sky-1654074_1280.jpg");
}
#login {
	-webkit-perspective: 1000px;
	-moz-perspective: 1000px;
	perspective: 1000px;
	margin-top:50px;
	margin-left:30%;
    
    
}
.login {
	font-family: 'Josefin Sans', sans-serif;
	-webkit-transition: .3s;
	-moz-transition: .3s;
	transition: .3s;
	-webkit-transform: rotateY(40deg);
	-moz-transform: rotateY(40deg);
	transform: rotateY(40deg);
    background-color:#DCDCDC;
}
.login:hover {
	-webkit-transform: rotate(0);
	-moz-transform: rotate(0);
	transform: rotate(0);
}
.login article {
	
}
.login .form-group {
	margin-bottom:17px;
}
.login .form-control,
.login .btn {
	border-radius:0;
}
.login .btn {
	text-transform:uppercase;
	letter-spacing:3px;
}
.input-group-addon {
	border-radius:0;
	color:#fff;
	background:#f3aa0c;
	border:#f3aa0c;
}
.forgot {
	font-size:16px;
}
.forgot a {
	color:#333;
}
.forgot a:hover {
	color:#5cb85c;
}

#inner-wrapper, #contact-us .contact-form, #contact-us .our-address {
    color: #1d1d1d;
    font-size: 19px;
    line-height: 1.7em;
    font-weight: 300;
    padding: 50px;
    background: #fff;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    margin-bottom: 100px;
}
.input-group-addon {
    border-radius: 0;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
    color: #fff;
    background: #f3aa0c;
    border: #f3aa0c;
        border-right-color: rgb(243, 170, 12);
        border-right-style: none;
        border-right-width: medium;
}
    </style>
</head>
<body>


<div class="col-md-4 col-md-offset-4" id="login">
						<section id="inner-wrapper" class="login" style="background-color:#DCDCDC">
							<article>
								<form method="POST" action="results.php">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"> </i></span>
											<input type="text" class="form-control" placeholder="Name" name="user_name">

										</div>
                                        <?php if(isset($name_error)){?>
                                            <div style="color:red;font-size: 15px"><?php echo $name_error ?></div>
                                           <?php }?>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
											<input type="text" class="form-control" placeholder="Phone Number" name="user_phone">
                                            
                                        </div>
                                        <?php if(isset($phone_error)){?>
                                            <div style="color:red;font-size: 15px"><?php echo $phone_error ?></div>
                                           <?php }?>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key"> </i></span>
											<input type="password" class="form-control" placeholder="Password" name="user_pass">
                                            
										</div>
                                        <?php if(isset($pass_error)){?>
                                            <div style="color:red;font-size: 15px"><?php echo $pass_error ?></div>
                                           <?php }?>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key"> </i></span>
											<input type="password" class="form-control" placeholder="Confirm Password" name="user_repass">
                                            
                                        </div>
                                        <?php if(isset($repass_error)){?>
                                            <div style="color:red;font-size: 15px"><?php echo $repass_error ?></div>
                                           <?php }?>
                                           <?php if(isset($match)){?>
                                           <div style="color:red;font-size: 15px"><?php echo $match ?></div>
                                           <?php }?>
									</div>
									  <button type="submit" class="btn btn-success btn-block" style="background-color:#696969">Submit</button>
								</form>
							</article>
						</section></div>
</body>
</html>