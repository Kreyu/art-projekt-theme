<?php /* Template Name: Strona główna */ ?>

<?php get_header(); ?>

<div class="page-section home-page">
	<div class="hero-slider owl-carousel">
		<div class="slider-item d-flex align-items-center set-bg" data-setbg="<?php echo wp_get_attachment_url(get_theme_mod('ap-homepage-background')) ?>" data-hash="slide-1">
			<div class="si-text-box">
				<span><?php echo get_theme_mod('ap-homepage-subtitle') ?></span>
				<h2><?php echo get_theme_mod('ap-homepage-title') ?></h2>
				<p><?php echo get_theme_mod('ap-homepage-description') ?></p>

				<a href="<?php echo ap_get_page_uri(get_theme_mod('ap-homepage-button-link')) ?>" class="site-btn">
                    <?php echo get_theme_mod('ap-homepage-button') ?>
                </a>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
