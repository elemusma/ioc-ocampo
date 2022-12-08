<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 

if(get_field('header', 'options')) { the_field('header', 'options'); }

if(get_field('custom_css')) { 
?> 
<style>
<?php the_field('custom_css'); ?>
</style>
<?php 
}
wp_head(); 
?>
</head>
<body <?php body_class(); ?>>
<?php
if(get_field('body','options')) { the_field('body','options'); }
// echo '<div class="blank-space"></div>';
echo '<header class="position-fixed pt-3 pb-3 z-3 w-100" style="top:0;left:0;transition:all .25s ease-in-out;">';

echo '<div class="position-absolute w-100 bg-accent header-background" style="top:0;left:0;transition:all .5s ease-in-out;"></div>';

echo '<div class="nav">';
echo '<div class="container">';
echo '<div class="row align-items-center">';

echo '<div class="col-lg-5 col-md-6 mobile-hidden">';
wp_nav_menu(array(
    'menu' => 'Primary Left',
    'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center align-items-center text-white mb-0'
    )); 
echo '</div>';

echo '<div class="col-lg-2 col-md-3 col-4 text-center">';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
if($logo){
    echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 nav-logo','style'=>'max-width:125px;transition:all 1s ease-in-out;height:125px;object-fit:contain;']); 
}

echo '</a>';
echo '</div>';

echo '<div class="col-lg-5 col-md-6 mobile-hidden">';
wp_nav_menu(array(
    'menu' => 'Primary Right',
    'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center align-items-center text-white mb-0'
));
echo '</div>';

// echo '<div class="col-12">';
// wp_nav_menu(array(
//     'menu' => 'primary',
//     'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center align-items-center text-white mb-0'
//     )); 
// echo '</div>';

echo '<div class="col-lg-10 col-md-9 col-8 desktop-hidden">';
echo '<a id="navToggle" class="nav-toggle">';
echo '<div>';
echo '<div class="line-1 bg-accent"></div>';
echo '<div class="line-2 bg-accent"></div>';
echo '<div class="line-3 bg-accent"></div>';
echo '</div>';
echo '</a>';
echo '</div>';

echo '<div id="navMenuOverlay" class="position-fixed z-2"></div>';
echo '<div class="col-lg-4 col-md-8 col-11 nav-items bg-white desktop-hidden" id="navItems">';

echo '<div class="pt-5 pb-5">';
echo '<div class="close-menu">';
echo '<div>';
echo '<span id="navMenuClose" class="close text-accent" style="font-size:30px;">X</span>';
echo '</div>';
echo '</div>';
echo '<a href="' . home_url() . '">';

$logoFooter = get_field('logo_footer','options');
if($logoFooter){
echo wp_get_attachment_image($logoFooter['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:125px;']);
}

echo '</a>';
echo '</div>';

wp_nav_menu(array(
    'menu' => 'Primary Left',
    'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center align-items-center mb-0'
));

wp_nav_menu(array(
    'menu' => 'Primary Right',
    'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center align-items-center mb-0'
));

echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '</header>';

echo '<section class="hero position-relative d-flex align-items-center justify-content-center" style="height:100vh;">';

if(is_front_page()) {

$globalPlaceholderImg = get_field('global_placeholder_image','options');
if(is_page()){
if(has_post_thumbnail()){
the_post_thumbnail('full', array('class' => 'w-100 h-100 bg-img position-absolute'));
} else {
echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute']);
}
} else {
echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute']);
}

echo '<div class="position-absolute bg-black w-100 h-100" style="opacity:.5;"></div>';

echo '<div class="pt-5 pb-5 text-white text-center">';
// echo '<div class="position-relative">';
// echo '<div class="multiply overlay position-absolute w-100 h-100 bg-img"></div>';
// echo '<div class="position-relative">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12">';
echo '<h1 class="pt-3 pb-3 mb-0" style="font-size:10vw;">' . get_the_title() . '</h1>';

if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile;
endif;

echo '</div>';
echo '</div>';
echo '</div>';
// echo '</div>';
// echo '</div>';
echo '</div>';
}



if(!is_front_page()) {
echo '<div class="container pt-5 pb-5 text-center">';
echo '<div class="row">';
echo '<div class="col-md-12">';
if(is_page() || !is_front_page()){
echo '<h1 class="">' . get_the_title() . '</h1>';
} elseif(is_single()){
echo '<h1 class="">' . get_single_post_title() . '</h1>';
} elseif(is_author()){
echo '<h1 class="">Author: ' . get_the_author() . '</h1>';
} elseif(is_tag()){
echo '<h1 class="">' . get_single_tag_title() . '</h1>';
} elseif(is_category()){
echo '<h1 class="">' . get_single_cat_title() . '</h1>';
} elseif(is_archive()){
echo '<h1 class="">' . get_archive_title() . '</h1>';
}
elseif(!is_front_page() && is_home()){
echo '<h1 class="">' . get_the_title(133) . '</h1>';
}
echo '</div>';
echo '</div>';
echo '</div>';
}

echo '</section>';
?>