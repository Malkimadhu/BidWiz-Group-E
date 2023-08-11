<?php
include('./includes/connect.php');
include('./functions/common_function.php');
// Call the search_product function
search_product();

?>
<?php
require_once './classes/person.php';
session_start();

?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="../css/categories.css">
	<link href="./css/navbar.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	</style>

</head>

<body>

<navbar class="navbar__section">
		<header class="nav__header">
			<nav class="nav nav__container">
				<div class="nav__data">
					<a href="../index.php" class="nav__logo">
						BidWiz
					</a>

					<div class="nav__toggle" id="nav-toggle">
						<i class="ri-menu-line nav__toggle-menu"></i>
						<i class="ri-close-line nav__toggle-close"></i>
					</div>
				</div>
				<div class="nav__menu" id="nav-menu">
					<ul class="nav__list">
						<li class="dropdown__item">
							<div class="nav__link dropdown__button">
								Categories
							</div>
						</li>


						<li class="dropdown__item">
							<a href="faq.php" class="nav__link">FAQ</a>
						</li>

						<li>
							<a href="aboutus.php" class="nav__link">About us</a>
						</li>


						<li class="dropdown__item">
								<a href="contact.php" class="nav__link">Contact us</a>
						</li>
						<li>
							<form class="d-flex"  action="search_product.php" method="GET" style="display:flex; align-items:center; justify-content:center; padding: 0 16px 0 16px;">
							<div class="search-input-field">
								<input class="search-input" style="padding: 8px; border-color: rgb(0, 162, 255);" type="search" placeholder="Search" aria-label="Search" name="search_data"> <!-- Change the input name to "search_data_product" -->
								</div>
								<input type="submit" value="Search" class="search-submit" name="search_data_product">
							</form>



						</li>
						<li class="dropdown__item">
							<a href="prelogin.php" class="nav__link">Login/Signup<i style="padding-left: 20px;" class="fa fa-user" aria-hidden="true"></i></a>


						</li>




					</ul>

				</div>

			</nav>
		</header>

		<!--=============== MAIN JS ===============-->
		<script src="../js/navbar.js"></script>
	</navbar>




	<?php
  
  include('footer.php');

  ?>

	<script src="../js/categories.js"></script>

</body>

</html>