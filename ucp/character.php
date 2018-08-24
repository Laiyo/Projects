<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="grid.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet"> 

	<style type="text/css">
		*{
			box-sizing: border-box;
		}
		body{
			margin: 0;
			padding: 0;
			font-family: 'Lato', sans-serif;

			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
		}
		.container{
			height: 600px;
			width: 80%;
			margin: 5% auto;
			border-radius: 10px;
			color: #fff;
			overflow-y: scroll;
			overflow-x: hidden;

			background-image: url('img/background2.jpg');
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
		.body{
			display: flex;
			margin-top: 15px;
		}

		.stat{
			background-color: rgba(0,0,0,0.5);
			padding: 10px;
			margin-bottom: 10px;

			transition: 0.1s;
			cursor: pointer;
		}
		.stat:hover{
			color: #000;
			background-color: #fff;
		}
		.headerStat{
			display: flex; 
			justify-content: space-between; 
			padding: 0 0 10px 0;
		}
		.bar{
			text-align: right;
		  	padding-right: 20px;
		  	color: white;
		  	height: 10px;
		}

		.full{
			width: 100%;
			background-color: #2196F3;
		}
		.seventyFive{
			width: 75%;
			background-color: #2196F3;
		}
		.fifty{
			width: 50%;
			background-color: #2196F3;
		}
		.twentyFive{
			width: 25%;
			background-color: #2196F3;
		}
		.fifteen{
			width: 15%;
			background-color: #2196F3;
		}
		.five{
			width: 5%;
			background-color: #2196F3;
		}
		.male{
			background-color: #4caf50;
			width: 100%;
		}
		.female{
			background-color: #a976a2;
		}
		.back{
			border: 1px solid rgb(169, 118, 162);
			background-color: rgb(0,0,0);
			padding: 15px 50px;
			border-radius: 10px;
			transition: 0.3s;
			opacity: 0.5;
		}
		.back:hover{
			opacity: 1;
		}
		.back span{
			color: #fff;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div class="container">
		<button class="close" aria-label="Close" style="float: right; cursor: pointer; background-color: transparent; border: none; outline: none; color: #fff;">
  			<span aria-hidden="true">&times;</span>
		</button>
		<div style="padding: 10px 20px;">
			<div class="header">
				<div class="title">
					<img src="img/logo.png" height="40px" style="float: left;"><h3>PanaFive™</h3><span style="line-height: 40px; font-size: 12px; padding-left: 10px;">Information du Personnage</span>
				</div>
				<div style="padding-top: 10px;">
					<span>Stats du joueur: John_Doe</span>
				</div>
			</div>

			<div class="body">
				<div class="col-8">
					<div>
						<div class="stat">
							<div class="headerStat">
								<span>Level</span>
								<span>10</span>
							</div>
							<div class="bar full"></div>
						</div>
						<div class="stat">
							<div class="headerStat">
								<span>Respect</span>
								<span>4/8</span>
							</div>
							<div class="bar fifty"></div>
						</div>
						<div class="stat">
							<div class="headerStat">
								<span>Argent</span>
								<span>26 653$</span>
							</div>
						</div>
						<div class="stat">
							<div class="headerStat">
								<span>Banque</span>
								<span>6960$</span>
							</div>
							<div class="bar seventyFive"></div>
						</div>
						<div class="stat">
							<div class="headerStat">
								<span>Sexe</span>
								<span>Homme</span>
							</div>
							<div class="bar male"></div>
						</div>
						<div class="stat">
							<div class="headerStat">
								<span>Heures Jouées</span>
								<span>20heures</span>
							</div>
							<div class="bar twentyFive"></div>
						</div>
						<div class="stat">
							<div class="headerStat">
								<span>Premiere Experience</span>
								<span>12min</span>
							</div>
							<div class="bar five"></div>
						</div>
					</div>
				</div>

				<div class="col-4" style="background-color: rgba(0,0,0,0.5); margin-left: 5px; position: sticky; height: 600px; overflow: hidden; padding: 5px;">

					<img src="img/skin.png" height="600px;">
				</div>
		</div>
		<a href="index.php">
				<div class="back" style="position: absolute; bottom: 0;">
					<span>Back</span>
				</div>
			</a>
	</div>

</body>
</html>