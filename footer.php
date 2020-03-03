<?php wp_footer();?>

<section class=menu-wrap>

    <div class=footer-menu>
        <?php
            wp_nav_menu(
                array(
                'theme_location' => 'bottom-menu',
                'menu_class' => 'bottom-menu-bar'
                )

             );
        ?>

     </div>
</section>
</body>
</html>