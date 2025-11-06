<!DOCTYPE HTML>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Akademia Baru - kursy, pokazy, imprezy, wynajem sprzętu barmańskiego, syropy, fruit lounge i syrup lounge. Barmani na wesela  i imprezy, a także wiele innych.">
    <meta name="keywords" content="akademia baru, pokaz barmański, kurs barmański, kurs baristy, kurs kelnerski, sommelier, kurs somelierski, wesela, obsługa baru, event, flair, organizacja imprez, imprezy integracyjne, imprezy okolicznościowe, szkolenia, impreza firmowa, bary, bary mobilne, bary przenosne, wynajem barow, lodz, łódź, szkolenia barmańskie, kursy, pokazy barmańskie,team barmański,flair, konkursy,warsztaty, obsługa na weselach, obsługa na bankietach, kolorowe drinki, płonące drinki, płonące bary, sklep, sklep z akcesoriami barmańskimi,syropy, shakery, akcesoria do drinków, szkło, miary barowe,blendery, kruszarki,kostkarki,noże, noże do twistów,łyżki barmańskie, sitka, świecące kostki lodu, świecące mieszadełka, świecące szklanki, świecące kieliszki, syropy monin, syropy finest call,słomki, mieszadełka, termosy izotermiczne, styropiany, steroboxy, lód, bary lodowe, kieliszki lodowe,kule lodowe, lód suchy, lód kruszony, pokazy żąglerki, kursy somalierskie, kursy baristyczne, kursy kelnerskie, szablowanie szampana, fruit lounge, syrup lounge">
	<link rel="icon" href="images/icon.ico">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700|Oswald:300" rel="stylesheet">
	<title>Akademia Baru</title>
</head>
<body>
	<button onclick="function()" id="myBtn" title="Go to top"><img src="images/back-to-top-arrow.png"></button>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #3C3939;">
		

  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
  			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
  				<li class="nav-item">
  					<a class="nav-link" href="index.html">Akademia Baru <span class="sr-only">(current)</span></a>
  				</li>
  				<li class="nav-item dropdown">
  					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
  					Kursy
  					</a>
  					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				        <a class="dropdown-item" href="courses.html#wine">Warsztaty Winiarskie</a>
				        <a class="dropdown-item" href="courses.html#barist">Kurs Baristyczny</a>
				        <a class="dropdown-item" href="courses.html#waiter">Kurs Kelnerski</a>
				        <a class="dropdown-item" href="courses.html#whisky">Warsztaty Whisky</a>
				        <a class="dropdown-item" href="courses.html#bartender">Szkolenie Barmańskie</a>
				        <a class="dropdown-item" href="courses.html#cigaro">Warsztaty Cygaro</a>
        			</div>
  				</li>
  				<li class="nav-item active">
  					<a class="nav-link" href="gallery.php">Galeria <span class="sr-only">(current)</span></a>
  				</li>
  				<li class="nav-item ">
  					<a class="nav-link" href="offer.html">Oferta <span class="sr-only">(current)</span></a>
  				</li>
  				<li class="nav-item">
  					<a class="nav-link" href="contact.php">Kontakt <span class="sr-only">(current)</span></a>
  				</li>
  			</ul>

  		</div>

	</nav>
	
		<div class="container-fluid">
			<hr class="featurette-divider">
			<div class="row gallery justify-content-center">
				<?php
				$dirname = "images/gallery/";
			$images = glob($dirname."*.jpg");
		
			foreach($images as $image) {
			  echo '<div class="col-xl-2 col-lg-4 col-md-4 col-6 mini" style="background-image: url('.$image.')">'.'<a href="'.$image.'" data-fancybox="images" class="a-dis">'.'</a>'.'</div>';
		}
				?>
	</div>
		

		<hr class="featurette-divider">

		</div>

		<div class="container-fluid foot">
			<div class="footer row">
				<div class="col-lg-3">
					<a href="http://long-table.com.pl">
					<img class="img-fluid" src="images/longtable.png">
					</a>
				</div>
				<div class="col-lg-3">
					<a href="http://akademiabaru.pl">
					<img class="img-fluid" src="images/logo.png">
					</a>
				</div>
				<div class="col-lg-3">
					<a href="http://lodowe.com.pl">
					<img src="images/lodowe.png" class="img-fluid">
					</a>
				</div>
				<div class="col-lg-3">
					<a href="http://www.long-table.com.pl">
					<img class="img-fluid" src="images/longtables.png">
					</a>
				</div>
			</div>
		</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="js/backtotop.js"></script>
	<script src="js/smoothscroll.js"></script>
</body>
