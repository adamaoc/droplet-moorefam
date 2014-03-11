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
                <div class="headerbg" style="background-image: url(<?php echo($blog_bgphoto); ?>);"></div>
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
            
            <footer class="sitefooter">
                <a href="http://mediatemple.net#a_aid=512fd1cf8a22a&amp;a_bid=e89e2468" target="_top" rel="nofollow"><img src="https://affiliate.mediatemple.net/accounts/default1/banners/468x60-light.gif" alt="" width="468" height="60" /></a><img style="border:0" src="https://affiliate.mediatemple.net/scripts/imp.php?a_aid=512fd1cf8a22a&amp;a_bid=e89e2468" width="1" height="1" alt="" />
                <p><em>all rights reserved @copy;2014 - designed and developed by <a href="http://ampnetmedia.com">ampnet(media)</a> Dallas, Texas.</em></p>
            </footer>
            
            <?php get_footer(); ?>
            
        </div><?php // closing wrap ?>
    </body>
</html>
