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
			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

				

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		</div>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>
<script>

function menuToggle(){
	document.getElementById('slide-out').style.left = '0';
	document.getElementById('overlay').style.display = 'block';
}

</script>
<?php get_footer(); ?>
