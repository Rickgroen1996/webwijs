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

		<?php wp_footer(); ?>
	</body>
	
</html>
