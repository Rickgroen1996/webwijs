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

			<!--<h1><?php _e( 'Categorie ', 'html5blank' ); single_cat_title(); ?></h1>-->

			<?php get_template_part('loop'); ?>
			<p><?php the_content(); ?></p>
			

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
<script>

function menuToggle(){
	document.getElementById('slide-out').style.left = '0';
	document.getElementById('overlay').style.display = 'block';
}

</script>

