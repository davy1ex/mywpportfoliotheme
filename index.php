<?php get_header();?>

<? $pages = get_pages(); 
foreach ($pages as $page_data) {
    $content = apply_filters('the_content', $page_data->post_content); 
    $title = $page_data->post_title; 
    echo 
    '<div class="container content desc">' . 
        '<div class="title">' .
            '<span class="line">' . $title . '</span>' .
        '</div>' .
        '<div class="text">' . 
            $content . 
        '</div>' .
    '</div>';
} ?>


<!-- <a name="about_me">
    <div class="container content desc">
        <div class="title">
            <span class="line">Обо мне</span>
        </div>

        <div class="text">
            Вы находитесь на моей странице портфолио. Тут можно найти информацию о моих услугах, опыте и проектах.
        </div>

        <div class="text">
            <br><strong>Специализация</strong>: Программирование сайтов-визиток / лендингов / сайтов под ключ / Web-сервисов. Адаптивная вёрстка. <br> <br>
            <strong>Опыт работы</strong>: более 2 лет. <br> <br>
            <strong>Используемые технологии</strong>: HTML, CSS, JavaScript (Vue.js, Node.js), PHP (Symfony), MySQL, AJAX, Python (Django, Flask).
        </div>
    </div>
</a> -->



<!-- <a name="contacts">
    <div class="container desc contacts">
        <div class="title">
            <span class="line">Контакты</span>

            <div class="text">
                <a href="https://vk.com/richlex">VK</a> <br>
                <a href="vk.com/richlex">MAIL: dezy1ex@gmail.com</a>
            </div>
        </div>
    </div>
</a> -->
    <?php get_footer(); ?>