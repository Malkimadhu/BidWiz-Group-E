<!DOCTYPE html>
<html lang="en">

<?php
require_once './classes/person.php';
session_start();
if (isset($_SESSION["buyer"])) {
  // User is logged in, retrieve the user object
  $buyer = $_SESSION["buyer"];
} else {
  // Redirect the user to login.php if not logged in
  header("Location: ./login.php?error=2");
  exit();
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>BidWiz</title>

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
	
					<div class="nav__toggle" id="nav-toggle">
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
  
						<!--=============== DROPDOWN 1 ===============-->
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
							  <a href="Faq.html" class="nav__link">FAQ</a>
						</li>
  
						<li>
							<a href="About_us.html" class="nav__link">About us</a>
						</li>
  
  
						<li class="dropdown__item">                        
							<div class="nav__link dropdown__button">
								Contact us
							</div>
  
							<li class="dropdown__item">
							  <a href="Login.html" class="nav__link">Login/Signup<i style="padding-left: 20px;" class="fa fa-user" aria-hidden="true"></i></a>
							  
	  
						  </li>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		
		<!--=============== MAIN JS ===============-->
		<script src="../js/navbar.js"></script>
	</navbar>

<div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4><?php echo $buyer->getFirstName(). " " . $buyer->getLastName();?> </h4>
									<h6>(Buyer)</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-8">
                <div class="card">
						<div class="card-body">
                        <form action="./classes/editbUserProcess.php" method="post">
						<br>
							<div class="row mb-3">
								<div class="col-sm-3">
								<h6 class="mb-0">First Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
								<input type="text" name="firstname" class="form-control" value="<?php echo $buyer->getFirstName() ?>">
								</div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3">
								<h6 class="mb-0">Last Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
								<input type="text" name="lastname" class="form-control" value="<?php echo $buyer->getLastName() ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
								<input type="text" name="email" class="form-control" value="<?php echo $buyer->getEmail() ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Phone</h6>
								</div>
								<div class="col-sm-9 text-secondary">
								<input type="text" name="phone" class="form-control" value="<?php echo $buyer->getPhoneNo() ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Address</h6>
								</div>
								<div class="col-sm-9 text-secondary">
								<input type="text" name="address" class="form-control" value="<?php echo $buyer->getAddress() ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-5"></div>
								<div class="col-sm-9 text-secondary">
								<button class="btn btn-primary px-4">
                                                Save Changes
                                            </button>
								</div>
							</div>
							</form>
					</div>
			</div>

		</div>
	</div>
	</div>

	<br><br><br>
<iframe frameborder="0" scrolling="no" style="height:400px;width:100%;border:none;" src='../html/footer.html'></iframe>

	
</body>