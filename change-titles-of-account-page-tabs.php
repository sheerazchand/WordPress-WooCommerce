<?php

function my_account_order_title() {
    $newtaborder = array(
        'learner-profile'    => __( 'Profile', 'woocommerce' ),
        //'dashboard'          => __( 'Dashboard', 'woocommerce' ),
        'orders'             => __( 'Previous Orders', 'woocommerce' ),
        'edit-address'       => __( 'Addresses', 'woocommerce' ),
        'payment-methods'       => __( 'Payment Methods', 'woocommerce' ),
        //'edit-account'       => __( 'Account Details', 'woocommerce' ),
        'customer-logout'    => __( 'Logout', 'woocommerce' ),
    );
    return $newtaborder;
}
add_filter ( 'woocommerce_account_menu_items', 'my_account_order_title' );
