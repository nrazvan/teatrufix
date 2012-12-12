			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="wrap clearfix">
					<div class="footer-widget-area">
						<?php if ( dynamic_sidebar('sidebar3') ) : else : ?>
						<?php endif; ?>	
					</div>
					<div class="footer-widget-area">
						<?php if ( dynamic_sidebar('sidebar4') ) : else : ?>
						<?php endif; ?>	
					</div>
					<div class="footer-widget-area">
						<?php if ( dynamic_sidebar('sidebar5') ) : else : ?>
						<?php endif; ?>	
					</div>
					<div class="footer-widget-area copyright">
						<p>&copy; <?php echo date("Y"); ?> <a href="<?php echo home_url(); ?>" title="<?php esc_attr_e( 'Primul teatru independent din Iasi' ); ?>" ><?php printf('Teatrufix.ro' ); ?></a> </p>
						<p class="bigger">Powered by <a href="<?php echo esc_url( __( 'http://reea.net' ) ); ?>" title="<?php esc_attr_e( 'Pitstop.WebAgency' ); ?>" ><?php printf('REEA' ); ?></a> </p>
						<p>Runs on <a href="<?php echo esc_url( __( 'http://wordpress.org' ) ); ?>"><?php printf( 'Wordpress' ); ?></a> </p>
					</div>               		
				
				</div> <!-- end #inner-footer -->
				<div class="warning"><p>Toate drepturile asupra continutului prezentat pe aces site apartin teatrufix.ro. Distribuirea fara acordul teatrufix.ro este interzisa.</p|</div>
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->