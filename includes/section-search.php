<?php if( have_posts() ): while( have_posts() ): the_post();?>
    <div class="card">
        <div class="card-body">
            <h3><?php the_title();?></h3>
            <?php the_excerpt();?>
            <a href="<?php the_permalink()?>" class="btn btn-primary">Read More</a>
        </div>
    </div>
<?php endwhile; else:?>
    <h4>No results found for <?php the_search_query();?></h4>
<?php endif;?>

