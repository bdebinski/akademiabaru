<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Kontakt - Akademia Baru Łódź. Skontaktuj się z nami: telefon, email, adres biura. Zapraszamy na kursy barmańskie, baristyczne i kelnerskie.">
	<meta name="keywords" content="kontakt akademia baru, telefon, email, adres łódź, kursy barmańskie kontakt">
	<meta name="author" content="Akademia Baru">
	<meta name="robots" content="index, follow">
	<link rel="canonical" href="https://akademiabaru.pl/contact.php">
	<link rel="icon" href="images/icon.ico">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://akademiabaru.pl/contact.php">
	<meta property="og:title" content="Kontakt - Akademia Baru Łódź">
	<meta property="og:description" content="Skontaktuj się z Akademią Baru. Profesjonalne kursy barmańskie w Łodzi.">
	<meta property="og:image" content="https://akademiabaru.pl/images/logo.png">
	<meta property="og:locale" content="pl_PL">

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Kontakt - Akademia Baru">
	<meta name="twitter:description" content="Skontaktuj się z nami - telefon, email, adres">
	<meta name="twitter:image" content="https://akademiabaru.pl/images/logo.png">

	<!-- Performance Optimization -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://cdn.jsdelivr.net">
	<link rel="dns-prefetch" href="https://cdn.jsdelivr.net">

	<!-- Bootstrap 5.3 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;700&family=Oswald:wght@300&display=swap" rel="stylesheet">

	<title>Kontakt - Akademia Baru</title>

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
	<a href="#contactForm" id="stickyContactBtn" class="sticky-contact-btn" aria-label="Formularz kontaktowy" title="Formularz">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
			<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
			<polyline points="22,6 12,13 2,6"></polyline>
		</svg>
		<span class="sticky-contact-text">Formularz</span>
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
							<a class="nav-link" href="gallery.php">Galeria</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="offer.html">Oferta</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="contact.php" aria-current="page">Kontakt</a>
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
			<section class="text-center mb-5" aria-labelledby="contact-heading">
				<h1 id="contact-heading">Kontakt</h1>
				<p class="lead">Skontaktuj się z nami i dowiedz się więcej o naszych kursach i usługach</p>
			</section>

			<div class="row g-4">
				<!-- Contact Form -->
				<div class="col-lg-6">
					<div class="card shadow border-0 h-100">
						<div class="card-body p-4">
							<h2 class="h4 mb-4">Wyślij wiadomość</h2>

							<?php
							$messageSent = false;
							$errorMessage = '';

							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								$name = htmlspecialchars(trim($_POST['name'] ?? ''));
								$email = htmlspecialchars(trim($_POST['email'] ?? ''));
								$phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
								$message = htmlspecialchars(trim($_POST['message'] ?? ''));

								// Basic validation
								if (empty($name) || empty($email) || empty($message)) {
									$errorMessage = 'Proszę wypełnić wszystkie wymagane pola.';
								} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
									$errorMessage = 'Proszę podać poprawny adres email.';
								} else {
									// Prepare email
									$to = "office@long-table.com.pl";
									$subject = "Wiadomość z formularza kontaktowego - Akademia Baru";
									$emailBody = "Nowa wiadomość z formularza kontaktowego:\n\n";
									$emailBody .= "Imię i nazwisko: $name\n";
									$emailBody .= "Email: $email\n";
									$emailBody .= "Telefon: $phone\n\n";
									$emailBody .= "Wiadomość:\n$message\n";

									$headers = "From: $email\r\n";
									$headers .= "Reply-To: $email\r\n";
									$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

									// Send email
									if (mail($to, $subject, $emailBody, $headers)) {
										$messageSent = true;
									} else {
										$errorMessage = 'Wystąpił błąd podczas wysyłania wiadomości. Spróbuj ponownie później.';
									}
								}
							}
							?>

							<?php if ($messageSent): ?>
								<div class="alert alert-success" role="alert">
									<strong>Dziękujemy!</strong> Twoja wiadomość została wysłana. Skontaktujemy się z Tobą wkrótce.
								</div>
							<?php elseif ($errorMessage): ?>
								<div class="alert alert-danger" role="alert">
									<?php echo $errorMessage; ?>
								</div>
							<?php endif; ?>

							<form method="POST" action="contact.php" class="needs-validation" novalidate>
								<div class="mb-3">
									<label for="name" class="form-label">Imię i nazwisko <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="name" name="name" required>
									<div class="invalid-feedback">
										Proszę podać imię i nazwisko.
									</div>
								</div>

								<div class="mb-3">
									<label for="email" class="form-label">Email <span class="text-danger">*</span></label>
									<input type="email" class="form-control" id="email" name="email" required>
									<div class="invalid-feedback">
										Proszę podać poprawny adres email.
									</div>
								</div>

								<div class="mb-3">
									<label for="phone" class="form-label">Telefon</label>
									<input type="tel" class="form-control" id="phone" name="phone" placeholder="+48">
								</div>

								<div class="mb-3">
									<label for="message" class="form-label">Wiadomość <span class="text-danger">*</span></label>
									<textarea class="form-control" id="message" name="message" rows="5" required></textarea>
									<div class="invalid-feedback">
										Proszę wpisać wiadomość.
									</div>
								</div>

								<button type="submit" class="btn btn-primary btn-lg w-100 btn-ripple">Wyślij wiadomość</button>
							</form>
						</div>
					</div>
				</div>

				<!-- Contact Info & Map -->
				<div class="col-lg-6">
					<!-- Contact Details -->
					<div class="card shadow border-0 mb-4">
						<div class="card-body p-4">
							<h2 class="h4 mb-4">Dane kontaktowe</h2>

							<div class="mb-3">
								<h3 class="h6 fw-bold mb-2">Agencja Cateringowo-Artystyczna Long Table</h3>
							</div>

							<div class="mb-3">
								<p class="mb-2">
									<strong>Adres:</strong><br>
									ul. Żeromskiego 49<br>
									90-624 Łódź
								</p>
							</div>

							<div class="mb-3">
								<p class="mb-2">
									<strong>Telefony komórkowe:</strong><br>
									<a href="tel:+48501494787" class="text-decoration-none">📞 +48 501 494 787</a><br>
									<a href="tel:+48608401730" class="text-decoration-none">📞 +48 608 401 730</a>
								</p>
							</div>

							<div class="mb-3">
								<p class="mb-0">
									<strong>Email:</strong><br>
									<a href="mailto:office@long-table.com.pl" class="text-decoration-none">✉️ office@long-table.com.pl</a>
								</p>
							</div>
						</div>
					</div>

					<!-- Google Map -->
					<div class="card shadow border-0">
						<div class="card-body p-0">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2470.9848799433837!2d19.45658931573142!3d51.76928897967406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471a34f5e2e0b3e7%3A0x5e3e1f3e2e2e2e2e!2zxbplcm9tc2tpZWdvIDQ5LCA5MC02MjQgxYHDs2TFug!5e0!3m2!1spl!2spl!4v1234567890123!5m2!1spl!2spl"
								width="100%"
								height="350"
								style="border:0; border-radius: 0 0 8px 8px;"
								allowfullscreen=""
								loading="lazy"
								referrerpolicy="no-referrer-when-downgrade"
								title="Mapa lokalizacji Akademia Baru">
							</iframe>
						</div>
					</div>
				</div>
			</div>

			<hr class="featurette-divider">
		</div>
	</main>

	<!-- Footer Section -->
	<footer class="container-fluid foot">
		<div class="footer row justify-content-center align-items-center">
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

		<!-- Contact Info in Footer -->
		<div class="row mt-4 pt-4 border-top">
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
				<p class="mb-2"><a href="courses.html">Kursy</a></p>
				<p class="mb-2"><a href="offer.html">Oferta</a></p>
				<p class="mb-0"><a href="gallery.php">Galeria</a></p>
			</div>
			<div class="col-lg-4 col-md-12 text-center text-md-end">
				<p class="small mb-0">&copy; 2025 Akademia Baru. Wszystkie prawa zastrzeżone.</p>
			</div>
		</div>
	</footer>

	<!-- Bootstrap 5.3 JS Bundle (includes Popper) -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

	<!-- Custom JavaScript -->
	<script src="js/backtotop.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/scrollanimations.js"></script>

	<!-- Form Validation -->
	<script>
		// Bootstrap form validation
		(function() {
			'use strict';
			const forms = document.querySelectorAll('.needs-validation');
			Array.from(forms).forEach(form => {
				form.addEventListener('submit', event => {
					if (!form.checkValidity()) {
						event.preventDefault();
						event.stopPropagation();
					}
					form.classList.add('was-validated');
				}, false);
			});
		})();
	</script>

	<!-- Custom JavaScript -->
	<script src="js/backtotop.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/scrollprogress.js"></script>
</body>
</html>
