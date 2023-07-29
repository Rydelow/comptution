<?php


$args = [
    'wfPage' => '627f24352095efcb7eca6b37',
    'body' => '',
    'head' => 'head/404',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('404');
}
     
get_header('', $args);

udesly_get_content_template( '404' );

$args = [
  'footer' => 'footer/404',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('404');
}

get_footer('', $args);
