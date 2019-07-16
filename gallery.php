<?php /* Template Name: Galeria */ ?>

<?php get_header(); ?>

<?php $galleries = ap_get_galleries(); ?>

<div class="page-section gallery-page">
    <ul class="portfolio-filter">
        <li class="filter all active" data-filter="*">Wszystkie</li>

        <?php foreach ($galleries as $gallery): ?>
            <li class="filter" data-filter=".gallery-item-<?php echo $gallery->ID ?>">
                <?php echo $gallery->post_title ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <div class="portfolio-gallery">
        <?php if (function_exists( 'rl_gallery' )): ?>
            <?php foreach ($galleries as $gallery): ?>
                <?php rl_gallery(['id' => $gallery->ID]); ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
