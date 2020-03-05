<?php get_header();?>


<div class="rectangle"></div>
<section class="page-wrap">
    <div class='container'>

         <h1><?php the_title()?></h1>
            <div class='wp-content'>
                <?php get_template_part('includes/section', 'content');?>
            </div>
            
     </div>
</section>


<?php get_footer();?>