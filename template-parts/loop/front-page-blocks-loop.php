<?php
if( have_rows('front_page_blocks') ):
    while ( have_rows('front_page_blocks') ) : the_row();
        get_template_part('template-parts/acf-blocks/front-page/'.get_row_layout());
    endwhile;

else :

endif;