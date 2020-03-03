<?php get_header();?>


<div class="rectangle"></div>
<section class="page-wrap">
    <div class='container'>
        <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail();?>" alt="<?php the_title()?>" class="img-fluid mb3 img-thumbnail"> 
        <?php endif;?>
         <h1><?php the_title()?></h1>
            <div class='wp-content'>
                <?php get_template_part('includes/section', 'blogcontent');?>
            </div>
            <?php wp_link_pages();?>
     </div>
</section>


<?php get_footer();?>