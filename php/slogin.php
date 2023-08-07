<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/navbar.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">    <title>Login</title>

</head>
<body>
    	
	<navbar class="navbar__section">
		<!--=============== HEADER ===============-->
		<header class="nav__header">
			<nav class="nav nav__container">
				<div class="nav__data">
					<a href="../index.html" class="nav__logo">
						 BidWiz
					</a>
	
					<div class="nav__toggle" id="nav-toggle" style="padding-right:0%;">
						<i class="ri-menu-line nav__toggle-menu"></i>
						<i class="ri-close-line nav__toggle-close"></i>
					</div>
				</div>
	
				<!--=============== NAV MENU ===============-->
				<div class="nav__menu" id="nav-menu">
					<ul class="nav__list">
						<li>
							<a href="../index.html" class="nav__link">Home</a>
						</li>
	
						<!--=============== DROPDOWN ===============-->
						<li class="dropdown__item">                      
							<div class="nav__link dropdown__button">
								Categories <i class="ri-arrow-down-s-line dropdown__arrow"></i>
							</div>
	
							<div class="dropdown__container">
								<div class="dropdown__content">
									<div class="dropdown__group">
	
	
										<span class="dropdown__title">Electronic Items</span>
	
										<ul class="dropdown__list">
											<li>
												<a href="./html/categories.html" class="dropdown__link">Mobile $ Accesories</a>
											</li>
											<li>
												<a href="./html/categories.html" class="dropdown__link">Homeware</a>
											</li>
											<li>
												<a href="./html/categories.html" class="dropdown__link">Other</a>
											</li>
										</ul>
									</div>
	
									<div class="dropdown__group">
	
	
										<span class="dropdown__title">Cloath</span>
	
										<ul class="dropdown__list">
											<li>
												<a href="./html/categories.html" class="dropdown__link">men</a>
											</li>
											<li>
												<a href="./html/categories.html" class="dropdown__link">women</a>
											</li>
											<li>
												<a href="./html/categories.html" class="dropdown__link">Wrist watchers</a>
											</li>
										</ul>
									</div>
	
									<div class="dropdown__group">
	
	
										<span class="dropdown__title">Sport Items</span>
	
										<ul class="dropdown__list">
											<li>
												<a href="./html/categories.html" class="dropdown__link">Cloaths</a>
											</li>
											<li>
												<a href="./html/categories.html" class="dropdown__link">Bat</a>
											</li>
											<li>
												<a href="./html/categories.html" class="dropdown__link">ball</a>
											</li>
											<li>
												<a href="./html/categories.html" class="dropdown__link">other</a>
											</li>
										</ul>
									</div>
	
									<div class="dropdown__group">
	
	
										<span class="dropdown__title">other</span>
	
										<ul class="dropdown__list">
											<li>
												<a href="./html/categories.html" class="dropdown__link">new</a>
											</li>
											<li>
												<a href="./html/categories.html" class="dropdown__link">new</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
	
	
						<li class="dropdown__item">
							  <a href="faq.html" class="nav__link">FAQ</a>
						</li>
	
						<li>
							<a href="about_us.html" class="nav__link">About us</a>
						</li>
	
	
						<li class="dropdown__item">
								<a href="contact.html" class="nav__link">Contact us</a>
							</li>
	
							<li class="dropdown__item">
							  <a href="login.html" class="nav__link">Login/Signup<i style="padding-left: 20px;color:black;" class="fa fa-user" aria-hidden="true"></i></a>
							  
	  
						  </li>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		
		<!--=============== MAIN JS ===============-->
		<script src="../js/navbar.js"></script>
	</navbar>
	
   <div class="box">
    <div class="container">



        <div class="top">
            <span class="span__1">Have an account?</span>
            <header class="header_1">Login</header>
        </div>

		<form action="./classes/sloginProcess.php" method="post">

        <div class="input-field">
            <input type="text" class="input" placeholder="Email" id="" name="email">
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="Password" class="input" placeholder="Password" id="" name="password">
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
           <input type="submit" class="submit" value="Login" id="">
        </div>

		</form>

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