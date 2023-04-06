<?php
/**
 * The header for the theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cb-hydronix
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/noto-sans-display-v20-latin-regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/noto-sans-display-v20-latin-600.woff2" as="font" type="font/woff2" crossorigin="anonymous">
<?php
if (get_field('ga_property', 'options')) { 
    ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?=get_field('ga_property','options')?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<?=get_field('ga_property','options')?>');
</script>
    <?php
}
if (get_field('gtm_property', 'options')) {
    ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','<?=get_field('gtm_property','options')?>');</script>
<!-- End Google Tag Manager -->
    <?php
}
if (get_field('google_site_verification','options')) {
    echo '<meta name="google-site-verification" content="' . get_field('google_site_verification','options') . '" />';
}
if (get_field('bing_site_verification','options')) {
    echo '<meta name="msvalidate.01" content="' . get_field('bing_site_verification','options') . '" />';
}

wp_head();
if (is_front_page()) {
    ?>
	
	<script type="application/ld+json">
    {
	  "@context": "http://schema.org",
	  "@type": "Organization",
	  "name" : "PBS Specialist Transport",
	  "url": "https://www.firearms-logistics.com/",
	  "logo": "https://www.firearms-logistics.com/wp-content/theme/cb-test/img/pbs-logo.jpg",
	  "description": "",
	  "address": {
		"@type": "PostalAddress",
        "streetAddress": "",
		"addressLocality": "",
		"addressRegion": "",
		"postalCode": "",
		"addressCountry": "UK"
	  },
	  "telephone": "",
      "email": "",
	  "sameAs" : [
		"https://twitter.com/",
		"https://www.linkedin.com/company/",
	  ]
	}
}
</script>
	<?php
}
?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php
do_action('wp_body_open'); 
?>
<style>

</style>
<div class="site" id="page">
	<div id="wrapper-navbar" class="fixed-top">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

        <nav class="navbar navbar-expand-lg navbar-light d-block p-0">
            <div class="container-xl d-flex align-items-center justify-content-between py-2">
                <a href="/" aria-title="Home" class="logo"><img src="<?=get_stylesheet_directory_uri()?>/img/pbs-logo.svg" width="128" height="61"></a>
                <div class="d-none d-lg-flex navbar-nav justify-content-around my-2 w-100 align-content-center">
                    <div class="top__container d-none d-md-flex">
                        <i class="fa-solid fa-phone-alt"></i>
                        <div class="">
                            TELEPHONE<br>
                            <strong><a href="tel:<?=parse_phone(get_field('contact_phone','options'))?>"><?=get_field('contact_phone','options')?></a></strong>
                        </div>
                    </div>
                    <div class="top__container d-none d-md-flex">
                        <i class="fa-solid fa-fax"></i>
                        <div class="">
                            FAX<br>
                            <strong><?=get_field('contact_phone','options')?></strong>
                        </div>
                    </div>
                    <div class="top__container d-none d-md-flex">
                        <i class="fa-solid fa-envelope"></i>
                        <div class="">
                            EMAIL<br>
                            <strong><a href="mailto:<?=get_field('contact_email','options')?>"><?=get_field('contact_email','options')?></a></strong>
                        </div>
                    </div>
                    <div class="top__container d-none d-md-flex align-content-end">
                        <a href="/contact-us/" class="btn btn-primary">Request a quote</a>
                    </div>
                </div>
                <div class="d-lg-none align-self-end mb-3 ml-auto">
                    <button class="navbar-toggler collapsed mt-1" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNav" aria-label="Navigation">
                        <i class="fa fa-navicon" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div id="main-nav">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'primary_nav',
                            'container_class' => 'collapse navbar-collapse container-xl',
                            'container_id'    => 'primaryNav',
                            'menu_class'      => 'navbar-nav w-100 justify-content-between align-items-lg-center',
                            'fallback_cb'     => '',
                            'menu_id'         => 'main-menu',
                            'depth'           => 3,
                            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                        )
                    );
                ?>
            </div>

        </nav>
    </div>
</div>
<h1 class="mt-5">Hello, Loraine</h1>