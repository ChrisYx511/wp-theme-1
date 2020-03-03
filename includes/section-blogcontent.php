<?php 
 if( have_posts() ): while( have_posts() ): the_post();
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');?>
    <h4> Posted By <?php echo $fname;?> <?php echo $lname;?></h4>
    <h5><?php echo get_the_date('jS');?> of <?php echo get_the_date('M Y');?> at <?php echo get_the_date('H:i (e)');?></h5>
    <?php the_content();
    
    
    $tags = get_the_tags();
        // Check if $myList is indeed an array or an object.
        if (is_array($tags) || is_object($tags))
        {
        // If yes, then foreach() will iterate over it.
        foreach($tags as $tag):?>
            
            <a href="<?php echo get_tag_link($tag->term_id);?>" class="badge badge-success">
                <?php echo $tag->name;?>
            </a>
        <?php endforeach;
        
        }
        else // If $myList was not an array, then this block is executed. 
        {
        echo ' ';
        }

    
    
    comments_template();
 endwhile; else:?>
        <h4> Nothing here!</h4>
    
    <?php endif;?>
    
