<?php get_header(); ?>
<?php
    //affiche les posts
    while(have_posts()) {
        //keep track on which post we re working with
        the_post(); ?>
       

        <?php the_content(); ?>

        <?php
    }
?>
<?php get_footer(); ?>