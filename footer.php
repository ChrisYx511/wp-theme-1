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

<section class=copyright-wrap>
    <p>Copyright (C) 2020 <?php echo get_bloginfo('name', 'raw'); ?>. See<a href=/legal> Legal Stuff <a>for more information</p>
</section>

</body>
</html>
