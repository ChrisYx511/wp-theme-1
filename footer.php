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
<p>Copyright (C) 2020 Notion Corporation, a member of Easytime Group, and Chris Yang. The theme of this website is
    licensed under the terms of the GNU GPL version 3 or later.</p>
</body>
</html>
