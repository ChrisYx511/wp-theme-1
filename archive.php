<?php get_header();?>


<div class="rectangle">
    <section class="page-wrap">
        <div class='container'>
                    <h1>All Posts</h1>
                    <?php get_template_part('includes/section', 'archive');?>
                    <div class='pagination'>
                        
                        <?php
                            function paginate() {
                            global $wp_query;

                            $big = 999999999999;

                            
                            echo get_the_posts_pagination(
                                array (
                                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                    'format' => '?paged=%#%',
                                    'current' => max(1, get_query_var('paged')),
                                    'total' => $wp_query->max_num_pages 
                                )
                            );
                            
                        }
                        paginate();
                        ?>
                    </div>
        </div>
    </section>
</div>


<?php get_footer();?>