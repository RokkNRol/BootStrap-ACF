<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php bloginfo('name'); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Karla|Lato:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script
src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
	<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
</head>

<body>

	<header>
		<div class="container-fluid">

			
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="<?php echo home_url() ?>">


				<div class="media col-12">
					<svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M23.763 23.0328C23.763 23.0328 29.6995 24.6671 35.2201 22.7287C43.5766 19.7641 49.3997 13.5308 51.7819 10.6422L51.2903 9.76802C50.7231 8.77982 49.4753 8.43775 48.4922 9.00786L36.5057 15.9253V2.05242C36.5057 0.912189 35.5982 0 34.4639 0H23.5361C22.4017 0 21.4942 0.912189 21.4942 2.05242V15.9253L9.50775 9.00786C8.52463 8.43775 7.27682 8.77982 6.70964 9.76802L6.21808 10.6422C8.67588 13.6828 14.8393 20.2962 23.763 23.0328ZM28.9811 12.7706C31.212 12.7706 33.027 14.595 33.027 16.8375C33.027 19.0799 31.212 20.9043 28.9811 20.9043C26.7502 20.9043 24.9352 19.0799 24.9352 16.8375C24.9352 14.595 26.7502 12.7706 28.9811 12.7706Z" fill="#219653" />
						<path d="M55.9791 35.8794L44.0682 29L55.9791 22.1206C56.9622 21.5505 57.3025 20.2962 56.7353 19.308L54.4288 15.2792C47.8116 17.9017 25.6536 29 31.5902 58H34.4639C35.5983 58 36.5058 57.0878 36.5058 55.9476V42.0747L48.4544 48.9921C49.4376 49.5623 50.6854 49.2202 51.2526 48.232L56.6975 38.692C57.3025 37.7038 56.9622 36.4496 55.9791 35.8794Z" fill="#2F80ED" />
						<path d="M3.57122 15.2792L1.26467 19.27C0.697482 20.2582 1.03779 21.5125 2.02091 22.0826L13.9318 28.962L2.02091 35.8794C1.03779 36.4496 0.697482 37.7038 1.26467 38.692L6.70964 48.194C7.27682 49.1822 8.52462 49.5243 9.50774 48.9541L21.4564 42.0367V55.9096C21.4564 57.0498 22.3639 57.962 23.4983 57.962H26.372C32.3464 29 10.1884 17.9017 3.57122 15.2792Z" fill="#2F80ED" />
						<path d="M35.9386 25.2753C35.9008 25.1992 35.8251 25.1992 35.7495 25.1992C28.3761 27.4037 22.3262 25.2372 22.2883 25.1992C22.2127 25.1612 22.1371 25.1992 22.0993 25.2753C22.0615 25.3513 22.0615 25.4273 22.0993 25.5033C22.1749 25.5793 28.3383 35.0053 28.8677 40.0983C28.8677 40.1743 28.9433 40.2503 29.0567 40.2503C29.1324 40.2503 29.2458 40.1743 29.2458 40.0983C29.6995 34.9673 35.863 25.5793 35.9386 25.5033C35.9764 25.4273 35.9764 25.3513 35.9386 25.2753Z" fill="url(#paint0_linear)" />
						<defs>
							<linearGradient id="paint0_linear" x1="28.9968" y1="29.4527" x2="28.9968" y2="43.9961" gradientUnits="userSpaceOnUse">
								<stop offset="50%" stop-color="#6ADBA7" />
								<stop offset="0.9868" stop-color="#3DB3C1" />
							</linearGradient>
						</defs>
					</svg>
					<div class="media-body">
						<h1 class="mt-0"><?php bloginfo('name') ?></h1>
						<p><?php bloginfo('description')?></p>
					</div>
				</div>
			</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="#">Переваги </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">ціни </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">лікування </a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Контакти 
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Email</a>
								<a class="dropdown-item" href="#">Viber</a>
								<a class="dropdown-item" href="#">Telegram</a>
							</div>
						</li>
					</ul>
			<button type="button" class="btn btn-outline-primary">Записатись на прийом</button>

				</div>
			</nav>


		</div>
	


		