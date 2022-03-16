<?php
    if (has_post_thumbnail()) {
        $attachment_id = get_post_thumbnail_id();
        $img_src = wp_get_attachment_image_url( $attachment_id, 'full');
        $img_srcset = wp_get_attachment_image_srcset( $attachment_id, 'medium' );
?>
        <img src="<?php echo esc_url( $img_src ); ?>" srcset="<?php echo esc_attr( $img_srcset ); ?>" sizes="(max-width: 50em) 87vw, 680px" alt="Foo Bar">