<?php
if(have_rows('builder')): while(have_rows('builder')): the_row();
$layout = get_sub_field('layout');

if($layout == 'Content + Image'){
    if(have_rows('content_image')): while(have_rows('content_image')): the_row();
    $bgImg = get_sub_field('background_image');
        $style = get_sub_field('style');
        $classes = get_sub_field('classes');
        $content = get_sub_field('content');
        $img = get_sub_field('image');
        if($bgImg){
            echo '<section class="position-relative content-section ' . $classes . '" style="background:url(' . wp_get_attachment_image_url($bgImg['id'],'full') . ');background-size:cover;padding:150px 0;' . $style . '">';
            // echo '</section>';
        } else {
            echo '<section class="position-relative content-section ' . $classes . '" style="padding:150px 0;' . $style . '">';
        }

        echo '<div class="container">';
        echo '<div class="row row-content align-items-center justify-content-between">';
        echo '<div class="col-lg-4">';
            echo $content;
        echo '</div>';

        if($img):
        echo '<div class="col-lg-6 pt-lg-0 pt-5">';
            echo wp_get_attachment_image($img['id'],'full','',['class'=>'w-100 h-100','style'=>'object-fit:cover;']);
        echo '</div>';
        endif;

        echo '</div>';
        echo '</div>';

        echo '</section>';
    endwhile; endif;

} if($layout == 'Text Columns'){
    if(have_rows('text_columns')): while(have_rows('text_columns')): the_row();
    $bgImg = get_sub_field('background_image');
    $style = get_sub_field('style');
    $classes = get_sub_field('classes');

    if($bgImg){
        echo '<section class="position-relative content-section bg-accent-soft-white ' . $classes . '" style="background:url(' . wp_get_attachment_image_url($bgImg['id'],'full') . ');background-size:cover;padding:150px 0;' . $style . '">';
        // echo '</section>';
    } else {
        echo '<section class="position-relative content-section bg-accent-soft-white ' . $classes . '" style="padding:150px 0;' . $style . '">';
    }

    echo '<div class="container">';
    echo '<div class="row row-content align-items-center justify-content-between">';

    if(have_rows('columns')): while(have_rows('columns')): the_row();
    echo '<div class="col-lg-3 col-md-6 text-center pt-lg-0 pb-lg-0 position-relative" style="padding-top:100px;padding-bottom:100px;">';
    echo '<span class="position-absolute h1 text-accent mb-0 text-columns-big-title" style="opacity: .25;
    top: -50%;
    left: 50%;
    transform: translate(-60%,-50%);
    font-size: 180px;">' . get_sub_field('big_title') . '</span>';

    echo '<span class="text-black bold">' . get_sub_field('small_title') . '</span>';

    echo '</div>';
    endwhile; endif;

    echo '</div>';
    echo '</div>';

    echo '</section>';

    endwhile; endif;
} if($layout == 'Skewed Columns'){

    if(have_rows('skewed_columns')): while(have_rows('skewed_columns')): the_row();
        echo '<section class="position-relative" style="padding:100px 0;">';
        echo '<div class="container-fluid">';
        echo '<div class="row row-content justify-content-between">';


        if(have_rows('left_column')): while(have_rows('left_column')): the_row();
        $image = get_sub_field('image');
        $link = get_sub_field('link');
        if( $link ):
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        endif;

        if( $link ):
        echo '<div class="col-lg-6 pl-0">';
        echo '<a href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '" class="d-inline-block w-100 h-100 overflow-h pr-0" style="padding:215px 0;clip-path: polygon(0 0, 100% 15%, 100% 85%, 0% 100%);text-decoration:none;">';
        
        echo '<div class="img-hover h-100 w-100 position-absolute" style="top:0;left:0;">';
        echo wp_get_attachment_image($image,'full','',['class'=>'position-absolute w-100 h-100','style'=>'top:0;left:0;object-fit:cover;']);
        echo '</div>';
        echo '<div class="position-absolute w-100 h-100" style="top:0;left:0;background:#a186be;mix-blend-mode:multiply;pointer-events:none;"></div>';

        echo '<span class="position-relative text-white h1 pl-5 d-inline-block" style="pointer-events:none;">' . esc_html( $link_title ) . '</span>';
        echo '</a>';
        echo '</div>';
        endif;

        endwhile; endif;

        if(have_rows('right_column')): while(have_rows('right_column')): the_row();
        $image = get_sub_field('image');
        $link = get_sub_field('link');
        if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        endif;

        if( $link ):
            echo '<div class="col-lg-6 pr-0">';
            echo '<a href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '" class="d-inline-block w-100 h-100 overflow-h pl-0" style="padding:215px 0;clip-path: polygon(0 15%, 100% 0, 100% 100%, 0 85%);text-decoration:none;">';
            
            echo '<div class="img-hover h-100 w-100 position-absolute" style="top:0;left:0;">';
            echo wp_get_attachment_image($image['id'],'full','',['class'=>'position-absolute w-100 h-100','style'=>'top:0;left:0;object-fit:cover;']);
            echo '</div>';
            echo '<div class="position-absolute w-100 h-100" style="top:0;left:0;background:#a186be;mix-blend-mode:multiply;pointer-events:none;"></div>';
            
            echo '<span class="position-relative text-white h1 pl-5 d-inline-block" style="pointer-events:none;">' . esc_html( $link_title ) . '</span>';
            echo '</a>';
            echo '</div>';
        endif;
        endwhile; endif;

        echo '</div>';
        echo '</div>';
        echo '</section>';
    endwhile; endif;
} if($layout == 'Content'){
    if(have_rows('content')): while(have_rows('content')): the_row();
    echo '<section class="position-relative text-white bg-accent" style="padding:100px 0;">';
    echo '<div class="container-fluid">';
    echo '<div class="row justify-content-center">';

    echo '<div class="col-lg-9 text-center">';
    echo get_sub_field('content');
    echo '</div>';

    echo '</div>';
    echo '</div>';
    echo '</section>';
    endwhile; endif;

} if($layout == 'Icons'){
    if(have_rows('icons')): while(have_rows('icons')): the_row();
        $bgImg = get_sub_field('background_image');
        $style = get_sub_field('style');
        $classes = get_sub_field('classes');
        $content = get_sub_field('content');
        $img = get_sub_field('image');
        if($bgImg){
            echo '<section class="position-relative content-section text-white ' . $classes . '" style="background:url(' . wp_get_attachment_image_url($bgImg,'full') . ');background-size:cover;padding:150px 0;' . $style . '">';
            // echo '</section>';
        } else {
            echo '<section class="position-relative ' . $classes . '" style="padding:150px 0;' . $style . '">';
        }

        echo '<div class="container">';
        echo '<div class="row row-content justify-content-center">';
        echo '<div class="col-lg-9 text-center pb-4">';
            echo $content;
        echo '</div>';

        echo '</div>';

        if(have_rows('icons_inner')):
        echo '<div class="row row-content justify-content-between">';
            while(have_rows('icons_inner')): the_row();
            $icon = get_sub_field('icon');
            echo '<div class="col-lg-4 col-6 text-center mb-5">';
            echo '<div class="border-hover d-flex align-items-center justify-content-center ml-auto mr-auto mb-4" style="border-radius:50%;height:75px;width:75px;border:1px solid var(--accent-primary);">';
            echo wp_get_attachment_image($icon['id'],'full','',['class'=>'w-100','style'=>'height:40px;object-fit:contain;']);
            echo '</div>';
                
                echo '<h3 class="h6 light">' . get_sub_field('title') . '</h3>';
            echo '</div>';
            endwhile;
        echo '</div>';
        endif;


        echo '</div>';

        echo '</section>';
    endwhile; endif;
} if($layout == 'Listings'){
    if(have_rows('listings')): while(have_rows('listings')): the_row();
        echo '<section class="position-relative" style="padding:150px 0;">';
        echo '<div class="container">';
        echo '<div class="row row-content justify-content-center">';
        echo '<div class="col-12 text-center pb-4">';
        echo get_sub_field('content');
        echo '</div>';
        echo '</div>';

        $spaces = get_sub_field('spaces');

        if( $spaces ):
            echo '<div class="row">';
            foreach( $spaces as $post ): 
                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post);
                echo '<div class="col-lg-4 col-md-6 text-center mb-4">';
                echo '<div class="img-hover overflow-h">';
                    the_post_thumbnail('full',array('class'=>'w-100','style'=>'height:250px;object-fit:cover;'));
                echo '</div>';

                echo '<h3 class="cormorant text-uppercase pt-4">' . get_the_title() . '</h3>';
                echo '<a href="' . get_the_permalink() . '" class="ls-2">LEARN MORE</a>';
                // echo '<hr class="mt-2">';
                echo '</div>';
            endforeach;
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); 
            echo '</div>';
        endif;

        echo '</div>';
        echo '</section>';
    endwhile; endif;
} if($layout == 'Testimonials'){
    if(have_rows('testimonials')): while(have_rows('testimonials')): the_row();
    echo '<section class="position-relative" style="padding:150px 0;">';

    echo wp_get_attachment_image(177,'full','',['class'=>'position-absolute h-100 z-1','style'=>'top:0;left:50%;transform:translate(-50%,-50%);width:150px;object-fit:contain;']);
    echo wp_get_attachment_image(173,'full','',['class'=>'w-100 h-100 position-absolute','style'=>'top:0;left:0;']);

    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-12 text-center pb-5">';

    echo get_sub_field('content');

    echo '</div>';

        if(have_rows('testimonial_repeater')): 
            

            echo '<div class="testimonial-carousel owl-carousel owl-theme arrows-middle">';
            while(have_rows('testimonial_repeater')): the_row();


                echo '<div class="text-center col-lg-6 ml-auto mr-auto">';
                echo '<div class="pb-4 text-accent" style="font-size:125%;">';
                echo get_sub_field('content');
                echo '</div>';

                $headshot = get_sub_field('headshot');
                echo wp_get_attachment_image($headshot['id'],'full','',['class'=>'ml-auto mr-auto','style'=>'width:100px;height:100px;object-fit:cover;border-radius:50%;']);

                echo '<span class="d-block h5 cormorant pt-4">' . get_sub_field('name') . '</span>';
                echo '<span class="d-block text-accent">' . get_sub_field('title') . '</span>';
                
                echo '</div>';

            
            endwhile;
        endif;
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</section>';
    endwhile; endif;
} if($layout == 'Contact'){
    if(have_rows('contact')): while(have_rows('contact')): the_row();
        echo '<section class="position-relative" style="padding-top:150px;">';

        $bgImg = get_sub_field('background_image');
        echo wp_get_attachment_image($bgImg['id'],'full','',['class'=>'position-absolute w-100 h-75','style'=>'top:0;left:0;object-fit:cover;']);

        echo '<div class="container">';
        echo '<div class="row justify-content-center">';
        echo '<div class="col-lg-9 text-center">';
        echo '<div class="position-relative p-5">';
        echo wp_get_attachment_image(173,'full','',['class'=>'position-absolute w-100 h-100','style'=>'top:0;left:0;object-fit:cover;']);

        echo '<div class="position-relative">';
        echo get_sub_field('content');
        echo '</div>';
        
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</section>';
    endwhile; endif;
}

endwhile; endif;
?>