<!doctype html>
<!--[if lt IE 7 ]>
<html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->
<head>
    <!-- Google Optimize -->
    <script src="https://www.googleoptimize.com/optimize.js?id=OPT-PPWS8HT"></script>
    <style>.async-hide { opacity: 0 !important} </style>
    <script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
    h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
    (a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
    })(window,document.documentElement,'async-hide','dataLayer',4000,
    {'GTM-WCBHBN4':true});</script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-63583607-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-63583607-1');

      gtag('require', 'GTM-WCBHBN4');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W4JHBMV');</script>
    <!-- End Google Tag Manager -->
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '200143707159934');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=200143707159934&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    <meta http-equiv="Content-Type" content="text/html"; charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width", initial-scale="1">
    <?php wp_head(); ?>
    <link id="switcher-css" rel="stylesheet" type="text/css" href="#" media="screen"/>
    <!-- Contact Form 7 submit message activation -->
    <script>
        // (function($) {
        //     var wpcf7Elm = document.querySelector( '.wpcf7' );

        //     wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
        //         $('#quotation-success-msg').fadeIn();
        //         setTimeout( function() {
        //             $('#quotation-success-msg').fadeOut();
        //         },5000);
        //     }, false );
        // })
    //     jQuery(function($) {
    //         var wpcf7Elm = document.querySelector(".wpcf7");
    //         wpcf7Elm.addEventListener("wpcf7submit", function( event ) {
    //             alert( "Fire!" );
    //         }, 
    //     false );

    // })
    </script>
    <!-- Mailchimp Connection to Enable Pop-up Forms -->
    <script id="mcjs">
        !function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/7f3e393a1a68abba32f17f73c/e77acb6b491b817f05f776b20.js");
    </script>
    <!-- End of Mailchimp Connection to Enable Pop-up Forms -->
</head>
<?php
global $kyma_theme_options;
$class = "";
if ($kyma_theme_options['site_layout'] != "") {
    $class = 'site_boxed ';
}
$class .= $kyma_theme_options['site_preloader'] . ' ';
if ($kyma_theme_options['side_header']) {
    $class .= ' header_on_side ';
}
if ($kyma_theme_options['headercolorscheme'] == 'transparent_header' && $kyma_theme_options['site_layout'] == "") {
    $class .= isset($kyma_theme_options['headercolorscheme']) ? $kyma_theme_options['headercolorscheme'] : '';
} elseif ($kyma_theme_options['headercolorscheme'] == 'light_header') {
    $class .= ' light_header ';
}
if ($kyma_theme_options['dark_sub_menu']) {
    $class .= ' dark_sup_menu ';
}
?>
<!-- Class ( site_boxed - dark - preloader1 - preloader2 - preloader3 - light_header - dark_sup_menu - menu_button_mode - transparent_header - header_on_side ) -->
<body <?php body_class("menu_button_mode " . $class); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W4JHBMV"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<span id="stickymenu"
      style="display:none;"><?php echo isset($kyma_theme_options['headersticky']) ? esc_attr($kyma_theme_options['headersticky']) : 1; ?></span>

<div id="preloader">
    <div class="spinner">
        <div class="sk-dot1"></div>
        <div class="sk-dot2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
</div>

<div id="main_wrapper">
<header id="site_header"><?php
if ($kyma_theme_options['topbar']) {
    ?>
<div class="topbar <?php echo esc_attr($kyma_theme_options['topbarcolor']); ?>">
    <!-- class ( topbar_colored  ) -->
    <div class="content clearfix">
	<?php if ($kyma_theme_options['contact_info_header']) { ?>
        <div class="top_details clearfix f_left"><?php
            if ($kyma_theme_options['contact_address']) {
                ?>
                <span><a id="home-address" href="https://www.google.com/maps/place/Cra.+22+%2376-57,+Bogot%C3%A1,+Colombia/@4.6660696,-74.0653563,17z/data=!3m1!4b1!4m5!3m4!1s0x8e3f9a5870e9d397:0x5c15f49ec4807d29!8m2!3d4.6660696!4d-74.0631676" target="_blank"><i class="fa fa-map-marker"></i><?php echo esc_attr($kyma_theme_options['contact_address']); ?></a></span><?php
            }
            if ($kyma_theme_options['contact_email']) {
                ?>
                <span><a href="<?php echo esc_url(home_url('/'));?>contactanos/"><i class="fa fa-envelope-o"></i><?php echo sanitize_email($kyma_theme_options['contact_email']); ?></a></span><?php 
            }
            if ($kyma_theme_options['contact_phone']) {
                ?>
                <span><a href="tel:+5712119290"><i class="fa fa-phone"></i><?php echo esc_attr($kyma_theme_options['contact_phone']); ?></a></span><?php
            } ?>
        </div>
		<?php } ?>
        <?php if ($kyma_theme_options['social_media_header']) { ?>
            <div class="top-socials box_socials f_right">
            <?php if ($kyma_theme_options['social_facebook_link'] != '') { ?>
            <a class="facebook" href="<?php echo esc_url($kyma_theme_options['social_facebook_link']); ?>" target="_blank">
                <span class="soc_icon_bg"></span>
                <i class="fa fa-facebook"></i>
                </a><?php
            }
            if ($kyma_theme_options['social_twitter_link'] != '') { ?>
            <a class="twitter" href="<?php echo esc_url($kyma_theme_options['social_twitter_link']); ?>" target="_blank">
                <span class="soc_icon_bg"></span>
                <i class="fa fa-twitter"></i>
                </a><?php
            }
            if ($kyma_theme_options['social_google_plus_link'] != '') { ?>
            <a class="google-plus" href="<?php echo esc_url($kyma_theme_options['social_google_plus_link']); ?>" target="_blank">
                <span class="soc_icon_bg"></span>
                <i class="fa fa-google-plus"></i>
                </a><?php
            }
            if ($kyma_theme_options['social_skype_link'] != '') { ?>
            <a class="skype" href="skype:<?php echo esc_attr($kyma_theme_options['social_skype_link']); ?>?call">
                <span class="soc_icon_bg"></span>
                <i class="fa fa-skype"></i>
                </a><?php
            }
            if ($kyma_theme_options['social_vimeo_link'] != '') { ?>
            <a class="vimeo" href="<?php echo esc_url($kyma_theme_options['social_vimeo_link']); ?>" target="_blank">
                <span class="soc_icon_bg"></span>
                <i class="fa fa-vimeo-square"></i>
                </a><?php
            }
            if ($kyma_theme_options['social_picasa_link'] != '') { ?>
            <a class="picasa" href="<?php echo esc_url($kyma_theme_options['social_picasa_link']); ?>" target="_blank">
                <span class="soc_icon_bg"></span>
                <i class="fa fa-picassa"></i>
                </a><?php
            }
            if ($kyma_theme_options['social_instagram_link'] != '') { ?>
            <a class="instagram" href="<?php echo esc_url($kyma_theme_options['social_instagram_link']); ?>" target="_blank">
                <span class="soc_icon_bg"></span>
                <i class="fa fa-instagram"></i>
                </a><?php
            }
			if ($kyma_theme_options['social_pinterest_link'] != '') { ?>
            <a href="<?php echo esc_url($kyma_theme_options['social_pinterest_link']); ?>" target="_blank">
                <span class="soc_icon_bg"></span>
                <i class="fa fa-pinterest"></i>
                </a><?php
            }
			if ($kyma_theme_options['social_youtube_link'] != '') { ?>
            <a class="youtube" href="<?php echo esc_url($kyma_theme_options['social_youtube_link']); ?>" target="_blank">
                <span class="soc_icon_bg"></span>
                <i class="fa fa-youtube-play"></i>
                </a><?php
            } ?>
            </div><?php
        } ?>
    </div>
    <!-- End content -->
    </div><?php
} ?>
<!-- End topbar -->
<div id="side_heder">
    <div id="side_heder_in">
        <div id="navigation_bar">
            <div class="content">
                <div id="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>"
                       title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                        <?php
                        if (isset($kyma_theme_options['upload_image_logo']) && is_array($kyma_theme_options['upload_image_logo']) && $kyma_theme_options['upload_image_logo']['url'] != "") {
                            ?>
                            <img id="logoimg"
                                 src="<?php echo esc_url($kyma_theme_options['upload_image_logo']['url']); ?>"
                                 alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
                                 style="height:<?php echo intval($kyma_theme_options['logo_height']) ?>px;"/>
                        <?php } else { ?>
                            <h3 <?php if ($kyma_theme_options['logo_text_width']) {
                                echo 'style="font-size:' . $kyma_theme_options['logo_text_width'] . 'px;color:#' . get_header_textcolor() . '"';
                            } ?> ><?php echo get_bloginfo('name'); ?></h3>
                        <?php } ?>
                    </a>
                </div>
                <?php if (($kyma_theme_options['logo_layout'] == "right") && (!$kyma_theme_options['side_header'])) { ?>
                <div class="<?php echo 'logo_right'; ?>" >
                    <?php } ?>
                    <!-- Top Card --><?php if ($kyma_theme_options['show_cartcount'] && class_exists('WooCommerce')) { ?>
                        <div id="top_cart" class="top_cart">
                            <a href="#" class="top_add_card">
                                <i class="ico-cart"></i>
                   <span><?php global $woocommerce;
                       echo $woocommerce->cart->cart_contents_count; ?></span>
                            </a>

                            <div class="top_cart_con">
                                <div class="top_cart_header">
                                    <h3><?php _e('Shopping Cart', 'kyma'); ?></h3></div>
                                <div class="top_cart_block">
                                    <ul class="top_cart_list"><?php
                                        foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                                            $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                                            $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

                                            if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                                                ?>
                                            <li class="<?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">

                                                <?php
                                                $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);
                                                if (!$_product->is_visible())
                                                    echo $thumbnail;
                                                else
                                                    printf('<a href="%s">%s</a>', $_product->get_permalink($cart_item), $thumbnail);
                                                ?>
                                                <span class="cart_top_details">
                                                <span class="top_cart_title"><?php
                                                    if (!$_product->is_visible())
                                                        echo apply_filters('woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key);
                                                    else
                                                        echo apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s">%s</a>', $_product->get_permalink($cart_item), $_product->get_title()), $cart_item, $cart_item_key);

                                                    // Meta data
                                                    echo WC()->cart->get_item_data($cart_item);
                                                    ?><span class="top_cart_quantity"><?php
                                                        echo 'x ' . $cart_item['quantity'];
                                                        ?></span></span>
                                                <span class="top_cart_price">
                                                <?php echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); ?>
                                                </span>
                                            </span>
                                                <?php
                                                echo apply_filters('woocommerce_cart_item_remove_link', sprintf('<a href="%s" class="remove" title="%s"><span class="top_catt_remove"></span> </a>', esc_url(WC()->cart->get_remove_url($cart_item_key)), __('Remove this item', 'woocommerce')), $cart_item_key);
                                                ?>
                                                </li><?php
                                            }
                                        } ?>
                                    </ul>
                                </div>
                                <div class="top_cart_footer clearfix">
                                        <span
                                            class="left top_cart_total"> <?php wc_cart_totals_subtotal_html(); ?></span>
                                    <a href="<?php echo esc_url(home_url('/') . 'cart'); ?>">
                                        <button
                                            class="button top_cart_btn shadow_btn f_right"><?php _e('View Cart', 'kyma'); ?></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Top Card --><?php
                    } if (($kyma_theme_options['logo_layout'] == "right") && (!$kyma_theme_options['side_header'])) { ?>
                </div>
            <?php } ?>
                <div class="popup_button"><a id="main_button" href="<?php echo esc_url(home_url('/'));?>cotizaciones/">COTIZAR AHORA</a></div>
                <div class="popup_button_icon"><a id="main_button" href="<?php echo esc_url(home_url('/'));?>cotizaciones/"><i class="fa fa-usd"></i></a></div>
                <nav id="main_nav">
                    <?php if (($kyma_theme_options['logo_layout'] == "right") && (!$kyma_theme_options['side_header'])) { ?>
                    <div <?php //echo 'style="float:left; position:relative;"'; ?> >
                        <?php } ?>
                        <div id="nav_menu">
                        <span class="mobile_menu_trigger">
                            <a href="#" class="nav_trigger"><span></span></a>
                        </span>
                            <?php wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'menu_class' => 'clearfix horizontal_menu',
                                    'menu_id' => 'navy',
                                    'fallback_cb' => 'kyma_fallback_page_menu',
                                    'link_before' => '<span>',
                                    'link_after' => '</span>',
                                    'walker' => new kyma_nav_walker(),
                                )
                            ); ?>
                        </div>
                        <?php if (($kyma_theme_options['logo_layout'] == "right") && (!$kyma_theme_options['side_header'])){ ?>
                    </div>
                <?php } ?>
                </nav>
                <!-- End Nav -->
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
</header>
<!-- End Main Header -->