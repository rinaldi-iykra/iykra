<?php
/**
 * Simple product add to cart (customized with TailwindCSS)
 *
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product->is_purchasable() ) {
    return;
}

?>

<div class="">
    <?php
    // Stock status
    if ( $product->is_in_stock() ) : ?>
        <form class="cart flex flex-col gap-4" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype="multipart/form-data">
            <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
            <div class="space-x-1 lg:space-x-4 flex">
                <?php
                    do_action( 'woocommerce_before_add_to_cart_quantity' );
                    woocommerce_quantity_input(
                        array(
                            'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
                            'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
                            'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // phpcs:ignore WordPress.Security.NonceVerification.Missing
                            'classes'     => 'w-24 iykra-gs block rounded-md border-0 px-4 py-2 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-blue-900 sm:text-sm text-base',
                        )
                    );
                    do_action( 'woocommerce_after_add_to_cart_quantity' );
                ?>
                <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="btn-primary text-gs text-sm lg:text-base rounded-full px-4 lg:px-8 py-2">
                    Beli Sekarang
                </button>
            </div>
            <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
        </form>
    <?php else : ?>
        <p class="text-red-600 font-medium"><?php esc_html_e( 'This product is currently out of stock.', 'woocommerce' ); ?></p>
    <?php endif; ?>
    <p class="divider gray"></p>
</div>
