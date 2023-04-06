<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div id="footer-top"></div>
<div class="footer pt-5">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer__title">Head office</div>
                <?=do_shortcode('[contact_address]')?>
            </div>
            <div class="col-lg-4">
                <div class="footer__title">Contacts</div>
                <div class="footer__contact"><span>Tel:</span><a href="tel:<?=parse_phone(get_field('contact_phone','options'))?>"><?=get_field('contact_phone','options')?></a></div>
                <div class="footer__contact"><span>Fax:</span><?=get_field('contact_fax','options')?></div>
                <div class="footer__contact mb-4"><span>Email:</span><a href="mailto:<?=get_field('contact_email','options')?>"><?=get_field('contact_email','options')?></a></div>
                <div>24hr Emergency Service (for Firearms and support).<br><a href="tel:<?=parse_phone(get_field('contact_emergency','options'))?>"><?=get_field('contact_emergency','options')?></a></div>

            </div>
            <div class="col-lg-4">
                <div class="footer__title">Services</div>
                <?=wp_nav_menu( array('theme_location' => 'footer_menu1') )?>
            </div>
    </div>
</div>
<div class="colophon">
    <div class="container py-2">
        <div class="d-flex flex-wrap justify-content-between">
            <div class="col-md-10 text-center text-md-start">
                Copyright &copy; <?=date('Y')?> PBS International Freight Ltd | Registered in England No. 2648449 | VAT Registration No. GB 644 7226 33 | <a href="/privacy-policy/">Privacy Policy</a>
            </div>
            <div class="col-md-2 d-flex align-items-center justify-content-end">
                <a href="https://www.chillibyte.co.uk/" rel="nofollow noopener" target="_blank" class="cb" title="Digital Marketing by Chillibyte"></a>
            </div>
        </div>
    </div>
</div>
<?php wp_footer();
if (get_field('gtm_property', 'options')) {
    ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?=get_field('gtm_property', 'options')?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php
}
?>
</body>

</html>