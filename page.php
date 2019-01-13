<?php get_header(); ?>

	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-8 content">

			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  				?>
  				<h1 hidden="hidden"><?php the_title(); ?></h1>
  				<?php
					the_content();
  
				endwhile; endif; 
			?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->
</div> <!-- /.container-fluid -->

<?php get_footer(); ?>