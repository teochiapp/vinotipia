<?php
function vinotipia_enqueue_manual_style() {
    $ngrok_url = 'https://0904-181-171-36-4.ngrok-free.app/wordpress/wp-content/themes/vinotipia/style.css';

    echo '<link rel="stylesheet" href="' . esc_url( $ngrok_url ) . '?ver=' . time() . '">';
}
add_action( 'wp_head', 'vinotipia_enqueue_manual_style' );
