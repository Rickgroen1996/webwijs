			<!-- footer -->
			
			<footer class="page-footer">
		          <div class="container">
		            <div class="row">
		              <div class="col l4 s12">
		                <h5 class="white-text">Links</h5>
		                <ul class="footer-links">
		                 <?php wp_list_pages('title_li='); ?>
		                </ul>
		              </div>
		              <div class="col l4 offset-l2 s12">
		                <h5 class="white-text">Links</h5>
		                <ul class="footer-links">
		                 <?php wp_list_categories('title_li='); ?>
		                </ul>
		              </div>
		            </div>
		          </div>
		          <div class="footer-copyright">
		            <div class="container">
		            <?php echo "&copy; Webwijs " . date('Y'); ?>
		            
		            </div>
		          </div>
        </footer>
            
			<!-- /footer -->
			</div>
		</div>
		<!-- /wrapper -->
		<script>

		function menuToggle(){
			document.getElementById('slide-out').style.left = '0';
			document.getElementById('overlay').style.display = 'block';
		}
		function menuHide(){
			document.getElementById('slide-out').style.left = '-250px';
			document.getElementById('overlay').style.display = 'none';
		}
		
</script>
		<?php wp_footer(); ?>
	</body>
	
</html>
