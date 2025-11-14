<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Galeria zdjęć - Akademia Baru Łódź. Zobacz nasze kursy, pokazy barmańskie, imprezy i wydarzenia.">
	<meta name="keywords" content="galeria akademia baru, zdjęcia kursy barmańskie, pokazy barmańskie zdjęcia, wydarzenia łódź">
	<meta name="author" content="Akademia Baru">
	<meta name="robots" content="index, follow">
	<link rel="canonical" href="https://akademiabaru.pl/gallery.php">
	<link rel="icon" href="images/icon.ico">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://akademiabaru.pl/gallery.php">
	<meta property="og:title" content="Galeria - Akademia Baru Łódź">
	<meta property="og:description" content="Zobacz zdjęcia z naszych kursów i pokazów barmańskich.">
	<meta property="og:image" content="https://akademiabaru.pl/images/logo.png">
	<meta property="og:locale" content="pl_PL">

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Galeria - Akademia Baru">
	<meta name="twitter:description" content="Zdjęcia z kursów i pokazów barmańskich">
	<meta name="twitter:image" content="https://akademiabaru.pl/images/logo.png">

	<!-- Performance Optimization -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://cdn.jsdelivr.net">
	<link rel="dns-prefetch" href="https://cdn.jsdelivr.net">

	<!-- Bootstrap 5.3 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<!-- Fancybox 5 CSS (No jQuery required) -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;700&family=Oswald:wght@300&display=swap" rel="stylesheet">

	<title>Galeria - Akademia Baru</title>

	<!-- Google Analytics 4 -->
	<!-- Replace G-XXXXXXXXXX with your actual GA4 Measurement ID -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-XXXXXXXXXX');
	</script>
</head>
<body>
	<!-- Scroll Progress Bar -->
	<div class="scroll-progress" id="scrollProgress" aria-hidden="true"></div>

	<!-- Back to Top Button -->
	<button id="backToTopBtn" aria-label="Wróć na górę strony" title="Wróć na górę">
		<img src="images/back-to-top-arrow.png" alt="Strzałka w górę" width="50" height="50">
	</button>

	<!-- Sticky Contact Button (Mobile) -->
	<a href="contact.php" id="stickyContactBtn" class="sticky-contact-btn" aria-label="Skontaktuj się z nami" title="Kontakt">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
			<path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
		</svg>
		<span class="sticky-contact-text">Kontakt</span>
	</a>

	<!-- Header Navigation -->
	<header>
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark-custom" aria-label="Główna nawigacja">
			<div class="container-fluid">
				<!-- Logo/Brand -->
				<a class="navbar-brand" href="index.html" aria-label="Akademia Baru - strona główna">
					<img src="images/logo.png" alt="Akademia Baru logo" width="50" height="50">
				</a>

				<!-- Mobile Menu Toggle -->
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Przełącz menu nawigacji">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- Navigation Links -->
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mt-2 mt-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="index.html">Akademia Baru</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="courses.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Kursy
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="courses.html#wine">Warsztaty Winiarskie</a></li>
								<li><a class="dropdown-item" href="courses.html#barist">Kurs Baristyczny</a></li>
								<li><a class="dropdown-item" href="courses.html#waiter">Kurs Kelnerski</a></li>
								<li><a class="dropdown-item" href="courses.html#whisky">Warsztaty Whisky</a></li>
								<li><a class="dropdown-item" href="courses.html#bartender">Szkolenie Barmańskie</a></li>
								<li><a class="dropdown-item" href="courses.html#cigaro">Warsztaty Cygaro</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="gallery.php" aria-current="page">Galeria</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="offer.html">Oferta</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Kontakt</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<!-- Main Content -->
	<main>
		<div class="container marketing">
			<hr class="featurette-divider">

			<!-- Page Title -->
			<section class="text-center mb-5" aria-labelledby="gallery-heading">
				<h1 id="gallery-heading">Galeria</h1>
				<p class="lead">Zobacz zdjęcia z naszych kursów, pokazów i wydarzeń</p>
			</section>

			<!-- Gallery Grid -->
			<section aria-label="Galeria zdjęć">
				<div class="gallery-grid">
					<?php
					$dirname = "images/gallery/";
					$images = glob($dirname."*.jpg");

					if ($images && count($images) > 0) {
						foreach($images as $image) {
							$imageName = basename($image);
							echo '<a href="'.$image.'" data-fancybox="gallery" aria-label="Zobacz zdjęcie: '.$imageName.'">';
							echo '<img src="'.$image.'" alt="Zdjęcie z galerii" class="img-offer" loading="lazy" />';
							echo '</a>';
						}
					} else {
						echo '<div class="col-12 text-center">';
						echo '<p class="lead">Brak zdjęć w galerii. Wkrótce dodamy nowe zdjęcia!</p>';
						echo '</div>';
					}
					?>
				</div>
			</section>

			<hr class="featurette-divider">
		</div>
	</main>

	<!-- Footer Section -->
	<footer class="container-fluid foot">
		<!-- Partner Logos -->
		<div class="footer footer-partners row justify-content-center align-items-center">
			<div class="col-lg-3 col-md-6 col-sm-6 text-center mb-3 mb-lg-0">
				<a href="http://long-table.com.pl" target="_blank" rel="noopener noreferrer" aria-label="Long Table - strona partnerska">
					<img class="img-fluid" src="images/longtable.png" alt="Long Table logo" loading="lazy">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 text-center mb-3 mb-lg-0">
				<a href="http://akademiabaru.pl" aria-label="Akademia Baru - strona główna">
					<img class="img-fluid" src="images/logo.png" alt="Akademia Baru logo" loading="lazy">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 text-center mb-3 mb-lg-0">
				<a href="http://lodowe.com.pl" target="_blank" rel="noopener noreferrer" aria-label="Lodowe.com.pl - strona partnerska">
					<img src="images/lodowe.png" class="img-fluid" alt="Lodowe.com.pl logo" loading="lazy">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 text-center mb-3 mb-lg-0">
				<a href="http://www.long-table.com.pl" target="_blank" rel="noopener noreferrer" aria-label="Long Tables - strona partnerska">
					<img class="img-fluid" src="images/longtables.png" alt="Long Tables logo" loading="lazy">
				</a>
			</div>
		</div>

		<!-- Footer Content -->
		<div class="footer footer-content row">
			<div class="col-lg-4 col-md-6 text-center text-md-start mb-4 mb-lg-0">
				<h4>Kontakt</h4>
				<p class="mb-2">
					<a href="tel:+48501494787">📞 +48 501 494 787</a>
				</p>
				<p class="mb-2">
					<a href="mailto:office@long-table.com.pl">✉️ office@long-table.com.pl</a>
				</p>
				<p class="mb-0">📍 ul. Żeromskiego 49, 90-624 Łódź</p>
			</div>
			<div class="col-lg-4 col-md-6 text-center mb-4 mb-lg-0">
				<h4>Szybkie linki</h4>
				<p class="mb-2"><a href="index.html">Strona główna</a></p>
				<p class="mb-2"><a href="courses.html">Kursy</a></p>
				<p class="mb-0"><a href="offer.html">Oferta</a></p>
			</div>
			<div class="col-lg-4 col-md-6 text-center mb-4 mb-lg-0">
				<h4>O nas</h4>
				<p class="mb-0">Profesjonalne szkolenia baristyczne i obsługi baru. Rozwijamy umiejętności i pasje w branży gastronomicznej.</p>
			</div>
		</div>

		<!-- Copyright -->
		<div class="footer copyright">
			<p>&copy; 2025 Akademia Baru. Wszystkie prawa zastrzeżone.</p>
		</div>
	</footer>

	<!-- Bootstrap 5.3 JS Bundle (includes Popper) -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

	<!-- Fancybox 5 JS (No jQuery required) -->
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
	<script>
		// Initialize Fancybox
		Fancybox.bind('[data-fancybox]', {
			Toolbar: {
				display: {
					left: ["infobar"],
					middle: [],
					right: ["close"]
				}
			}
		});
	</script>

	<!-- Custom JavaScript -->
	<script src="js/backtotop.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/scrollanimations.js"></script>
	<script src="js/scrollprogress.js"></script>
</body>
</html>
