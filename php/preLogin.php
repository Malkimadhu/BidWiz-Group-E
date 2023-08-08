<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/preLogin.css">
    <link rel="stylesheet" href="./css/navbar.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">    <title>Login</title>

</head>
<body>
    	
<?php
  
  include('navbar.php');

  ?>
	
   <div class="box">
    <div class="container">

        <div class="top">
            <span class="span__1">Have an account?</span>
            <header class="header_1">"Let's get started! Select your user type before logging in."</header>
        </div>
        <br>

        <div class="input-field">
           <a href="blogin.php"><input type="submit" class="submit" value="Login as a Buyer" id=""></a>
        </div>
        <br>
        <div class="input-field">
           <a href="slogin.php"><input type="submit" class="submit" value="Login as a Seller" id=""></a>
        </div>
        <br><br>
        <div class="two-col">
            <div class="one">
               <label for="check"> Haven't an Account</label>
            </div>
            <div class="two">
                <label><a href="signup.php">Sign up Now!</a></label>
            </div>
        </div>
    </div>
</div> 
<iframe frameborder="0" scrolling="no" style="height:400px;width:100%;border:none;" src='../html/footer.html'></iframe>

</body>
</html>