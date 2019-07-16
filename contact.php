<?php /* Template Name: Kontakt */ ?>

<?php get_header(); ?>

<div class="page-section contact-page">
    <div class="contact-warp">
        <div class="row">
            <div class="col-xl-6 p-0">
                <div class="contact-text">
                    <span><?php echo get_theme_mod('ap-contact-subtitle') ?></span>
                    <h2><?php echo get_theme_mod('ap-contact-title') ?></h2>

                    <?php echo do_shortcode('[contact-form-7 id="48" title="Formularz kontaktowy" html_class="contact-form"]'); ?>

                    <div class="contact-info">
                        <?php if ($address = get_theme_mod('ap-contact-address')): ?>
                            <p><?php echo $address ?></p>
                        <?php endif; ?>

                        <?php if ($phone = get_theme_mod('ap-contact-phone')): ?>
                            <p><a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a></p>
                        <?php endif; ?>

                        <?php if ($email = get_theme_mod('ap-contact-email')): ?>
                            <p><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 p-0">
                <div class="map-warp"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2443.5067877944166!2d18.259153851721546!3d52.23417797966179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471b36ae56df0e01%3A0x3bd6858fa4ac97e5!2sFryderyka+Chopina+9%2C+62-500+Konin!5e0!3m2!1spl!2spl!4v1562789246761!5m2!1spl!2spl" style="border:0" allowfullscreen></iframe></div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
