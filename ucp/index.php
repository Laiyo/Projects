<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="grid.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	
	<style type="text/css">
		body{
			font-family: 'Lato';
		}
		a{
			color: inherit;
			text-decoration: none;
		}
		.container{
			height: 600px;
			width: 80%;
			margin: 5% auto;
			border-radius: 10px;
			color: #fff;

			background-image: url('img/background.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
			opacity: 1;
		}
		.header{
			border-bottom: 1px solid #a976a2; 
			display: flex;
			justify-content: space-between;
			color: #fff;
			width: 100%;
		}
		.header h3{
			margin: 0;
			padding-top: 10px;
			padding-bottom: 7px; 
			color: #a976a2;
			font-weight: normal;
			display: inline-block;
			float: left;
		}
		.section div{
			display: flex;
			justify-content: space-around;
		}
		.sectionImage{
			margin: 30px 0 0 0;
			padding: 10px;
			width: 300px;
			height: 200px;
			line-height: 200px;
			position: relative;

			font-size: 20px;
			font-family: 'Roboto';

			border-radius: 10px;
			transition: 0.1s;
			box-shadow: 1px 0px 5px 0px #656565;
		}
		.sectionHover{
			position: absolute;
 			top: 0;
			height: 100%;
			width: 100%;
			opacity: 0;
			border-radius: 10px;
			transition: .2s ease;
		}
		.sectionHover:hover{
			background-color: #000;
			opacity: 0.5;
		}
	</style>
</head>
<body>

	<div class="container">
		<button class="close" aria-label="Close" style="float: right; cursor: pointer; background-color: transparent; border: none; outline: none;">
  			<span aria-hidden="true">&times;</span>
		</button>
		<div style="padding: 10px 20px;">
			<div class="header">
				<div class="title">
					<img src="img/logo.png" height="40px" style="float: left;"><h3>PanaFive™</h3>
					<span style="margin: 10px; line-height: 45px;">Stats du joueur: John_Doe</span>
				</div>
			</div>

			<div class="section">
				<div>
					<a href="character.php"><div class="sectionImage" style="background-image: url('img/bg1.jpg'); background-repeat: no-repeat; background-size: cover;"><div class="sectionHover"></div><span>Informations du personnage</span></div></a>
					<a href="faction.php"><div class="sectionImage" style="background-image: url('img/bg2.jpg'); background-repeat: no-repeat; background-size: cover;"><div class="sectionHover"></div><span>Jobs / Factions</span></div></a>
					<a href="object.php"><div class="sectionImage" style="background-image: url('img/bg3.jpg'); background-repeat: no-repeat; background-size: cover;"><div class="sectionHover"></div><span>Objets possedés</span></div></a>
				</div>
				<div>
					<a href="car.php"><div class="sectionImage" style="background-image: url('img/bg3.jpg'); background-repeat: no-repeat; background-size: cover;"><div class="sectionHover"></div><span>Vehicules</span></div></a>
					<a href="house.php"><div class="sectionImage" style="background-image: url('img/bg4.jpg'); background-repeat: no-repeat; background-size: cover;"><div class="sectionHover"></div><span>Maisons</span></div></a>
					<a href="packs.php"><div class="sectionImage" style="background-image: url('img/bg3.jpg'); background-repeat: no-repeat; background-size: cover;"><div class="sectionHover"></div><span>Packs</span></div></a>
				</div>
				
			</div>
		</div>
	</div>

</body>
</html>