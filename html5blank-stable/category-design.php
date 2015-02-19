<?php
/*
* Category Template: Design
*/
?>
<!-- Get header, is eigenlijk de balk aan de zijkant -->
<?php get_header(); ?> 
<main role="main">
	<div class="content">
		<nav class="nav" role="navigation">
			<div class="menu-button">
				<a href="#" onclick="menuToggle()">Menu</a>  
			</div>
			<!-- Navigation rechtboven -->
			<?php wp_nav_menu(); ?>
		</nav>
		<!-- section -->
		<section>

			<h1><?php _e(''); single_cat_title(); ?></h1>

			<?php //get_template_part('loop'); ?>
			<p><?php query_posts('cat=3');
while (have_posts()) : the_post();
the_content();
endwhile; ?></p>
			

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>



?>