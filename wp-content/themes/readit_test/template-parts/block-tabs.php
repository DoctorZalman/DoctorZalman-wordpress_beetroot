<?php
/**
 * tabs block
 *
**/
$title = get_field( 'about-tabs-title' );
$subtitle = get_field( 'about-tabs-subtitle' );


echo '<div class="tabs">';
    echo '<div class="tabs--header">';
        if( !empty( $title ) )
            echo '<h4>' . esc_html( $title ) . '</h4>';
        if( !empty( $subtitle ) )
            echo '<h6 class="alt">' . esc_html( $subtitle ) . '</h6>';
    echo '</div>';
echo '</div>';