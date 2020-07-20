<?php get_header(); ?>


<div class="container d-flex justify-content-center">
<?php
    //affiche les posts
    while( have_posts()) {
        //keep track on which post we re working with
        the_post();
        
    ?>
        
<div class="card" style="width: 30rem;">
    <div class="card-body">
        <h2><?php the_title() ?></h2><p>Posted by <?php the_author(); ?> in <a href=""><?php echo get_the_category_list(',') ?></a></p>    
        <a href="<?php echo the_permalink(); ?>"><img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="image card"></a>
        <i class="heart fa fa-heart-o"></i>    
        <p class="card-text"><?php the_content(); ?></p> </br>
    </div>
    <?php comment_form() ?>          
</div>
       
        <?php
    }
?>
</div>

<?php get_footer(); ?>