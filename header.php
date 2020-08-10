<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name', 'raw')?></title>

    <?php wp_head();?>
    <div class=custom> 
        <div class=custom-logo>
            <?php the_custom_logo()?>
        </div>
        <div class=logo-line>
            <img alt=the-line src=<?php echo get_template_directory_uri()?>/images/line.svg></img>
        </div>
        <div class=custom-title>
            <div id=title-text>
            <h5><?php echo get_bloginfo('name', 'raw'); ?> </h5>
            <p><?php echo get_bloginfo('description', 'raw'); ?></p>
         </div>
        </div>
    </div>
</head>
<body>

