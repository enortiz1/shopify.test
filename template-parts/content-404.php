<?php 
$error_builder = onum_get_option('page_404');

if( !onum_get_option('custom_404') ) { ?>
<div class="container">
    <div class="error-404 not-found text-center">
		<h2>404 <img class="error-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/404.png" alt="404"></h2>
        <h1><?php wp_kses( _e( 'Sorry! Page Not Found!', 'onum' ), wp_kses_allowed_html('post')  ); ?></h1>
        <div class="content-404">
            <p><?php wp_kses( _e( 'Oops! The page you are looking for does not exist. Please return to the site is homepage.', 'onum' ), wp_kses_allowed_html('post')  ); ?></p>
            <?php get_search_form(); ?>
            <a class="octf-btn octf-btn-third octf-btn-icon" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Take Me Home', 'onum' ); ?><i class="flaticon-right-arrow-1"></i></a>
        </div>
    </div>
</div>
<?php
}else{
	if ( did_action( 'elementor/loaded' ) ) {               
		echo \Elementor\Plugin::$instance->frontend->get_builder_content( $error_builder ); 
	}
}