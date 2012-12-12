		<div id="footer">
			<div class="footer-widget-area-1">
				    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Post Widget') ) : ?><?php endif; ?>
			</div>

			<div class="footer-credits">
				<p>&copy; <?php echo date("Y"); ?> <a href="<?php echo home_url(); ?>" title="<?php esc_attr_e( 'Primul teatru independent din Iasi' ); ?>" ><?php printf('Teatrufix.ro' ); ?></a> </p>
				<p class="bigger"> Powered by<a href="<?php echo esc_url( __( 'http://reea.net' ) ); ?>" title="<?php esc_attr_e( 'Pitstop.WebAgency' ); ?>" ><?php printf('REEA' ); ?></a> </p>
				<p>Runs on <a href="<?php echo esc_url( __( 'http://wordpress.org' ) ); ?>"><?php printf( 'Wordpress' ); ?></a> </p>
			</div>
			<div class="footer-warning">
				<p>Toate drepturile asupra continutului prezentat pe aces site apartin teatrufix.ro. Distribuirea fara acordul teatrufix.ro este interzisa. </p>
			</div>
		</div>
	</div> <!--end of main content -->
</body>
</html>