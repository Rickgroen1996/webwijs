<!-- Get header, is eigenlijk de balk aan de zijkant -->
<?php get_header(); ?> 
<main role="main">
	<div class="content">
		<nav class="nav" role="navigation">
			<!-- Navigation rechtboven -->
			<?php wp_nav_menu(); ?>
		</nav>
		<!-- section -->
		<section>
			<!-- Posts ophalen -->
			<h1><?php echo get_bloginfo( 'name' ); ?></h1>
			<h3><?php echo bloginfo('description'); ?></h3>
			<?php // get_template_part('loop'); get_template_part('pagination'); ?>
		</section>
		<!-- /section -->
		</div>
	</main>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
