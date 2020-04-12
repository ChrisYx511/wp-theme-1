<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name', 'raw')?></title>

    <?php wp_head();?>
    <div class=custom-logo> 
        <?php the_custom_logo()?>
    </div>
</head>
<body>
    
