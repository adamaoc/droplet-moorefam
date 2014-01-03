<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <title><?php echo($page_title); ?></title>
        
        <?php echo($page_meta); ?>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>style.css">
        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>subdiv.css">
        
        <?php get_header(); ?>
    </head>

    <body>
        <div class="wrap">
            <header class="siteheader">
                <div class="headerwrap">
                    <?php if($is_home) { ?>
                    <div class="brand-wrap">
                        <h1 class="brand home"><?php echo($intro_title); ?></h1>
                        <span class="slogan"><?php echo($intro_text); ?></span>
                    </div>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    <?php }else{ ?>
                    <div class="brand-wrap inner">
                        <h1 class="brand"><?php echo($post_title); ?></h1>
                    </div>
                    <?php } ?>
                </div>
                
                <nav class="headernav">
                    <ul class="row">
                        <li><a href="/" <?php if($is_home) { echo 'class="active"'; } ?>>Home</a></li>
                        <li><a href="http://twitter.com/<?php echo($blog_twitter); ?>" target="_blank">&#64;<?php echo($blog_twitter); ?></a></li>
                    </ul>
                </nav>
            </header>
            <section class="content">
                <?php echo($content); ?>
            </section>
            
            
            <?php get_footer(); ?>
            
        </div><?php // closing wrap ?>
    </body>
</html>
