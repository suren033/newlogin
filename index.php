<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Maha - Personal CV/Resume Template</title>	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
	<header class="header" id="home">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="nav">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#skills">Skills</a></li>
							<li><a href="#experiences">Experiences</a></li>
							<li><a href="#portfolio">Portfolio</a></li>
							<li><a href="#pricing">Pricing</a></li>
							<li><a href="#blog">Blog</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>




	<section class="header__2 py-5">
		<div class="container">
			<div class="row">
			<div class="col-sm-6">
				<div class="wow">
					<span>Hello I'm</span>
				</div>
				<h2 class="alex">Alex Jhonson</h2>
				<h5 class="text__product">Product Designer</h5>
				<div class="mail">
					<?php
						$db = @new mysqli("localhost", "root", "", "mydb");
						$query = " SELECT * FROM `hello`";
						$res = mysqli_query($db, $query);
						for ($i = 0; $i <= 2; $i++) {
							$row = mysqli_fetch_assoc($res);
								echo '	<i class="'.$row["icon"].'"></i>
										<p>'.$row["descrip"].'</p><br>';				
						}
					?>
				</div>
				<?php
					$db = @new mysqli("localhost", "root", "", "mydb");
					$query = " SELECT * FROM `button`";
					$res = mysqli_query($db, $query);
					for ($i = 0; $i <= 2; $i++) {
						$row = mysqli_fetch_assoc($res);	
						echo '<div class="icons">
								<i class="'.$row["icon"].'"></i>
							  </div>';
					}
				?>
			</div>
			<div class="col-sm-6">
				<div class="hero">
					<div class="hero__border">
						<img src="img/hero.png" alt="Hero" class="hero__img">			
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




	<section class="about mt-5" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<img src="img/ab-img.png" alt="ab" class="ab">				
				</div>
				<?php
					$db = @new mysqli("localhost", "root", "", "mydb");
					$query = " SELECT * FROM `about`";
					$res = mysqli_query($db, $query);
					for ($i = 0; $i <= 0; $i++) {
						$row = mysqli_fetch_assoc($res);
					echo '<div class="col-lg-6">
							<div>
								<p class="about__text">'.$row["title"].'</p>
								<h5 class="patrick">'.$row["descrip"].'</h5>
							</div>
							<div class="about__menu">
								<ul>
									<li>
										<span>'.$row["mass"].'</span>
									</li>
								</ul>
							</div>
							<br><br><br><br>
							<button class="download">
								<span>'.$row["download"].'</span>
								<i class="'.$row["icon"].'"></i>
							</button>
						</div>';
				}
			?>
			</div>
		</div>
	</section>



	<section class="what-i-do">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p class="what">What I do</p>
				</div>
			</div>
			<div class="row">
				<?php
					$db = @new mysqli("localhost", "root", "", "mydb");
					$query = " SELECT * FROM `what`";
					$res = mysqli_query($db, $query);
					for ($i = 0; $i <= 2; $i++) {
						$row = mysqli_fetch_assoc($res);

							echo '<div class="col-lg-4">
									<div class="about__3">
										<div class="design">
											<i class="'.$row["img"].'"></i><br>
											<p class="design__text">'.$row["title"].'</p>
											<h6 class="lorem">'.$row["descrip"].'</h6><br>
										</div>
									</div>
								  </div>';
					}
				?>
			</div>
		</div>
	</section>



	<section class="projects">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="title">Featured Projects</p>	
				</div>
			</div>
			<div class="row">
				<div class="col-lg-7">
					<div class="sl">
						<img src="img/img__slider.png" alt="slider" class="sl__img">
					</div>
				</div>
				<?php
					$db = @new mysqli("localhost", "root", "", "mydb");
					$query = " SELECT * FROM `wrap`";
					$res = mysqli_query($db, $query);
					for ($i = 0; $i <= 0; $i++) {
						$row = mysqli_fetch_assoc($res);
					echo '<div class="col-lg-5">
							<div class="block">
								<p class="web">'.$row["title"].'</p>
								<h5 class="wrap">'.$row["wrap"].'</h5>
								<h4 class="design__development">'.$row["design"].'</h4>
								<h3 class="stamp">'.$row["txt"].'</h3>
								<button class="view"><span>'.$row["button"].'</span></button>
								<blockquote>
									<q>'.$row["deviationtext"].'</q>
								</blockquote>
								<p class="shane">'.$row["shane"].'</p>
							</div>
						  </div>';
					}
				?>
			</div>
		</div>
	</section>






	<section class="skills" id="skills">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<p class="technical">Technical Skills</p>
					<?php
						$db = @new mysqli("localhost", "root", "", "mydb");
						$query = " SELECT * FROM `skills`";
						$res = mysqli_query($db, $query);
						for ($i = 0; $i <= 5; $i++) {
							$row = mysqli_fetch_assoc($res);
							echo '
								<div class="javascript">
									<p class="script">'.$row["title"].'</p>
									<p class="deg">'.$row["num"].'</p>
								</div>
								<div class="line__1"><div  style="width:'.$row["num"].';height: 7px;
								background: #0bceaf;
								position: absolute;
								border-radius: 10px;"></div></div>';
						} 
					?>
				</div>
					<div class="col-lg-6">
						<p class="professional">Professional Skills</p>
						<div class="cirkle__1">
							<div class="cirkle__2">
								<span>95%</span>
							</div>
							<h5 class="cirkle__text">Communication</h5>
						</div>
					</div>
			</div>
		</div>
	</section>





	<section class="experiences" id="experiences">
		<div class="container">
			<div class="row">
			<div class="col-lg-6">
				<p class="education__text">Education</p>
				<?php
					$db = @new mysqli("localhost", "root", "", "mydb");
					$query = " SELECT * FROM `experience`";
					$res = mysqli_query($db, $query);
					for ($i = 0; $i <= 2; $i++) {
						$row = mysqli_fetch_assoc($res);
							echo '<div class="oxford">
									<h4 class="art">'.$row["art"].'
										<a href="#" class="oxford__text">'.$row["oxford"].'</a>
									</h4>
									<h4 class="eduyear">'.$row["num"].'</h4>
									<p class="long">'.$row["fact"].'</p>
								  </div>';
					}
				?>
			</div>
				<div class="col-lg-6">
					<p class="work">Work Experience</p>
					<?php
						$db = @new mysqli("localhost", "root", "", "mydb");
						$query = " SELECT * FROM `education`";
						$res = mysqli_query($db, $query);
						for ($i = 0; $i <= 2; $i++) {
							$row = mysqli_fetch_assoc($res);
						echo '	<div class="oxford">
									<h4 class="ux">'.$row["title"].'<a href="#" class="iron">'.$row["oxford"].'</a></h4>
									<h4 class="eduyear">'.$row["num"].'</h4>
									<p class="bility">'.$row["responsibility"].'</p>			
								</div>';
						}
					?>
				<!-- <ul class="ul">
					<li><i class="fa fa-circle point"></i>'.$row["validate"].'</li>
				</ul>	 -->
			</div>
		</div>
	</section>



	<section class="recent" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="recent__text">Recent Portfolio</p>
					<nav class="menu">
						<ul>
							<li class="menu__categories"><span>All Categories</span></li>
							<li class="menu__categories"><span>Web Design</span></li>
							<li class="menu__categories"><span>Branding</span></li>
							<li class="menu__categories"><span>Mockups</span></li>
							<li class="menu__categories"><span>Photograpy</span></li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="row portfolio__img">
				<div class="col-lg-4">
					<div class="images">
						<img src="img/g1.jpg" alt="g1" class="img">
						<img src="img/g4.png" alt="g4" class="img">
						<img src="img/g7.png" alt="g7" class="img">	
					</div>				
				</div>
				<div class="col-lg-4">
					<div class="images img__top">
						<img src="img/g2.png" alt="g2" class="img">
						<img src="img/g5.png" alt="g5" class="img">
						<img src="img/g8.png" alt="g8" class="img">
					</div>
				</div>
				<div class="col-lg-4">
					<div class="images img__top img__bottom">
						<img src="img/g3.png" alt="g3" class="img">
						<img src="img/g6.png" alt="g6" class="img">
						<img src="img/g9.jpg" alt="g9" class="img">
					</div>
				</div>
			</div>
		</div>
	</section>




	<section class="intersted py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="intersted__work">
						<p class="towork">Interested to Work?</p>
						<h5 class="mirum">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Mirum est notare quam <br> littera othica. quam nunc putamus parum claram,</h5>
						<button class="contact">Contact</button>
					</div>
				</div>
			</div>
		</div>
	</section>




	<section class="table" id="pricing">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="table__text">Pricing Table</p>
				</div>
			</div>
			<div class="row">
				<?php
					$db = @new mysqli("localhost", "root", "", "mydb");
					$query = " SELECT * FROM `pricing`";
					$res = mysqli_query($db, $query);
					for ($i = 0; $i <= 2; $i++) {
						$row = mysqli_fetch_assoc($res);
						echo 	'<div class="col-lg-4">
									<div class="full__time">
										<div class="full">
											<i class="'.$row["img"].'"></i>
											<h4 class="full__text">'.$row["title"].'</h4>
											<p class="available">'.$row["description"].'</p><br>
											<p class="dolar">'.$row["num"].'</p>
											<ul>
												<li>'.$row["development"].'</li>
												<li>'.$row["advetising"].'</li>
												<li>'.$row["game"].'</li>
												<li>'.$row["music"].'</li>
											</ul>
											<button class="hire">'.$row["hire"].'</button>
										</div>
									</div>
								</div>';
					}
				?>			
		</div>
	</section>


	<section class="featured pb-5" id="blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="featured__text">Featured Posts</p>
				</div>
			</div>
			<div class="row">
			<?php
				$db = @new mysqli("localhost", "root", "", "mydb");
				$query = " SELECT * FROM `blog`";
				$res = mysqli_query($db, $query);
				for ($i = 0; $i <= 2; $i++) {
					$row = mysqli_fetch_assoc($res);
					echo 	'<div class="col-lg-4">
								<div class="traffic">
								<img src="'. $row["img"] .'" alt="b-1-3" class="blog__img"> 
									<div class="read">
										<p class="traffic__text">'. $row["title"].'</p>
										<p class="post">Post On <span>'.$row["num"].'</span> By <span>'.$row["autor"].'</span></p>
										<p class="fact">'.$row["descrip"].'</p>
										<p class="read__text">'.$row["moretext"].'</p>
									</div>
								</div>
							</div>';
				}
			?>
	</section>






	<section class="client">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="title">Client Reviews</p>
				</div>
			</div>
			<div class="row py-5">
				<div class="col-lg-12">
					<div class="owl-carousel owl-theme">
						<?php
							$db = @new mysqli("localhost", "root", "", "mydb");
							$query = " SELECT * FROM `client`";
							$res = mysqli_query($db, $query);
							for ($i = 0; $i <= 5; $i++) {
								$row = mysqli_fetch_assoc($res);
								echo '<div class="item">
										<img src="'.$row["img"].'" alt="c-1" class="girl">
										<p>'.$row["descrip"].'</p>
										<h4>'.$row["nam"].'</h4>
										<h6>'.$row["txt"].'</h6>
									  </div>';
							}
						?>	
					</div>
				</div>
			</div>
		</div>
	</section>	






	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 py-5">
					<p class="title">Contact Me</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<div class="col-sm-12">
						<div class="address">
							<div class="location">
								<i class="fas fa-location-arrow"></i>
							</div>
							<div class="media__body">
								<h4 class="right address__text">Address</h4>
								<p class="right floor">5th Avenue, 34th floor,<br>
								<span class="right">New york</span></p>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="address">
							<div class="location">
								<i class="far fa-envelope"></i>
							</div>
							<div class="media__body">
								<h5 class="your-mail">Email</h5>
								<p class="yourmail">yourmail@email.com<br>
								<span>yourmail@email.com</span></p>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="address">
							<div class="location">
								<i class="fas fa-phone-alt"></i>
							</div>
							<div class="media__body">
								<h4 class="phone__numbers">Phone</h4>
								<p class="numbers">(880)-8976-987<br>
								<span>(880)-8976-987</span></p>
							</div>
						</div>					
					</div>
				</div>
				<div class="col-sm-12 col-md-6 pt-5">
					<input type="text" placeholder="First Name" class="first"><br>
					<input type="text" placeholder="Last Name" class="last"><br>
					<input type="email" placeholder="Your Email" class="email">
					<textarea name="" cols="30" rows="9" placeholder="Your Messege"></textarea>
					<button class="messege__button"><span>Send Messege</span></button>
				</div>
			</div>
			<div class="row my-5">
				<div class="col-lg-6">
					<p class="all__right">All right reserved Siful Islam @ 2018</p>
				</div>
				<div class="col-lg-6">
					<div class="links">
						<a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f fb"></i></a>
						<a href="https://twitter.com/?lang=en" target="_blank"><i class="fab fa-twitter tw"></i></a>
						<a href="https://github.com/" target="_blank"><i class="fab fa-github gh"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>