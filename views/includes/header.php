<?php
	require "variables.php";
	require "send_mail.php"
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <base href="/MVC/">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <title>Document</title>
</head>
<body>
	<main class="grid-container">
		<form action="php/send_mail.php" method="post">
		<section class="item1">
			<div class="all">
				<div class="entete">
			<div class="navbar">
				<div class="navbar-content">
					<div class="nav-btn">
						<div class="menu-ico">
							<img src="../assets/images/category.svg" alt="">
						</div>
					</div>
					<input type="text" placeholder="Besoin d'un chef de projet ?">
				<div class="special">
					<div class="nav-btn-1">
						<div class="menu-ico">
							<img src="../assets/images/search-normal-1.svg" alt="">
						</div>
					</div>
					<div class="bar"></div>
					<div class="nav-btn-2">
						<div class="menu-ico">
							<img src="../assets/images/delete.svg" width="24px" height="24px" alt="">
						</div>
					</div>
				</div>
				</div>
			</div>
			<div class="content">
	 			<div class="container">
		          <div class="flex jcsb aic user">
		            <div class="avatar">
		              	<img src="../assets/images/lionel.jpg" width="400px" height="400px" alt="">
		            </div>
		            <div class="user-infos">
		              	<h3><?php echo $nom ?></h3>
		              	<p><?php echo $statut ?></p>
		            </div>
		          </div>
	        	</div>
			</div>
			<div class="fab-container">
				<div class="fab fab-icon-holder">
					<img src="../assets/images/add.png" alt="">
				</div>
			<ul class="fab-options">
				<li>
					<div class="fab-icon-holder">
						<img src="../assets/images/send.png" alt="">
					</div>
				</li>
				<li>
					<div class="fab-icon-holder">
						<a href="controllerCv/addCvs"><img src="assets/images/modifier.png" alt=""></a>
					</div>
				</li>
				<li>
					<div class="fab-icon-holder">
						<img src="../assets/images/document.png" alt="">
					</div>
				</li>
			</ul>
			</div>
			</div>
			<div class="body">
				<div class="column">
					<div class="photo" id="icon-one">
					</div>
					<div class="infos" id="text-one">
			            <h4><?php echo $annee ?></h4>
						<h4><?php echo $origine ?></h4>
						<h4><?php echo $sante ?></h4>
			        </div>
				</div>
				<hr width="60%">
				<div class="column">
					<div class="photo" id="icon-two">
					</div>
					<div class="infos" id="text-two">
					   <h4><?php echo $lieu ?></h4>
					   <h4><?php echo $ville ?></h4>
			           <h4><?php echo $map ?></h4>
			        </div>
				</div>
				<hr width="60%">
				<div class="column">
					<div class="photo" id="icon-three">
					</div>
					<div class="infos" id="text-three">
			            <h4><?php echo $numero ?></h4>
						<h4><?php echo $reseau ?></h4>
			        </div>
				</div>
				<hr width="60%">
				<div class="column"> 
					<div class="photo" id="icon-fourth">
					</div>
					<div class="infos" id="text-fourth">
			           <h4><?php echo $adresse ?></h4>
					   <h4><?php echo $reseauSocial ?></h4>
			        </div>
			</div>
			<div class="en-bas">
			<div class="premier">+45 PROJETS</div>
			<div class="deuxieme">+31 CONTRATS</div>
			<div class="troisieme">12 ANS D'EXP</div>
			</div>
			</div>
			</div>
		</section>
				</form>
		<section class="item2">
			<div class="card1">
				<div class="head">
					<div class="ico">
						<img src="../assets/images/office.png" alt="">
					</div>
					<div class="text">
		              <h3>Experience professionnelle</h3>
		              <small><i>Experience en entreprise</i></small>
	            	</div>
	            	<div class="menu-vertical">
	            		<img src="../assets/images/menuV.png">
	            	</div>
				</div>
			<div class="form2">
			  <div class="sec">
	            <div class="title"><?php echo $experience ?></div>
	            <a href="#" class="color"><?php echo $lien ?></a><br>
	            <small><?php echo $periode ?></small>
	          </div>
	          <div class="sec">
	            <div class="title"><?php echo $experience ?></div>
	            <a href="#" class="color"><?php echo $lien ?></a><br>
	            <small><?php echo $periode ?></small>
	          </div>
	          <div class="sec">
	            <div class="title"><?php echo $experience ?></div>
	            <a href="#" class="color"><?php echo $lien ?></a><br>
	            <small><?php echo $periode ?></small>
	          </div>
	          <div class="sec">
	            <div class="title"><?php echo $experience ?></div>
	            <a href="#" class="color"><?php echo $lien ?></a><br>
	            <small><?php echo $periode ?></small>
	          </div>
	          <div class="sec">
	            <div class="title"><?php echo $experience ?></div>
	            <a href="#" class="color"><?php echo $lien ?></a><br>
	            <small><?php echo $periode ?></small>
	          </div>	          
			</div>
			</div>

			<div class="card2">
				<div class="head">
					<div class="text">
						<h3>Point d'intérêts</h3>
	            
	            		<small><i>Simples passes temps pour se faire un peu plaisir</i></small>
					</div>
				</div>
				<div class="image">
	          		<img src="../assets/images/image.png" alt="">
	        	</div>
			</div>

			<div class="card3">
				<div class="head">
					<div class="text">
						<h3>Langues</h3>
	            
	            		<small><i>Pratiquées en entreprise</i></small>
					</div>
				</div>
				<div class="language">
		          	<div class="checkbox">
		            	<input type="checkbox" name="" id="check7">
			            <label for="check7">
			              <div class="active">
			               	<img src="../assets/images/checked.png">
			              </div>
			            </label>
		          	</div>
		          		<b>Français</b>
	        	</div>
	        	<div class="language">
		          	<div class="checkbox">
		            	<input type="checkbox" name="" id="check6">
			            <label for="check6">
			              <div class="active">
			               	<img src="../assets/images/checked.png">
			              </div>
			            </label>
		          	</div>
		          		<b>Anglais</b>
	        	</div>
			</div>

		</section>
