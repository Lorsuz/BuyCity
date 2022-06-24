<?php
session_start();
$messageLogout='main';
if(isset($_SESSION['loggedin'])){
	$messageLogout = ($_SESSION['loggedin'] == true) ? 'desconect' : 'main';
}else{
	header('locate: ./../../client/private/logout.php');
}
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Banco imobiliario</title>
		<link rel="stylesheet" href="./../../../../custom/css/menu-game.css">
		<!-- <link rel="stylesheet" href="components/custom/css/design/login.css"> -->
	</head>

	<body>
		<audio loop id="soundtrack"
			src="./../../../../static/audios/Chopsticks - Text Me Records _ Jorge Hernandez.mp3"></audio>
		<div id="songs">
			<div id="music" class="is-on">
				<img src="./../../../../static/images/music.png" alt="">
			</div>
			<div id="sound" class="is-on">
				<img src="./../../../../static/images/sound.png" alt="">
			</div>
		</div>
		<section id="home" class="appear-screen">
			<a href="./../../client/private/logout.php"><?php echo $messageLogout ?></a>
			<div>
				<h1>Buy<span id="cipher">$</span>City</h1>
				<button id="start">Start Game</button>
				<button id="buttonSettings" class="s">settings</button>
				<button id="buttonCredits">Credits</button>
				<button id="buttonFeedBack">FeedBack</button>
				<span id="buttonExtra">Beta 1.35.2</span>
			</div>
		</section>
		<section id="settings">
			<div>
				<button id="backHome1">Home</button>
				<h1>Settings</h1>
				<label for="">Number of players:</label>
				<input type="number" value="4" min="2" max="4">
				<label for="">Names: </label>
				<input type="text">
				<label for="">number of laps:</label>
				<input type="number" value="10" min="5" max="25">
				<label for=""></label>
				<input type="text">
				<label for=""></label>
				<input type="text">
			</div>
		</section>
		<section id="credits" class="disappear-screen">
			<button id="backHome2">Home</button>
			<div>
				<h1>Credits</h1>
				<p>ariellllll</p>
			</div>
		</section>
		<section id="feedBack" class="disappear-screen">
			<button id="backHome3">Home</button>
			<h1>Are you enjoying the game?</h1>
			<button>YES</button>
			<button>NO</button>
		</section>
		<section id="extra" class="disappear-screen">
			<button id="backHome4">Home</button>
			<h1>Aextraaaaaaaaaaaaaaaaa?</h1>
			<button>YES</button>
			<button>NO</button>
		</section>
		<script src="./../../../../scripts/js/menu-home.js"></script>
		<!-- <script src="components/js/cidades.js"></script>
	<script src="components/js/jogadores.js"></script> -->
	</body>

</html>
