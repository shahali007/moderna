<?php get_header();?>
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="#"><?php the_title();?></a><i class="icon-angle-right"></i></li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	
	<section id="content">
	<div class="container">
		<!-- Descriptions -->
		<div class="row">
			<div class="col-md-12">
				<div class="internal-content">
					<?php if(have_posts()) : ?>
						<?php while (have_posts()) : the_post();?>
							<h2><?php the_title();?></h2>
							<?php the_content();?>
						<?php endwhile;?>
					<?php else : ?>
						<h2>404! not found.</h2>
					<?php endif; ?>
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
		
		
		
		
	</div>
	</section>
<?php get_footer();?>