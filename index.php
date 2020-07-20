<!-- page qui affiche les post, ici en l'occurence la page blog -->
<?php get_header() ?>

<div class="container d-flex flex-row">
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
        
        ?>
</div>  

<?php get_footer() ?>