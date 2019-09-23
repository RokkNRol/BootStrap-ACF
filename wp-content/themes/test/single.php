<?php get_header(); ?>

<div class="card-body col-4 col-sm-6 col-md-8 col-xl-12 title">
			<p class="card-text"><?php the_field('title_index', options); ?></p>
			<h5 class="col-md-4 col-lg-6 col-xl-6"><?php the_field('title_index_h1', options); ?></h5>
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
				<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><img src="<?php the_field('img_title', options); ?>" alt=""><span><?php the_field('title_slider_1', options); ?></span></a>
			</li>
			<li class="nav-item border-line col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><img src="<?php the_field('img_title_2', options);
					?>" alt=""><?php the_field('title_slider_2', options); ?></a>
			</li>
			<li class="nav-item col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><img src="<?php the_field('img_title_3', options); ?>" alt=""><?php  the_field('title_slider_3', options); ?></a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

				<div class="row no-gutters">

					<div class="col-md-6">
						<div class="card-body">
							<h2 class="card-title"><?php the_field('slider_1', options); ?></h2>
							<p class="card-text-2"><?php the_field('card', options); ?></p>
							<button type="button" class="btn btn-outline-primary">Деталі</button>
						</div>
					</div>
					<div class="col-md-2">
						<img src="<?php the_field('img_title_4', options);
					?>" class="card-img tabs_img" alt="...">
					</div>
				</div>

			</div>
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<div class="row no-gutters">

					<div class="col-md-6">
						<div class="card-body">
							<h2 class="card-title"><?php the_field('slider_2', options); ?></h2>
							<p class="card-text-2"><?php the_field('card_2', options); ?></p>
							<button type="button" class="btn btn-outline-primary">Деталі</button>
						</div>
					</div>
					<div class="col-md-2">
						<img src="<?php the_field('img_title_5', options);
					?>" class="card-img tabs_img" alt="...">
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
				<div class="row no-gutters">

					<div class="col-md-6">
						<div class="card-body">
							<h2 class="card-title"><?php the_field('slider_3', options); ?></h2>
							<p class="card-text-2"><?php the_field('card_3', options); ?></p>
							<button type="button" class="btn btn-outline-primary">Деталі</button>
						</div>
					</div>
					<div class="col-md-2">
						<img src="<?php the_field('img_title_6', options);
					?>" class="card-img tabs_img" alt="...">
					</div>
				</div>
			</div>
		</div>
	</article>

<?php get_footer(); ?>
