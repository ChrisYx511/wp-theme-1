<?php

/*
Template Name: Search
*/
?>
<?php get_header();?>


<div class="rectangle">
<section class="page-wrap">
    <div class='container'>

         <h1><?php the_title()?></h1>
            <div class='wp-content'>
                <?php get_template_part('includes/section', 'content');?>
            </div>
         <?php get_search_form();?>
     </div>
</section>
</div>

<?php get_footer();?>