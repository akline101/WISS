<ul class="et-social-icons">

<?php if ( 'on' === et_get_option( 'divi_show_facebook_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-facebook">
		<a href="<?php echo esc_url( et_get_option( 'divi_facebook_url', '#' ) ); ?>" class="icon">
			<span><?php esc_html_e( 'Facebook', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>
<?php if ( 'on' === et_get_option( 'divi_show_twitter_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-twitter">
		<a href="<?php echo esc_url( et_get_option( 'divi_twitter_url', '#' ) ); ?>" class="icon">
			<span><?php esc_html_e( 'Twitter', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>
<?php if ( 'on' === et_get_option( 'divi_show_google_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-google-plus">
		<a href="<?php echo esc_url( et_get_option( 'divi_google_url', '#' ) ); ?>" class="icon">
			<span><?php esc_html_e( 'Google', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>
	<li class="et-social-icon et-social-instagram">
		<a href="https://www.instagram.com/wissshanghai/?hl=en" class="icon">
			<span><?php esc_html_e( 'Instagram', 'Divi' ); ?></span>
		</a>
	</li>
	<li><a href="http://www.wiss.cn/wp-content/uploads/sites/3/2017/06/qrcode_for_gh_557bee0a1fe9_344-2.jpg" class="et_pb_lightbox_image" title="Scan this code to follow us on WeChat">
		<span> <i class="fa fa-wechat fa-lg" aria-hidden="true"><img src="http://www.wiss.cn/wp-content/uploads/sites/3/2017/06/qrcode_for_gh_557bee0a1fe9_344-2.jpg" title="WISS Wechat Account" alt="WISS Wechat QR" style="display:none;"></i></span>
	</a></li>
<?php if ( 'on' === et_get_option( 'divi_show_rss_icon', 'on' ) ) : ?>
<?php
	$et_rss_url = '' !== et_get_option( 'divi_rss_url' )
		? et_get_option( 'divi_rss_url' )
		: get_bloginfo( 'rss2_url' );
?>
	<li class="et-social-icon et-social-rss">
		<a href="<?php echo esc_url( $et_rss_url ); ?>" class="icon">
			<span><?php esc_html_e( 'RSS', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>

</ul>