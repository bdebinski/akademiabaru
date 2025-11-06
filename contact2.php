<!DOCTYPE HTML>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Akademia Baru - kursy, pokazy, imprezy, wynajem sprzętu barmańskiego, syropy, fruit lounge i syrup lounge. Barmani na wesela  i imprezy, a także wiele innych.">
    <meta name="keywords" content="akademia baru, pokaz barmański, kurs barmański, kurs baristy, kurs kelnerski, sommelier, kurs somelierski, wesela, obsługa baru, event, flair, organizacja imprez, imprezy integracyjne, imprezy okolicznościowe, szkolenia, impreza firmowa, bary, bary mobilne, bary przenosne, wynajem barow, lodz, łódź, szkolenia barmańskie, kursy, pokazy barmańskie,team barmański,flair, konkursy,warsztaty, obsługa na weselach, obsługa na bankietach, kolorowe drinki, płonące drinki, płonące bary, sklep, sklep z akcesoriami barmańskimi,syropy, shakery, akcesoria do drinków, szkło, miary barowe,blendery, kruszarki,kostkarki,noże, noże do twistów,łyżki barmańskie, sitka, świecące kostki lodu, świecące mieszadełka, świecące szklanki, świecące kieliszki, syropy monin, syropy finest call,słomki, mieszadełka, termosy izotermiczne, styropiany, steroboxy, lód, bary lodowe, kieliszki lodowe,kule lodowe, lód suchy, lód kruszony, pokazy żąglerki, kursy somalierskie, kursy baristyczne, kursy kelnerskie, szablowanie szampana, fruit lounge, syrup lounge">
	<link rel="icon" href="images/icon.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700|Oswald:300" rel="stylesheet">
	<title>Akademia Baru</title>
</head>
<body>
	<button onclick="function()" id="myBtn" title="Go to top"><img src="images/back-to-top-arrow.png"></button>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #3C3939;">
		<a class="navbar-brand logo" href="http://akademiabaru.pl"><img  class="logo" src="images/logo.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   			<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
  			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
  				<li class="nav-item">
  					<a class="nav-link" href="#">Akademia Baru <span class="sr-only">(current)</span></a>
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
  				<li class="nav-item">
  					<a class="nav-link" href="gallery.php">Galeria <span class="sr-only">(current)</span></a>
  				</li>
  				<li class="nav-item">
  					<a class="nav-link" href="offer.html">Oferta <span class="sr-only">(current)</span></a>
  				</li>
  				<li class="nav-item active">
  					<a class="nav-link" href="contact.php">Kontakt <span class="sr-only">(current)</span></a>
  				</li>
  			</ul>

  		</div>

	</nav>
	
		<div class="container-fluid">

			<hr class="featurette-divider">
				<div class="container contact">
					<div class="row">
					<div class="col-lg-6">
						<form action="" method="post">
							<div class="form-row">

								<div class="col-md-10">
									Imię i nazwisko:
									<label class="sr-only" for="nameInput">Imię i nazwisko</label>
									<input type="text" class="form-control mb-2 mr-sm-2" id="nameInput" name="nameInput" placeholder="Imię i nazwisko">
								</div>

								<div class="col-md-10">
									Adres email:
								  	<label class="sr-only" for="emailInput">Adres email</label>
								    <input type="text" class="form-control mb-2 mr-sm-2" id="emailInput" name="emailInput" placeholder="Adres email">
								</div>

							</div>

							<div class="form-row">
								<div class="col-md-10 my-2">
									Numer kontaktowy:
									<label class="sr-only" for="contactNumberInput">Numer kontaktowy</label>
								    <input type="tel" class="form-control mb-2 mr-sm-2" id="contactNumberInput" name="contactNumberInput" placeholder="Numer kontaktowy">
								</div>
							</div>

							<div class="form-row">
								Treść wiadomości:
								<div class="col-md-10 my-2">
									<textarea class="form-control mb-2 mr-sm-2" id="messageInput" name="messageInput" rows="4" placeholder="Tutaj wpisz swoją wiadomość :)"></textarea>
								</div>
							</div>

						   <button type="submit" name="submit" class="btn btn-primary mb-2 col-md-10">Wyślij</button>
                        </form>
                        <?php 
if(isset($_POST['submit'])){
    $to = "office@long-table.com.pl"; // this is your Email address
    $from = $_POST['emailInput']; // this is the sender's Email address
    $name_and_surname = $_POST['nameInput'];
    $subject = "Form submission";
    $phone = $_POST['contactNumberInput'];
    $message = $name_and_surname . $phone . " " .  " wrote the following:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "<div class='alert alert-success' role='alert'>
  <strong>Dziękujemy!</strong> .
" . $name_and_surname . ", skontaktujemy się tak szybko jak to możliwe.</div>";
    }
?>
					</div>
					<div class="col-lg-6 text-center"><br>
							<h5>Agencja Cateringowo-Artystyczna Long Table</h5>
							<span>ul. Żeromskiego 49,</span><br><br>
							<span> 90-624 Łódź</span><br><br>
							<span>tel./fax: +48 42 688 46 59</span><br><br>
							<span>mobile: +48 501 494 787</span><br><br>
							<span>mobile: +48 608 401 730</span><br><br>
							<span>mail: office@long-table.com.pl</span><br><br>
					</div>
					</div>
				</div>
					
			<hr class="featurette-divider">
		</div>

		<div class="container-fluid foot">
			<div class="footer row">
				<div class="col-lg-3">
					<a href="http://akademiabaru.pl">
					<img class="img-fluid" src="images/longtable.png">
					</a>
				</div>
				<div class="col-lg-3">
					<a href="http://akademiabaru.pl">
					<img class="img-fluid" src="images/logo.png">
					</a>
				</div>
				<div class="col-lg-3">
					<a href="http://akademiabaru.pl">
					<img src="images/lodowe.png" class="img-fluid">
					</a>
				</div>
				<div class="col-lg-3">
					<a href="http://akademiabaru.pl">
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
