<?php

function wptheme_setup() {

    // перевод темы на др.язык
    load_theme_textdomain('wptheme');

    // кастомное лого
    add_theme_support( 'custom-logo', array(
        'height' => 72 , 
        'width' => 174, 
        'flex-height' => true
    ));

    // миниатюры к записям
    add_theme_support('post-thumbnails');
    // продолжить чтение поста
    function new_excerpt_more($more) {
    return '<a href="'. get_permalink($post->ID) . '">' . ' читать далее ..' . '</a>';
    }
    add_filter('excerpt_more', 'new_excerpt_more');    
    // размеры миниатюр
    // set_post_thumbnail_size( 280, 140);

    // размеры миниатюр
    add_theme_support( 'html5', array(
        'search_form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));

    // виды постов
    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'gallery'
    ));
}

add_action('after_setup_theme', 'wptheme_setup');

function style_script_load() {
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js');
	wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_style( 'sprite', get_template_directory_uri() . '/icons/sprite.css');
}

add_action('wp_enqueue_scripts', 'style_script_load');



// header menu
register_nav_menu( 'menu', 'Меню в шапке' );

//** РЕДАКТИРОВАТЬ ТЕКСТ В ХЕДЕРЕ**

add_action('customize_register', 'header_customize_register');

function header_customize_register($wp_customize) {
    $wp_customize->add_section('header', array(
        'title' => 'Шапка сайта'
    ));
    // Описание сайта
    $setting_desc = 'header__desc';
    $wp_customize->add_setting($setting_desc, array(
        'default' => 'Производство сувенирной и наградной продукции из металла с доставкой по всей России',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control($setting_desc, array(
        'section' => 'header',
        'type' => 'textarea',
        'label' => 'Описание сайта',
    ));

    // Email
    $setting_mail = 'header__mail';
    $wp_customize->add_setting($setting_mail, array(
        'default' => 'zakaz@нопико.рф',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control($setting_mail, array(
        'section' => 'header',
        'type' => 'textarea',
        'label' => 'Email',
    ));    

    // Телефон
    $setting_phone = 'header__phone';
    $wp_customize->add_setting($setting_phone, array(
        'default' => '+7 (3952) 92-02-33',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control($setting_phone, array(
        'section' => 'header',
        'type' => 'textarea',
        'label' => 'Телефон',
    ));      

    // Обновление изменений без перезагрузки
    $wp_customize->selective_refresh->add_partial($setting_desc, array(
        'selector' => '.site-info', //должен содержать class или id элемента с текстом в подвале
        'render_callback' => function() use ($setting_desc) {
            return nl2br(esc_html(get_theme_mod($setting_desc)));
        }   
    ));

    $wp_customize->selective_refresh->add_partial($setting_mail, array(
        'selector' => '.site-info',
        'render_callback' => function() use ($setting_mail) {
            return nl2br(esc_html(get_theme_mod($setting_mail)));
        } 
    ));

    $wp_customize->selective_refresh->add_partial($setting_phone, array(
        'selector' => '.site-info',
        'render_callback' => function() use ($setting_phone) {
            return nl2br(esc_html(get_theme_mod($setting_phone)));
        } 
    ));    
}


// редактировать текст в футере

add_action('customize_register', 'dco_customize_register');

function dco_customize_register($wp_customize) {
    //Добавляем новую вкладку в раздел Внешний вид -> Настроить админ-панели
    $wp_customize->add_section('footer', array(
        'title' => 'Футер' //с помощью этого параметра можно регулировать положение вкладки в списке вкладок
    ));
    // 1
    $setting_desc = 'footer_top';
    $wp_customize->add_setting($setting_desc, array(
        'default' => '\' Цена указана при тираже 1000 шт.', //с помощью этого параметра можно задать текст по умолчанию
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage'
    ));

    //Добавляем область для ввода текста на созданную нами вкладку
    $wp_customize->add_control($setting_desc, array(
        'section' => 'footer',
        'type' => 'textarea',
        'label' => 'Верхний текст в футере',
    ));

    //Добавляем поддержку предпросмотра изменений без полного обновления страницы
    $wp_customize->selective_refresh->add_partial($setting_desc, array(
        'selector' => '.site-info', //должен содержать class или id элемента с текстом в подвале
        'render_callback' => function() use ($setting_desc) {
            return nl2br(esc_html(get_theme_mod($setting_name)));
        }
    ));
   


    // 2
    //Указываем имя настройки, которая будет содержать текст для подвала
    $setting_name = 'footer_text';
    //и добавляем ее
    $wp_customize->add_setting($setting_name, array(
        'default' => 'Информация на сайте предназначена для ознакомления. Не является публичной офертой.', //с помощью этого параметра можно задать текст по умолчанию
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage'
    ));

    //Добавляем область для ввода текста на созданную нами вкладку
    $wp_customize->add_control($setting_name, array(
        'section' => 'footer',
        'type' => 'textarea',
        'label' => 'Нижний текст в футере',
    ));

    //Добавляем поддержку предпросмотра изменений без полного обновления страницы
    $wp_customize->selective_refresh->add_partial($setting_name, array(
        'selector' => '.site-info', //должен содержать class или id элемента с текстом в подвале
        'render_callback' => function() use ($setting_name) {
            return nl2br(esc_html(get_theme_mod($setting_name)));
        }
    ));
}


// пагинация

function wp_pagination( $args = array() ) {
    
    $defaults = array(
        'range'           => 4,
        'custom_query'    => FALSE,
        'previous_string' => __( '<', 'text-domain' ),
        'next_string'     => __( '>', 'text-domain' ),
        'before_output'   => '<div class="pagination"><ul class="pagination__list">',
        'after_output'    => '</ul></div>'
    );
    
    $args = wp_parse_args( 
        $args, 
        apply_filters( 'wp_bootstrap_pagination_defaults', $defaults )
    );
    
    $args['range'] = (int) $args['range'] - 1;
    if ( !$args['custom_query'] )
        $args['custom_query'] = @$GLOBALS['wp_query'];
    $count = (int) $args['custom_query']->max_num_pages;
    $page  = intval( get_query_var( 'paged' ) );
    $ceil  = ceil( $args['range'] / 2 );
    
    if ( $count <= 1 )
        return FALSE;
    
    if ( !$page )
        $page = 1;
    
    if ( $count > $args['range'] ) {
        if ( $page <= $args['range'] ) {
            $min = 1;
            $max = $args['range'] + 1;
        } elseif ( $page >= ($count - $ceil) ) {
            $min = $count - $args['range'];
            $max = $count;
        } elseif ( $page >= $args['range'] && $page < ($count - $ceil) ) {
            $min = $page - $ceil;
            $max = $page + $ceil;
        }
    } else {
        $min = 1;
        $max = $count;
    }
    
    $echo = '';
    $previous = intval($page) - 1;
    $previous = esc_attr( get_pagenum_link($previous) );
    
    $firstpage = esc_attr( get_pagenum_link(1) );
    if ( $firstpage && (1 != $page) )
        $echo .= '<li class="previous"><a href="' . $firstpage . '"class="pagination__link">' . __( '<<', 'text-domain' ) . '</a></li>';
    if ( $previous && (1 != $page) )
        $echo .= '<li><a href="' . $previous . '" class="pagination__link" title="' . __( 'previous', 'text-domain') . '">' . $args['previous_string'] . '</a></li>';
    
    if ( !empty($min) && !empty($max) ) {
        for( $i = $min; $i <= $max; $i++ ) {
            if ($page == $i) {
                $echo .= '<li class="active"><span class="pagination__link pagination__link--active">' . str_pad( (int)$i, 1, '0', STR_PAD_LEFT ) . '</span></li>';
            } else {
                $echo .= sprintf( '<li><a href="%s" class="pagination__link">%2d</a></li>', esc_attr( get_pagenum_link($i) ), $i );
            }
        }
    }
    
    $next = intval($page) + 1;
    $next = esc_attr( get_pagenum_link($next) );
    if ($next && ($count != $page) )
        $echo .= '<li><a href="' . $next . '" class="pagination__link" title="' . __( '>', 'text-domain') . '">' . $args['next_string'] . '</a></li>';
    
    $lastpage = esc_attr( get_pagenum_link($count) );
    if ( $lastpage ) {
        $echo .= '<li class="next"><a href="' . $lastpage . '" class="pagination__link">' . __( '>>', 'text-domain' ) . '</a></li>';
    }
    if ( isset($echo) )
        echo $args['before_output'] . $echo . $args['after_output'];
}
?>
