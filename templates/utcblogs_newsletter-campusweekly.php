<?php
/**
 * Template Name: Campus Weekly Newsletter
 * Template Post Type: utcblogs_newsletter
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" style="background:#f3f3f3!important">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo( 'name' ); ?>: <?php the_title(); ?></title>
    <?php
    if ( function_exists( 'yoast_analytics' ) ) {
        yoast_analytics();
    }
    ?>
    <style>/* ZURB Ink 2.0 stylesheet plus color mods */
        @media only screen{html{min-height:100%;background:#f3f3f3}}@media only screen and (max-width:656px){.small-float-center{margin:0 auto!important;float:none!important;text-align:center!important}}@media only screen and (max-width:656px){table.body img{width:auto;height:auto}table.body center{min-width:0!important}table.body .container{width:95%!important}table.body .columns{height:auto!important;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;padding-left:16px!important;padding-right:16px!important}table.body .collapse>tbody>tr>.columns{padding-left:0!important;padding-right:0!important}th.small-3{display:inline-block!important;width:25%!important}th.small-4{display:inline-block!important;width:33.333333%!important}th.small-6{display:inline-block!important;width:50%!important}th.small-8{display:inline-block!important;width:66.666666%!important}th.small-12{display:inline-block!important;width:100%!important}.columns th.small-12{display:block!important;width:100%!important}table.menu{width:100%!important}table.menu td,table.menu th{width:auto!important;display:inline-block!important}table.menu.vertical td,table.menu.vertical th{display:block!important}table.menu[align=center]{width:auto!important}th.callout-inner{padding:10px!important}}
    </style>
    <style>/* Partial stylesheet for compatibility with WP image code */
        figure{display:block;margin-block-start:0em;margin-block-end:0em;margin-inline-start:0px;margin-inline-end:0px;max-width:100% !important}img(max-width:100% !important)img[class*=align],img[class*=wp-image-]{height:auto}.wp-caption{max-width:100%}img.size-full,img.size-large{height:auto;max-width:100%}.alignleft{float:left}.alignright{float:right}.aligncenter{display:block;margin-left:auto;margin-right:auto}blockquote.alignleft,img.alignleft{margin:7px 24px 7px 0}.wp-caption.alignleft{margin:7px 14px 7px 0}blockquote.alignright,img.alignright{margin:7px 0 7px 24px}.wp-caption.alignright{margin:7px 0 7px 14px}.wp-caption.aligncenter,blockquote.aligncenter,img.aligncenter{margin-top:7px;margin-bottom:7px}.wp-caption{margin-bottom:24px}.wp-caption img[class*=wp-image-]{display:block;margin:0}.wp-caption{color:#767676}.wp-caption-text{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;font-style:italic;margin:9px 0;padding-right:10px;font-size:12px;line-height:1.5}.gallery{margin-bottom:20px}.gallery-item{float:left;margin:0 4px 4px 0;overflow:hidden;position:relative}.gallery-columns-1 .gallery-item{max-width:100%}.gallery-columns-2 .gallery-item{max-width:48%;max-width:-webkit-calc(50% - 4px);max-width:calc(50% - 4px)}.gallery-columns-3 .gallery-item{max-width:32%;max-width:-webkit-calc(33.3% - 4px);max-width:calc(33.3% - 4px)}.gallery-columns-4 .gallery-item{max-width:23%;max-width:-webkit-calc(25% - 4px);max-width:calc(25% - 4px)}.gallery-columns-5 .gallery-item{max-width:19%;max-width:-webkit-calc(20% - 4px);max-width:calc(20% - 4px)}.gallery-columns-6 .gallery-item{max-width:15%;max-width:-webkit-calc(16.7% - 4px);max-width:calc(16.7% - 4px)}.gallery-columns-7 .gallery-item{max-width:13%;max-width:-webkit-calc(14.28% - 4px);max-width:calc(14.28% - 4px)}.gallery-columns-8 .gallery-item{max-width:11%;max-width:-webkit-calc(12.5% - 4px);max-width:calc(12.5% - 4px)}.gallery-columns-9 .gallery-item{max-width:9%;max-width:-webkit-calc(11.1% - 4px);max-width:calc(11.1% - 4px)}.gallery-columns-1 .gallery-item:nth-of-type(1n),.gallery-columns-2 .gallery-item:nth-of-type(2n),.gallery-columns-3 .gallery-item:nth-of-type(3n),.gallery-columns-4 .gallery-item:nth-of-type(4n),.gallery-columns-5 .gallery-item:nth-of-type(5n),.gallery-columns-6 .gallery-item:nth-of-type(6n),.gallery-columns-7 .gallery-item:nth-of-type(7n),.gallery-columns-8 .gallery-item:nth-of-type(8n),.gallery-columns-9 .gallery-item:nth-of-type(9n){margin-right:0}.gallery-caption{background-color:rgba(0,0,0,.7);-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;color:#fff;font-size:12px;line-height:1.5;margin:0;max-height:50%;opacity:0;padding:6px 8px;position:absolute;bottom:0;left:0;text-align:left;width:100%}.gallery-caption:before{content:"";height:100%;min-height:49px;position:absolute;top:0;left:0;width:100%}.gallery-item:hover .gallery-caption{opacity:1}.gallery-columns-7 .gallery-caption,.gallery-columns-8 .gallery-caption,.gallery-columns-9 .gallery-caption{display:none}
    </style>
    <style>/* Partial stylesheet for compatibility with WP default styles */
        h2,h1,h3,h4{color:#112e51;text-transform:uppercase}a{color:#166484 !important;text-decoration:none}
    </style>
</head>
<body style="-moz-box-sizing:border-box;-ms-text-size-adjust:100%;-webkit-box-sizing:border-box;-webkit-text-size-adjust:100%;Margin:0;background:#f3f3f3!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:1.4;margin:0;min-width:100%;padding:0;text-align:left;width:100%!important">
<span class="preheader" style="color:#f3f3f3;display:none!important;font-size:1px;line-height:1px;max-height:0;max-width:0;mso-hide:all!important;opacity:0;overflow:hidden;visibility:hidden"></span>
<table class="body" style="Margin:0;background:#f3f3f3!important;border-collapse:collapse;border-spacing:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;height:100%;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;width:100%">
    <tr style="padding:0;text-align:left;vertical-align:top">
        <td class="center" align="center" valign="top" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
            <center style="width:100%">
                <table align="center" class="container float-center" style="Margin:0 auto;background:#fefefe;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:640px">
                    <tbody>
                    <tr style="padding:0;text-align:left;vertical-align:top">
                        <td style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                            <table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                <tbody>
                                <tr style="padding:0;text-align:left;vertical-align:top">
                                    <td height="16" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:16px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%">
                                <tbody>
                                <tr style="padding:0;text-align:left;vertical-align:top">
                                    <img src="<?php echo plugin_dir_url( __FILE__ ).'assets/img/campus-weekly-header-680.png'; ?>" alt="" width="680" height="112" style="-ms-interpolation-mode:bicubic;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto">
                                    <th class="small-12 large-12 columns first last" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0 auto;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0 auto;padding:0;padding-bottom:20px;padding-left:16px;padding-right:16px;text-align:left;vertical-align:top;width:624px;word-wrap:break-word">
                                        <table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                            <tbody>
                                            <tr style="padding:0;text-align:left;vertical-align:top">
                                                <td height="16" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:16px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">&nbsp;</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                            <tbody>
                                            <tr style="padding:0;text-align:left;vertical-align:top">
                                                <th style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                                    <p style="Margin:0;Margin-bottom:10px;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:18px;font-weight:800;line-height:1.4;margin:0;margin-bottom:10px;padding:0;text-align:left">Updates and news for the week of&nbsp;<?php the_title(); ?></p>
                                                    <?php if (have_posts()) : ?>
                                                        <?php while (have_posts()) : the_post(); ?>
                                                            <?php the_content(); ?>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </th>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                            <table class="wrapper secondary" align="center" style="background:#f3f3f3;border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                <tbody>
                                <tr style="padding:0;text-align:left;vertical-align:top">
                                    <td class="wrapper-inner" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                        <table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                            <tbody>
                                            <tr style="padding:0;text-align:left;vertical-align:top">
                                                <td height="16" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:16px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">&nbsp;</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%">
                                            <tbody>
                                            <tr style="padding:0;text-align:left;vertical-align:top">
                                                <th class="small-12 large-6 columns first" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0 auto;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0 auto;padding:0;padding-bottom:20px;padding-left:0;padding-right:0;text-align:left;vertical-align:top;width:328px;word-wrap:break-word">
                                                    <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                        <tbody>
                                                        <tr style="padding:0;text-align:left;vertical-align:top">
                                                            <th style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                                                <p class="small" style="Margin:0;Margin-bottom:10px;color:#8a8a8a;font-family:Helvetica,Arial,sans-serif;font-size:80%;font-weight:400;line-height:1.4;margin:0;margin-bottom:10px;padding:0;text-align:left;hyphens:none;">Content curated by the Division of <a href="https://www.utc.edu/communications-and-marketing" style="Margin:default;color:#166484;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.4;margin:default;padding:0;text-align:left;text-decoration:none;hyphens:none;-moz-hyphens:none;-webkit-hyphens:none;-ms-hyphens:none">Communications and Marketing</a>. <br>&copy;&nbsp;<?php the_time('Y') ?>&nbsp;University of Tennessee at Chattanooga</p>
                                                            </th>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </th>
                                                <th class="small-12 large-6 columns last" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0 auto;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0 auto;padding:0;padding-bottom:20px;padding-left:0;padding-right:0;text-align:left;vertical-align:top;width:328px;word-wrap:break-word">
                                                    <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                        <tbody>
                                                        <tr style="padding:0;text-align:left;vertical-align:top">
                                                            <th style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                                                <table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%">
                                                                    <tbody>
                                                                    <tr style="padding:0;text-align:left;vertical-align:top">
                                                                        <th class="small-3 large-3 columns first" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0 auto;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0 auto;padding:0;padding-bottom:20px;padding-left:0!important;padding-right:0!important;text-align:left;vertical-align:top;width:168px;word-wrap:break-word">
                                                                            <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                                                <tbody>
                                                                                <tr style="padding:0;text-align:left;vertical-align:top">
                                                                                    <th style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                                                                        <a href="https://www.facebook.com/UTChattanooga/" style="color:#166484;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.4;padding:0;text-align:left;text-decoration:none">
                                                                                            <img class="float-center" src="<?php echo plugin_dir_url( __FILE__ ).'assets/img/facebook.png';?>" style="-ms-interpolation-mode:bicubic;Margin:0 auto;border:none;clear:both;display:block;float:none;margin:0 auto;max-width:100%;outline:0;text-align:center;text-decoration:none;width:auto">
                                                                                        </a>
                                                                                    </th>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </th>
                                                                        <th class="small-3 large-3 columns" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0 auto;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0 auto;padding:0;padding-bottom:20px;padding-left:0!important;padding-right:0!important;text-align:left;vertical-align:top;width:25%;word-wrap:break-word">
                                                                            <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                                                <tbody>
                                                                                <tr style="padding:0;text-align:left;vertical-align:top">
                                                                                    <th style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                                                                        <a href="https://www.instagram.com/utchattanooga/" style="color:#166484;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.4;padding:0;text-align:left;text-decoration:none">
                                                                                            <img class="float-center" src="<?php echo plugin_dir_url( __FILE__ ).'assets/img/instagram.png';?>" style="-ms-interpolation-mode:bicubic;Margin:0 auto;border:none;clear:both;display:block;float:none;margin:0 auto;max-width:100%;outline:0;text-align:center;text-decoration:none;width:auto">
                                                                                        </a>
                                                                                    </th>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </th>
                                                                        <th class="small-3 large-3 columns" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0 auto;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0 auto;padding:0;padding-bottom:20px;padding-left:0!important;padding-right:0!important;text-align:left;vertical-align:top;width:25%;word-wrap:break-word">
                                                                            <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                                                <tbody>
                                                                                <tr style="padding:0;text-align:left;vertical-align:top">
                                                                                    <th style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                                                                        <a href="https://twitter.com/utchattanooga" style="color:#166484;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.4;padding:0;text-align:left;text-decoration:none">
                                                                                            <img class="float-center" src="<?php echo plugin_dir_url( __FILE__ ).'assets/img/twitter.png';?>" style="-ms-interpolation-mode:bicubic;Margin:0 auto;border:none;clear:both;display:block;float:none;margin:0 auto;max-width:100%;outline:0;text-align:center;text-decoration:none;width:auto">
                                                                                        </a>
                                                                                    </th>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </th>
                                                                        <th class="small-3 large-3 columns last" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0 auto;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0 auto;padding:0;padding-bottom:20px;padding-left:0!important;padding-right:0!important;text-align:left;vertical-align:top;width:168px;word-wrap:break-word">
                                                                            <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                                                <tbody>
                                                                                <tr style="padding:0;text-align:left;vertical-align:top">
                                                                                    <th style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                                                                        <a href="https://www.linkedin.com/school/27384/" style="color:#166484;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.4;padding:0;text-align:left;text-decoration:none">
                                                                                            <img class="float-center" src="<?php echo plugin_dir_url( __FILE__ ).'assets/img/linkedin.png';?>" style="-ms-interpolation-mode:bicubic;Margin:0 auto;border:none;clear:both;display:block;float:none;margin:0 auto;max-width:100%;outline:0;text-align:center;text-decoration:none;width:auto">
                                                                                        </a>
                                                                                    </th>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </th>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </th>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </th>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </center>
        </td>
    </tr>
</table>
<!-- prevent Gmail on iOS font size manipulation -->
<div class="gmailfix" style="white-space:nowrap;font:15px courier;line-height:0">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
</body>
</html>
