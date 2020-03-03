<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('|', true, 'right'); ?> X-RAY THEMES</title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <nav>
    <a href="http://xraythemes.com/" class="logo">X-RAY</a>
    <div class="mobile-nav">
        <div class="slice"></div>
        <div class="slice"></div>
        <div class="slice"></div>
    </div>
    <?php wp_nav_menu(array('theme_location' => 'sticky_bar')); ?>
    </nav>
</header>
   