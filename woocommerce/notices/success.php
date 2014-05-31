<?php
/**
 * Show messages
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! $messages ) return;
?>
<div class="woocommerce-error">
    <?php foreach ( $messages as $message ) : ?>
        <div class="alert alert-success alert-dismisable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo wp_kses_post( $message ); ?>
        </div>
    <?php endforeach; ?>
</div>