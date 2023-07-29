<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<?php

    $args = wp_parse_args($args, [
        'wfPage' => '627f24352095ef361eca6b35',
        'head' => 'head/front-page',
        'body' => ''
    ]);

?>
<html data-wf-page="<?php echo $args['wfPage'] ?>" data-wf-site="627f24352095ef8238ca6b31" <?php language_attributes(); ?>><head><?php get_template_part( 'template-parts/' . $args['head'] );  ?><?php wp_enqueue_script('jquery'); wp_head(); ?></head><body data-scroll-time="1.5" <?php body_class($args["body"]); ?>>
<?php wp_body_open(); ?>
 