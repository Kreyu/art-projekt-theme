<?php /* Template Name: O firmie */ ?>

<?php get_header(); ?>

<div class="page-section about-page">
    <div class="about-warp">
        <div class="row">
            <div class="col-xl-7 order-2 order-xl-1">
                <div class="about-text">
                    <span><?php echo get_theme_mod('ap-about-subtitle') ?></span>
                    <h2><?php echo get_theme_mod('ap-about-title') ?></h2>
                    <p><?php echo get_theme_mod('ap-about-content') ?></p>
                </div>
                <a href="<?php echo ap_get_page_uri(get_theme_mod('ap-about-button-link')) ?>" class="site-btn about-btn">
                    <?php echo get_theme_mod('ap-about-button') ?>
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
