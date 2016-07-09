<?php get_header();?>

	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              
			  <?php query_posts(array(
				'post_type' => 'slide',
				'post_per_page' => 3,
			  )); ?>
			  <?php while(have_posts()) : the_post(); ?>
				  <li>
					<?php the_post_thumbnail('slide-image');?>
					<div class="flex-caption">
						<h3><?php the_title(); ?></h3> 
						<?php the_excerpt(); ?>
						<a href="#" class="btn btn-theme">Learn More</a>
					</div>
				  </li>
			  <?php endwhile; ?>
			  <?php wp_reset_query(); ?>
             
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
	
	

	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>Moderna</span> HTML Business Template</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Fully responsive</h4>
								<div class="icon">
								<i class="fa fa-desktop fa-3x"></i>
								</div>
								<p>
								 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="#">Learn more</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Modern Style</h4>
								<div class="icon">
								<i class="fa fa-pagelines fa-3x"></i>
								</div>
								<p>
								 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="#">Learn more</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Customizable</h4>
								<div class="icon">
								<i class="fa fa-edit fa-3x"></i>
								</div>
								<p>
								 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="#">Learn more</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Valid HTML5</h4>
								<div class="icon">
								<i class="fa fa-code fa-3x"></i>
								</div>
								<p>
								 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="#">Learn more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Portfolio Projects -->
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Recent Works</h4>
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Project and Filter Name -->
						<li class="col-lg-3 design" data-id="id-0" data-type="web">
						<div class="item-thumbs">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 1" href="<?php echo get_template_directory_uri();?>/img/works/1.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="<?php echo get_template_directory_uri();?>/img/works/1.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</div>
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 2" href="<?php echo get_template_directory_uri();?>/img/works/2.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="<?php echo get_template_directory_uri();?>/img/works/2.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 3" href="<?php echo get_template_directory_uri();?>/img/works/3.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="<?php echo get_template_directory_uri();?>/img/works/3.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 4" href="<?php echo get_template_directory_uri();?>/img/works/4.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="<?php echo get_template_directory_uri();?>/img/works/4.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>
						<!-- End Item Project -->
					</ul>
					</section>
				</div>
			</div>
		</div>

	</div>
	</section>

<?php get_footer();?>