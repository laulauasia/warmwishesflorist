<?php
/**
 * Plugin Name: senangPay
 * Plugin URI: http://senangpay.my
 * Description: Enable online payments using credit or debit cards and online banking. Currently senangPay service is only available to businesses that reside in Malaysia.
 * Version: 3.1.2
 * Author: senangPay
 * Author URI: http://senangpay.my
 * WC requires at least: 2.6.0
 * WC tested up to: 4.4.1
 **/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

# Include senangPay Class and register Payment Gateway with WooCommerce
add_action( 'plugins_loaded', 'senangpay_init', 0 );

function senangpay_init() {
	if ( ! class_exists( 'WC_Payment_Gateway' ) ) {
		return;
	}

	include_once( 'src/senangpay.php' );

	add_filter( 'woocommerce_payment_gateways', 'add_senangpay_to_woocommerce' );
	function add_senangpay_to_woocommerce( $methods ) {
		$methods[] = 'senangPay';

		return $methods;
	}
}

# Add custom action links
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'senangpay_links' );

function senangpay_links( $links ) {
	$plugin_links = array(
		'<a href="' . admin_url( 'admin.php?page=wc-settings&tab=checkout&section=senangpay' ) . '">' . __( 'Settings', 'senangpay' ) . '</a>',
	);

	# Merge our new link with the default ones
	return array_merge( $plugin_links, $links );
}

add_action( 'init', 'senangpay_check_response', 15 );

function senangpay_check_response() {
	# If the parent WC_Payment_Gateway class doesn't exist it means WooCommerce is not installed on the site, so do nothing
	if ( ! class_exists( 'WC_Payment_Gateway' ) ) {
		return;
	}

	include_once( 'src/senangpay.php' );

	$senangpay = new senangpay();
	$senangpay->check_senangpay_response();
}

function senangpay_hash_error_msg( $content ) {
	return '<div class="woocommerce-error">The data that we received is invalid. Thank you.</div>' . $content;
}

function senangpay_payment_declined_msg( $content ) {
	return '<div class="woocommerce-error">The payment was declined. Please check with your bank. Thank you.</div>' . $content;
}

function senangpay_success_msg( $content ) {
	return '<div class="woocommerce-info">The payment was successful. Thank you.</div>' . $content;
}
