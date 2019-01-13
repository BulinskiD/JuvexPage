<?php get_header(); ?>

	<div class="row">
		<div class="col-lg-4 col-0" style="z-index: -1"></div>
		<div class="col-lg-8 col-12 content text-justify">
		<div class="pagetitle"><h1 class="title"><?php the_title(); ?></h1></div>
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  				?>
  				<?php
					the_content();
  
				endwhile; endif; 
			?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->
</div> <!-- /.container-fluid -->

<?php get_footer(); ?>