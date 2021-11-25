<?php
    function my_excerpt( $length){
        return 55;
    }
    add_filter( 'excerpt_length', 'my_excerpt', 99 );

    function wpdocs_excerpt_more( $more ) {
        return sprintf( '<a href="%1$s" class="blog-read-more">%2$s</a>',
              esc_url( get_permalink( get_the_ID() ) ),
              sprintf( __( 'Consulte Mais Informações', 'wpdocs' ) )
        );
    }
    add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
    ?>
