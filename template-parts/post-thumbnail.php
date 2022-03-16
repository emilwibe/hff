<?php
    if (has_post_thumbnail()) {
        $attachment_id = get_post_thumbnail_id();
        $img_src = wp_get_attachment_image_url( $attachment_id, 'full');
        $img_srcset = wp_get_attachment_image_srcset( $attachment_id, 'medium' );

        the_post_thumbnail( 'full', ['class' => 'fade-in-on-load', 'onclick' => 'loadImageonLoad (this)'] );
    }