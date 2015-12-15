<?php
/**
 * Shop breadcrumb
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 * @see         woocommerce_breadcrumb()
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="enigma_header_breadcrum_product_title ">	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php if(is_home()){echo "";}else{the_title();} ?></h1>
				<!-- BreadCrumb -->
                <?php if ( ! empty( $breadcrumb ) ) {

						echo $wrap_before;

						foreach ( $breadcrumb as $key => $crumb ) {

							echo $before;

							if ( ! empty( $crumb[1] ) && sizeof( $breadcrumb ) !== $key + 1 ) {
								echo '<a href="' . esc_url( $crumb[1] ) . '">' . esc_html( $crumb[0] ) . '</a>';
							} else {
								echo esc_html( $crumb[0] );
							}

							echo $after;

							if ( sizeof( $breadcrumb ) !== $key + 1 ) {
								echo $delimiter;
							}

						}

						echo $wrap_after;

					} ?>
                <!-- BreadCrumb -->
			</div>
		</div>
	</div>	
</div>