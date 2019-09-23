<?php get_header(); ?>

<div class="card-body col-4 col-sm-6 col-md-8 col-xl-12 title">
			<p class="card-text">ПОВНИЙ КОМПЛЕКС МЕДИЧНИХ ПОСЛУГ</p>
			<h5 class="col-md-4 col-lg-6 col-xl-6">Європейські стандарти медичної допомоги</h5>
			<a href="#" class="btn btn-primary ">про клініку</a>
		</div>


	
	</header>
<article>
		<div class="container-fliud tabs-list">
			<p>Комплексний підхід до Вашого здоров'я</p>
			<h3>Ключові напрямки</h3>
			<i></i>
		</div>
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><img src="<?php bloginfo(template_url)
					?>/img/Human_Brain.svg" alt=""><span>Неврологія</span></a>
			</li>
			<li class="nav-item border-line col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><img src="<?php bloginfo(template_url)
					?>/img/healthcare-and-medical.svg" alt="">Масаж</a>
			</li>
			<li class="nav-item col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><img src="<?php bloginfo(template_url) ?>/img/joint.svg" alt="">Ревматологія</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

				<div class="row no-gutters">

					<div class="col-md-6">
						<div class="card-body">
							<h2 class="card-title">неврологія</h2>
							<p class="card-text-2"><?php the_field('card'); ?></p>
							<button type="button" class="btn btn-outline-primary">Деталі</button>
						</div>
					</div>
					<div class="col-md-2">
						<img src="<?php bloginfo(template_url) ?>/img/image-3.jpg" class="card-img tabs_img" alt="...">
					</div>
				</div>

			</div>
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<div class="row no-gutters">

					<div class="col-md-6">
						<div class="card-body">
							<h2 class="card-title">Масаж</h2>
							<p class="card-text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<button type="button" class="btn btn-outline-primary">Деталі</button>
						</div>
					</div>
					<div class="col-md-2">
						<img src="<?php bloginfo(template_url) ?>/img/image-4.jpg" class="card-img tabs_img" alt="...">
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
				<div class="row no-gutters">

					<div class="col-md-6">
						<div class="card-body">
							<h2 class="card-title">ревматологія</h2>
							<p class="card-text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<button type="button" class="btn btn-outline-primary">Деталі</button>
						</div>
					</div>
					<div class="col-md-2">
						<img src="<?php bloginfo(template_url) ?>/img/image-5.jpg" class="card-img tabs_img" alt="...">
					</div>
				</div>
			</div>
		</div>
	</article>

<?php get_footer(); ?>
