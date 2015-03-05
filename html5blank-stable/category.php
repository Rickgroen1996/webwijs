<?php
/*
* Category Template: Responsive Design
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
		<section class="content-block">
			<div id="post-nav">
			<?php
				$i = 0;
				$query1 = new WP_Query('cat=1&orderby=date&order=ASC');
				while ( $query1->have_posts() ) {
					$i++;
					$query1->the_post();
	 		?>
				
		        <a id="post-link<?php echo $i; ?>" class="btn" href="#">
		        	<li >
		            	<?php the_title();  ?>
					</li>
		        </a>                
	 
	        <?php 
	        	} 
	        ?>
	        </div>
						
			<h1><?php _e(''); single_cat_title(); ?></h1>

			<p>
			<?php 
				$query1 = new WP_Query('cat=1&orderby=date&order=ASC');
				$i = 0;
				while ( $query1->have_posts() ) {
					$i++;
					$query1->the_post();
				?>
					<div id="post-container<?php echo $i; ?>" class="post-container">
						<h3><?php the_title(); ?></h3>
						<?php
							the_content(); 
						?>
					</div>
			
			<?php
} ?></p>
			

		</section>
		<!-- /section -->
	</main>
	 <?php
		   while ($i > 0){
		       echo "<script>
				
				$(function(){
				    $('#post-link".$i."').click(function() {
					    $('html, body').animate({
					        scrollTop: $('#post-container".$i."').offset().top
					    }, 800);
    					return false;
					});
				});

";
		        $i--;
		        echo '</script>';
		    }
		    
		?> 
		<script>
		$(document).ready(function(){
			var navHeight = $("#post-nav").height();
			$('.content-block > h1').css('margin-top', navHeight+25 + "px");
			$(window).resize(function(){
				var navHeight = $("#post-nav").height();
				$('.content-block > h1').css('margin-top', navHeight+25 + "px");
			});
		});
		/*var target = $(".content-block").offset().top,
   		timeout = null;

		$(window).scroll(function () {
    		if (!timeout) {
        		timeout = setTimeout(function () {
		            console.log('scroll');            
		            clearTimeout(timeout);
		            timeout = null;
	            	if ($(window).scrollTop() >= target) {
	                	var scrollPosition = $(this).scrollTop();
						$('#post-nav').css('position', 'absolute');
    					$('#post-nav').css('margin-top', scrollPosition-63 + "px");
	            	}
        		}, 1);
    		}
		});*/
		</script>

<?php get_footer(); ?>
