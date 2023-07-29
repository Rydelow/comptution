<?php


$args = [
    'wfPage' => '627f24352095efe78cca6b3b',
    'body' => '',
    'head' => 'head/404',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-terms-of-service');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-terms-of-service' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/404',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-terms-of-service');
}

get_footer('', $args);
