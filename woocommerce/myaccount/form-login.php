<?php
/**
 * Login Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<?php wc_print_notices(); ?>

<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

<div class="col2-set" id="customer_login">

	<div class="col-1">

<?php endif; ?>

		<h2><?php _e( 'Login', 'woocommerce' ); ?></h2>

		<form method="post" class="login form-horizontal">

			<?php do_action( 'woocommerce_login_form_start' ); ?>
            <div class="form-group">
                <label for="username" class="col-sm-4"><?php _e( 'Username or email address', 'woocommerce' ); ?> <span class="required">*</span></label>
                <div class="col-sm-8">
                    <input type="text" class="input-text form-control" name="username" id="username" />
                </div>
            </div>
			<div class="form-group">
				<label for="password" class="col-sm-4"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
				<div class="col-sm-8">
                    <input class="input-text form-control" type="password" name="password" id="password" />
                </div>
			</div>

			<?php do_action( 'woocommerce_login_form' ); ?>

			<p class="form-row">
				<?php wp_nonce_field( 'woocommerce-login' ); ?>
				<label for="rememberme" class="inline">
                    <input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <?php _e( 'Remember me', 'woocommerce' ); ?>
                </label>
            </p>
            <input type="submit" class="button btn btn-primary" name="login" value="<?php _e( 'Login', 'woocommerce' ); ?>" />
            <p class="lost_password">
				<a href="<?php echo esc_url( wc_lostpassword_url() ); ?>"><?php _e( 'Lost your password?', 'woocommerce' ); ?></a>
			</p>

			<?php do_action( 'woocommerce_login_form_end' ); ?>

		</form>

<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

	</div>

	<div class="col-2">

		<h2><?php _e( 'Register', 'woocommerce' ); ?></h2>

		<form method="post" class="register form-horizontal">

			<?php do_action( 'woocommerce_register_form_start' ); ?>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

				<div class="form-row form-row-wide form-group">
					<label for="reg_username" class="col-sm-4"><?php _e( 'Username', 'woocommerce' ); ?> <span class="required">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" class="input-text form-control" name="username" id="reg_username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
                    </div>
				</div>

			<?php endif; ?>

			<div class="form-group">
				<label for="reg_email" class="col-sm-4"><?php _e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label>
                <div class="col-sm-8">
                    <input type="email" class="input-text form-control" name="email" id="reg_email" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>" />
                </div>
			</div>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
            <div class="form-group">
                 <label for="reg_password" class="col-sm-4"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
                <div class="col-sm-8">
                    <input type="password" class="input-text form-control" name="password" id="reg_password" value="<?php if ( ! empty( $_POST['password'] ) ) echo esc_attr( $_POST['password'] ); ?>" />
                </div>
            </div>

			<?php endif; ?>

			<!-- Spam Trap -->
			<div style="left:-999em; position:absolute;"><label for="trap"><?php _e( 'Anti-spam', 'woocommerce' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>

			<?php do_action( 'woocommerce_register_form' ); ?>
			<?php do_action( 'register_form' ); ?>

			<p class="form-row">
				<?php wp_nonce_field( 'woocommerce-register', 'register' ); ?>
				<input type="submit" class="button btn btn-primary" name="register" value="<?php _e( 'Register', 'woocommerce' ); ?>" />
			</p>

			<?php do_action( 'woocommerce_register_form_end' ); ?>

		</form>

	</div>

</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>