<?php


add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 4; // 3 products per row
	}
}

// add BRL to WooCommerce
add_filter( 'woocommerce_currencies', 'add_brl_currency' );
function add_brl_currency( $currencies ) {
     $currencies['ZAR'] = __( 'South African Rand', 'woocommerce' );
     return $currencies;
}
add_filter('woocommerce_currency_symbol', 'add_brl_currency_symbol', 10, 2);
function add_brl_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'ZAR': $currency_symbol = 'R'; break;
     }
     return $currency_symbol;
}
// allow BRL for WooCommerce
add_filter( 'woocommerce_paypal_supported_currencies', 'paypal_brl_current' );
function paypal_brl_current($currency_array) {
	$currency_array[] = 'ZAR';
	return $currency_array;
}



?>