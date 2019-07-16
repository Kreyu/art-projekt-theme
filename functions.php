<?php

/**
 * Builds the theme sections, settings and controls.
 *
 * @param  WP_Customize_Manager $wp_customize
 * @return void
 */
function ap_theme_customization($wp_customize)
{
    // Homepage

    $wp_customize->add_section('ap-homepage-section', [
        'title' => 'Strona główna',
    ]);

    $wp_customize->add_setting('ap-homepage-title');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ap-homepage-title-control', [
        'label' => 'Nagłówek',
        'section' => 'ap-homepage-section',
        'settings' => 'ap-homepage-title',
    ]));

    $wp_customize->add_setting('ap-homepage-subtitle');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ap-homepage-subtitle-control', [
        'label' => 'Podtytuł',
        'section' => 'ap-homepage-section',
        'settings' => 'ap-homepage-subtitle',
    ]));

    $wp_customize->add_setting('ap-homepage-description');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ap-homepage-description-control', [
        'label' => 'Podpis',
        'section' => 'ap-homepage-section',
        'settings' => 'ap-homepage-description',
        'type' => 'textarea',
    ]));

    $wp_customize->add_setting('ap-homepage-button');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ap-homepage-button-control', [
        'label' => 'Tekst na przycisku',
        'section' => 'ap-homepage-section',
        'settings' => 'ap-homepage-button',
    ]));

    $wp_customize->add_setting('ap-homepage-button-link');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ap-homepage-button-link-control', [
        'label' => 'Odnośnik przycisku',
        'section' => 'ap-homepage-section',
        'settings' => 'ap-homepage-button-link',
        'type' => 'dropdown-pages',
    ]));

    $wp_customize->add_setting('ap-homepage-background');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ap-homepage-background-control', [
        'label' => 'Zdjęcie w tle',
        'section' => 'ap-homepage-section',
        'settings' => 'ap-homepage-background',
        'width' => 1920,
        'height' => 1080,
    ]));

    // About

    $wp_customize->add_section('ap-about-section', [
        'title' => 'O firmie',
    ]);

    $wp_customize->add_setting('ap-about-title');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ap-about-title-control', [
        'label' => 'Nagłówek',
        'section' => 'ap-about-section',
        'settings' => 'ap-about-title',
    ]));

    $wp_customize->add_setting('ap-about-subtitle');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ap-about-subtitle-control', [
        'label' => 'Podtytuł',
        'section' => 'ap-about-section',
        'settings' => 'ap-about-subtitle',
    ]));

    $wp_customize->add_setting('ap-about-content');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ap-about-content-control', [
        'label' => 'Treść',
        'section' => 'ap-about-section',
        'settings' => 'ap-about-content',
        'type' => 'textarea',
    ]));

    $wp_customize->add_setting('ap-about-button');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ap-about-button-control', [
        'label' => 'Tekst na przycisku',
        'section' => 'ap-about-section',
        'settings' => 'ap-about-button',
    ]));

    $wp_customize->add_setting('ap-about-button-link');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ap-about-button-link-control', [
        'label' => 'Odnośnik przycisku',
        'section' => 'ap-about-section',
        'settings' => 'ap-about-button-link',
        'type' => 'dropdown-pages',
    ]));

    // Contact

    $wp_customize->add_section('ap-contact-section', [
        'title' => 'Kontakt',
    ]);

    $wp_customize->add_setting('ap-contact-title');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ap-contact-title-control', [
        'label' => 'Nagłówek',
        'section' => 'ap-contact-section',
        'settings' => 'ap-contact-title',
    ]));

    $wp_customize->add_setting('ap-contact-subtitle');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ap-contact-subtitle-control', [
        'label' => 'Podtytuł',
        'section' => 'ap-contact-section',
        'settings' => 'ap-contact-subtitle',
    ]));

    $wp_customize->add_setting('ap-contact-address');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ap-contact-address-control', [
        'label' => 'Adres',
        'section' => 'ap-contact-section',
        'settings' => 'ap-contact-address',
    ]));

    $wp_customize->add_setting('ap-contact-phone');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ap-contact-phone-control', [
        'label' => 'Telefon',
        'section' => 'ap-contact-section',
        'settings' => 'ap-contact-phone',
    ]));

    $wp_customize->add_setting('ap-contact-email');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ap-contact-email-control', [
        'label' => 'Adres email',
        'section' => 'ap-contact-section',
        'settings' => 'ap-contact-email',
    ]));

    // Social

    $wp_customize->add_section('ap-social-section', [
        'title' => 'Media społecznościowe',
    ]);

    $wp_customize->add_setting('ap-social-visible');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ap-social-visible-control', [
        'label' => 'Wyświetlaj media społecznościowe',
        'section' => 'ap-social-section',
        'settings' => 'ap-social-visible',
        'type' => 'checkbox',
    ]));

    $wp_customize->add_setting('ap-social-facebook');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ap-social-facebook-control', [
        'label' => 'Facebook',
        'section' => 'ap-social-section',
        'settings' => 'ap-social-facebook',
    ]));

    // Misc

    $wp_customize->remove_section('custom_css');
    $wp_customize->remove_section('static_front_page');
}

/**
 * Build the URI path for a page. If the page is homepage, return empty string.
 *
 * @param  WP_Post|object|int $page Optional. Page ID or WP_Post object. Default is global $post.
 * @return string|false Page URI, false on error.
 * @see    get_page_uri()
 */
function ap_get_page_uri($page = 0)
{
    if ($page == get_option('page_on_front')) {
        return '';
    }

    return get_page_uri($page);
}

/**
 * Retrieve an array of the galleries (posts with the 'rl_gallery' post_type).
 *
 * @return WP_Post[]
 */
function ap_get_galleries()
{
    return get_posts([
        'post_type' => 'rl_gallery',
    ]);
}

/**
 * Modify the gallery container class string by adding the necessary template classes.
 *
 * @param  string $class
 * @param  array $atts
 * @param  int $rl_gallery_id
 * @return string
 */
function ap_apply_gallery_container_class($class, $atts, $rl_gallery_id)
{
    return $class . ' gallery-item gallery-item-' . $rl_gallery_id;
}

add_action('customize_register', 'ap_theme_customization');
add_filter('rl_gallery_container_class', 'ap_apply_gallery_container_class', 10, 3);
