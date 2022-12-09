<?php
echo '<footer class="">';

echo '<section class="pt-5 pb-5">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-lg-2 col-md-3 col-5 text-center pb-5">';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
$logoFooter = get_field('logo_footer','options'); 

if($logoFooter){
echo wp_get_attachment_image($logoFooter['id'],'full',"",['class'=>'w-100 h-auto']); 
} elseif($logo) {
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto']);
}

echo '</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';

echo '<section class="position-relative text-white overflow-h pt-5 pb-5">';

echo wp_get_attachment_image(69,'full','',['class'=>'position-absolute w-100 h-100','style'=>'top:0;left:0;']);

echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-12">';

wp_nav_menu(array(
'menu' => 'footer',
'menu_class'=>'menu d-md-flex flex-wrap list-unstyled justify-content-center text-white text-uppercase'
));

echo '</div>';
echo '<div class="col-12 text-center text-white">';

echo get_template_part('partials/si');

echo '<div class="text-gray-1 pt-4">';

the_field('website_message','options');

echo '</div>';

echo '<a href="https://insideoutcreative.io/" target="_blank" rel="noopener noreferrer" style="" class="">';
        echo '<img src="https://insideoutcreative.io/wp-content/uploads/2022/12/IOC-Backlink.png" style="width:150px;" class="h-auto ml-2" alt="">';
        // echo '<img src="https://insideoutcreative.io/wp-content/uploads/2022/06/created-by-inside-out-creative-black.png" style="width:150px;" class="h-auto ml-2" alt="">';
        echo '</a>';

echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
echo '</footer>';

if(get_field('footer', 'options')) { the_field('footer', 'options'); }

wp_footer();

echo '</body>';
echo '</html>';
?>