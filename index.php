<?php get_header(); ?>

<? //$pages = get_pages(); 
// foreach ($pages as $page_data) {
    // $content = apply_filters('the_content', $page_data->post_content); 
    // $title = $page_data->post_title; 
    // echo 
    // '<div class="container content desc">' . 
        // '<div class="title">' .
            // '<span class="line">' . $title . '</span>' .
        // '</div>' .
        // '<div class="text">' . 
            // $content . 
        // '</div>' .
    // '</div>';
//} ?>

<a name="about_me">
    <div class="container content desc">
        <div class="title">
            <span class="line">Обо мне</span>
        </div>

        <div class="text">
            <?php the_field('about_me') ?>
        </div>
    </div>
</a>



<a name="portfolio">
        <div class="container content portfolio desc">

                <div class="title">
                    <span class="line">Портфолио</span>
                </div>

                <div class="text">
                    Внизу предоставленны проекты, над которыми я имел честь работать. Какие-то были сделаны ради собтсвенного интереса, а какие-то на заказ
                </div>
                <div class="projects">
                    <?
                    $params = array(
                        'limit' => -1 
                        // 'page' => , 
                        
                    );
                    $mypod = pods( 'portfolio', $params );

                    // Loop through the records returned
                    while ( $mypod->fetch() ) {
                        echo                         
                            '<div class="project"> 
                                <div class="image_preview" style="background-image: url(' . $mypod->display( 'preview_image' ) . ')"> </div>' .
                                '<div class="project-title">' . $mypod->display( 'project_title' ) . '</div>
                            </div>'
                            
                        ;
                    }
                    ?>
                </div>

                    

        </div>
    </a>



<a name="contacts">
    <div class="container desc contacts">
        <div class="title">
            <span class="line">Контакты</span></div>

            <div class="text">
                <?php the_field('contacts') ?>
            </div>
        
    </div>
</a>
    <?php get_footer(); ?>