			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="cf">
					<?php if (is_front_page()):?>
						<div id="sidebar1" class="sidebar-home cf" role="complementary">
					<?php else : ?>
						<div id="sidebar1" class="sidebar-interior cf" role="complementary">
					<?php endif; ?>	
				
						<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
							<?php dynamic_sidebar( 'sidebar1' ); ?>
						<?php else : ?>
							<?php
								/*
								 * This content shows up if there are no widgets defined in the backend.
								*/
							?>
							<div class="no-widgets">
								<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
							</div>
						<?php endif; ?>
					</div>

					<div class="source-org copyright">
						<div>
							<p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
							<p>The information on this website has not been evaluated by the FDA and is not intended to diagnose, treat, prevent or cure any disease.</p>
						</div>
					</div>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

		<script type="text/javascript">
			$( ".print-coupon" ).click(function(e) {
				e.preventDefault();
				window.print();
			});

		</script>

	</body>

</html> <!-- end of site. what a ride! -->
