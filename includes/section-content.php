<?php 
 if( have_posts() ): while( have_posts() ): the_post();

    the_content(); 

 endwhile; else:?>
      <h4> Nothing here!</h4>
  
  <?php endif;?>
  

