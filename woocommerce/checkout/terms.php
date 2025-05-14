<?php
/**
 * Checkout terms and conditions area.
 *
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

if ( apply_filters( 'woocommerce_checkout_show_terms', true ) && function_exists( 'wc_terms_and_conditions_checkbox_enabled' ) ) {
	do_action( 'woocommerce_checkout_before_terms_and_conditions' );

	?>
        <div class="woocommerce-terms-and-conditions-wrapper iykra-gs text-sm lg:text-base mb-8">
            <p class="iykra-gs text-sm lg:text-base">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a class="iykra-sg text-sm lg:text-base" href="/privacy-policy" target="_blank">privacy policy</a>.</p>

            <?php if ( wc_terms_and_conditions_checkbox_enabled() ) : ?>
                <p class="form-row validate-required">
                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                        <input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" name="terms" <?php checked( apply_filters( 'woocommerce_terms_is_checked_default', isset( $_POST['terms'] ) ), true ); // WPCS: input var ok, csrf ok. ?> id="terms" />
                        <span class="iykra-gs text-sm lg:text-base">I have read and agree to the website <a class="iykra-sg text-sm lg:text-base" href="/refund-return " target="_blank">terms and conditions</a></span>&nbsp;<abbr class="required" title="<?php esc_attr_e( 'required', 'woocommerce' ); ?>">*</abbr>
                    </label>
                    <input type="hidden" name="terms-field" value="1" />
                </p>
            <?php endif; ?>
        </div>
	<?php

	do_action( 'woocommerce_checkout_after_terms_and_conditions' );
}
