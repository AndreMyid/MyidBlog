
	<p id="footer-left" class="alignleft">
		<?php
		/**
		 * Filter the "Thank you" text displayed in the admin footer.
		 *
		 * @since 2.8.0
		 * @param string The content that will be printed.
		 */
		echo apply_filters( 'admin_footer_text', '<span id="footer-thankyou">' . __( 'Thank you for creating with <a href="http://andre.my.id">http://andre.my.id</a>.' ) . '</span>' );
		?>
	</p>
