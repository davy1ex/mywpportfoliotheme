<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
</head>
<body>
    <a name="main">
        <div class="mynameis" style="background-image: url(<?php the_field( 'banner' ) ?>)">
            <div class="mynameis_wrapper">
                <div class="avatar">
                    <img src=<?php the_field( 'avatar' ) ?> alt="">
                    <!-- <img src=<?php the_field( 'avatar' ) ?> alt=""> -->
                </div>
                <!-- <div class="title">davy1ex</div> -->
                <div class="myname">Давыдов Алексей</div>
                <div class="profession">Веб разработчик</div>
            </div>
        </div>
    </a>

    <header id="header">
        <div class="header_wrapper">
            <!-- <div class="header_item active"><a href="#main">Главная</a></div>
            <a href="#about_me"><div class="header_item">Обо мне</div></a> -->
            <!-- <a href="#portfolio"><div class="header_item">Портфолио</div></a>
            <a href="#contacts"><div class="header_item">Контакты</div></a> -->


            <div class="header_item icon active"><a href="#main"><img class="header_img" src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/home.svg" alt=""><div class="header_text">Главная</div></a></div>
            <div class="header_item icon"><a href="#about_me"><img class="header_img" src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/info.svg" alt=""><div class="header_text">Обо мне</div></a></div>
            <div class="header_item icon"><a href="#portfolio"><img class="header_img" src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/portfolio.svg" alt=""><div class="header_text">Портфолио</div></a></div>
            <div class="header_item icon"><a href="#contacts"><img class="header_img" src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/email.svg" alt=""><div class="header_text">Контакты</div></a></div>
        </div>
    </header>
<?php wp_head(); ?>