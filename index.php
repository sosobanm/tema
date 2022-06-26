<?php get_header(); ?>
	
<div class="row">
	<div class="col-md-12">
		<nav class="navbar navbar-defalt" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation </span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<?php
				wp_nav_menu( array(
				'theme_location'	=> 'header-menu',
				'depth'				=> 2,
				'container'			=> 'div',
				'container_class'	=> 'collapse navbar-collapse',
				'container_id'		=> 'bs-example-navbar-collapse-1',
				'menu_class'		=> 'nav navbar-nav',
				'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
				'walker' 			=> new WP_Bootstrap_Navwalker(),

				) );
			?>
		</nav>
	</div>
</div>



	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h2>Seja bem vindo ao meu novo tema</h2>
			</div>
		</div>
	</div>
<div class="row">
	<?php 
	$cont = 0;
		if ( have_posts()) {
			while (have_posts()) {
				the_post();
				$cont++;
			if($cont <= 3)
			}
		}
	?>

	<div class="col-md-4">
		<h3><?php the_title(); ?></h3>
		<div class="img-responsive img-thumbnail foto"><?php the_post_thumbnail(); ?> </div>
		<p><?php the_excerpt(); ?></p>
		<a class="btn btn-primary" href="<?php the_permalink(); ?>">Leia mais</a>
	</div>

</div>
<?php get_footer(); ?>