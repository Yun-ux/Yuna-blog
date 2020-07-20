<!-- HomePage template -->
<?php get_header(); ?>
<?php if(has_post_thumbnail()) : ?>
<?php endif;?>
<div class="bg">
    <h1>"Loveliest of trees, the cherry now Is hung with bloom along the bough."</h1>
</div>
<main class="container">  
<h2 class="section-heading">BLOGS</h2> 
       
<section>
    <!-- Normal Post -->
    <?php 
        $args = ([
            'post_type' => 'post',
            'posts_per_page' => 2
        ]);

        $blogposts = new WP_Query($args);

        while($blogposts->have_posts()){
            $blogposts->the_post();
            
        ?>
    <div class="card" style="width: 24rem;">
        <div class="card-body">
        <h2><?php the_title() ?></h2><p>Posted by <?php the_author(); ?> in <a href=""><?php echo get_the_category_list(',') ?></a></p>    
        <a href="<?php echo the_permalink(); ?>"><img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="image card"></a>
        <div>
        <i class="heart fa fa-heart-o"></i>
        </div>      
        <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20)?></p> </br>
        <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
        </div>          
    </div>



    <?php }
        wp_reset_query();
        ?>
    </section>
    <h2 class="section-heading">ANIMES</h2>
    <!-- anime post -->
    <section>
    <?php 
        $args = ([
            'post_type' => 'animes',
            'posts_per_page' => 2
        ]);

        $blogposts = new WP_Query($args);

        while($blogposts->have_posts()){
            $blogposts->the_post();
            
        ?>
    
    <div class="card" style="width: 24rem;">
        <div class="card-body">
        <h2><?php the_title() ?></h2><p>Posted by <?php the_author(); ?> in <a href=""><?php echo get_the_category_list(',') ?></a></p>    
        <a href="<?php echo the_permalink(); ?>"><img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="image card"></a>
        <div>
        <i class="heart fa fa-heart-o"></i>
        </div>      
        <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20)?></p> </br>
        <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
        </div>          
    </div>
    </div>
    <?php }
        wp_reset_query();
        ?>

    </section>
    <!-- manga posts -->
    <h2 class="section-heading">MANGAS</h2>
    <section>
    <?php 
        $args = ([
            'post_type' => 'mangas',
            'posts_per_page' => 2
        ]);

        $blogposts = new WP_Query($args);

        while($blogposts->have_posts()){
            $blogposts->the_post();
            
        ?>
    
    <div class="card" style="width: 24rem;">
        <div class="card-body">
        <h2><?php the_title() ?></h2><p>Posted by <?php the_author(); ?> in <a href=""><?php echo get_the_category_list(',') ?></a></p>    
        <a href="<?php echo the_permalink(); ?>"><img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="image card"></a>
        <div>
        <i class="heart fa fa-heart-o"></i>
        </div>     
        <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20)?></p> </br>
        <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
        </div>          
    </div>
    <?php }
        wp_reset_query();
        ?>
    </section>
    <div>
    <i id="top" class="fa fa-arrow-up" aria-hidden="true"></i>
    </div>
    

</div>
</main>



<?php get_footer(); ?>