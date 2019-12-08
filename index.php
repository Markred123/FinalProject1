<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Room booking</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="img/p.jpg" width="30" height="30" alt=""> TheBook</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="bookroom.php">List of Companies</a></li>
					<li><a href="booked.php">Random Password Generator</a></li>
					<?php
                        session_start();
                        if(isset($_SESSION["online"]) && $_SESSION["online"] == true){
                            echo '<li><a href="SignOut.php">Sign out</a></li>' ;

                        }
                        else echo '<li><a href="login.php">Login</a></li> <li><a href="signup.php">Sign-Up</a></li>';





                    ?>


				</ul>
			</div>
		</div>
	</nav>

	<section id="showcase">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="showcase-left">
			<div class="jumbotron">
				<h1 class="a">Hello there....</h1>
				<h2 class="b">You can use this website to book rooms in NCI</h2>
				<hr class="my-4">
				<a class="btn btn-primary btn-lg" href="bookroom.php" role="button">Book rooms</a>
			</div>
		</div>
		</div>
		</div>
		</div>
	</section>

	<br>
	<hr>

	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-5">
					<form role="form" method="post" action="php/contact.php">
						<div class="form-group">
							<label>Name: </label>
							<input class="form-control" type="text" name="name" id="name" placeholder="Enter Name" maxlength="20">
						</div>
						<div class="form-group">
							<label>Email: </label>
							<input class="form-control" type="email" name="email" id="email" placeholder="Enter Email" maxlength="40">
						</div>
						<div class="form-group">
							<label>Message: </label>
							<textarea class="form-control" type="text" name="message" id="message" placeholder="Enter Message"></textarea>
						</div>
					<input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary">
					</form>
				</div>
				<div class="col-md-7 col-sm-7">
						<br/>
						<br/>
						<p class="text-right">+353 86 6666666</p>
						<p class="text-right">info@rb.ie</p>
						<p class="text-right">National College of Ireland</p>
				</div>
			</div>
		</div>
	</section>

	<div class="outline3">
		<div class="container">
			<footer>RB Copyright &copy; 2019<br/></footer>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<script>
		$(function() {
			// Smooth Scrolling
			$('a[href*="#"]:not([href="#"])').click(function() {
				if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					if (target.length) {
						$('html, body').animate({
							scrollTop: target.offset().top
						}, 1000);
						return false;
					}
				}
			});
		});

	</script>
</body>
</html>
