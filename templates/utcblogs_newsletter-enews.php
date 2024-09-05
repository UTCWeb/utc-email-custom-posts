<?php
/**
 * Template Name: E-Newsletter Compilation
 * Template Post Type: utcblogs_newsletter
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" style="background:#f3f3f3!important" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--[if gte mso 9]><xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <!--Variables-->
    <title><?php bloginfo( 'name' ); ?>: <?php the_title(); ?></title>
    <?php
    if ( function_exists( 'yoast_analytics' ) ) {
        yoast_analytics();
    }
    ?>
    <style>
        /* CLIENT-SPECIFIC STYLES */
        img{-ms-interpolation-mode: bicubic;}
        /* Force IE to smoothly render resized images. */
        #outlook a{padding:0;}
        /* Force Outlook 2007 and up to provide a "view in browser" message. */
        table{mso-table-lspace:0pt;mso-table-rspace:0pt;}
        /* Remove spacing between tables in Outlook 2007 and up. */
        .ReadMsgBody{width:100%;}
        .ExternalClass{width:100%;}
        /* Force Outlook.com to display emails at full width. */
        p, a, li, td, blockquote{mso-line-height-rule:exactly;}
        /* Force Outlook to render line heights as they're originally set. */
        a[href^="tel"], a[href^="sms"]{color:inherit;cursor:default; text-decoration:none;}
        /* Force mobile devices to inherit declared link styles. */
        p, a, li, td, body, table, blockquote{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;}
        /* Prevent Windows- and Webkit-based mobile platforms from changing declared text sizes. */
        .ExternalClass, .ExternalClass p, .ExternalClass td, .ExternalClass div, .ExternalClass span, .ExternalClass font{line-height:100%;}
        /* Force Outlook.com to display line heights normally. */
        table{border-collapse:collapse;}

        html {
            -webkit-text-size-adjust: none;
        }

        #gmailModule,
        .mobileOnly{ display:none !important; }
        /*Hide Full-Width Image on Desktop*/
    </style>
    <!--[if gte mso 9]>
    <style type="text/css">
        td, p, ul, ol, li {
            font-family:Arial, sans-serif !important;
        }
        ul, ol {
            margin: 0px 0px 0px 26px !important;
            padding: 0px !important;
            list-style-position: inside !important;
        }
        table.outlookPadColumn{
            width:34% !important;
            padding-right:2% !important;
        }
        td.outlookFloat{margin-left:40px;padding-right:0px !important;}
    </style>
    <![endif]-->
    <style>/* ZURB Ink 2.0 stylesheet plus color mods */
        @media only screen{html{min-height:100%;background:#f3f3f3}}@media only screen and (max-width:656px){.small-float-center{margin:0 auto!important;float:none!important;text-align:center!important}}@media only screen and (max-width:656px){table.body img{width:auto;height:auto}table.body center{min-width:0!important}table.body .container{width:95%!important}table.body .columns{height:auto!important;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;padding-left:16px!important;padding-right:16px!important}table.body .collapse>tbody>tr>.columns{padding-left:0!important;padding-right:0!important}th.small-2{display:inline-block!important;width:16.666666%!important}th.small-3{display:inline-block!important;width:25%!important}th.small-4{display:inline-block!important;width:33.333333%!important}th.small-6{display:inline-block!important;width:50%!important}th.small-7{display:inline-block!important;width:58.333333%!important}th.small-8{display:inline-block!important;width:66.666666%!important}th.small-9{display:inline-block!important;width:75%!important}th.small-12{display:inline-block!important;width:100%!important}.columns th.small-12{display:block!important;width:100%!important}table.menu{width:100%!important}table.menu td,table.menu th{width:auto!important;display:inline-block!important}table.menu.vertical td,table.menu.vertical th{display:block!important}table.menu[align=center]{width:auto!important}th.callout-inner{padding:10px!important}}
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
                <table align="center" class="wrapper header float-center" style="Margin:0 auto;background:#112e51;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:100%">
                    <tbody>
                    <tr style="padding:0;text-align:left;vertical-align:top">
                        <td class="wrapper-inner" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:20px;text-align:left;vertical-align:top;word-wrap:break-word">
                            <table align="center" class="container" style="Margin:0 auto;background:0 0;border-collapse:collapse;border-spacing:0;margin:0 auto;padding:0;text-align:inherit;vertical-align:top;width:640px">
                                <tbody>
                                <tr style="padding:0;text-align:left;vertical-align:top">
                                    <td style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                        <table class="row collapse" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%">
                                            <tbody>
                                            <tr style="padding:0;text-align:left;vertical-align:top">
                                                <th class="small-7 large-7 columns first" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0 auto;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0 auto;padding:0;padding-bottom:0;padding-left:0;padding-right:0;text-align:left;vertical-align:top;width:381.3333333333px;word-wrap:break-word">
                                                    <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                        <tbody>
                                                        <tr style="padding:0;text-align:left;vertical-align:top">
                                                            <th style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                                                <img src="<?php echo plugin_dir_url( __FILE__ ).'assets/img/web-wordmark-retina.png'; ?>" height="40" width="275" style="-ms-interpolation-mode:bicubic;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto">
                                                            </th>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </th>
                                                <th class="small-3 large-3 columns" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0 auto;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0 auto;padding:0;padding-bottom:0;padding-left:0;padding-right:0;text-align:left;vertical-align:top;width:160px;word-wrap:break-word">
                                                    <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                        <tbody>
                                                        <tr style="padding:0;text-align:left;vertical-align:top">
                                                            <th style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                                                <!-- Site, Date meta, View link -->
                                                                <p class="small text-right" style="Margin:0;Margin-bottom:10px;color:#fff;font-family:Helvetica,Arial,sans-serif;font-size:80%;font-weight:400;line-height:1.4;margin:0;margin-bottom:-10px;margin-top:-10px;padding:0;padding-top:15px;text-align:right"><?php the_time('m/j/Y') ?>&nbsp;&nbsp;<br>
                                                                    <a class="reverse" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" style="Margin:default;color:#fdb736 !important;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.4;margin:default;padding:0;text-align:left;text-decoration:none">View Online &rarr;</a>
                                                                </p>
                                                            </th>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </th>
                                                <th class="small-2 large-2 columns last" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0 auto;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0 auto;padding:0;padding-bottom:0;padding-left:0;padding-right:0;text-align:left;vertical-align:top;width:114.6666666667px;word-wrap:break-word">
                                                    <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                        <tbody>
                                                        <tr style="padding:0;text-align:left;vertical-align:top">
                                                            <th style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                                                <img class="float-right" style="-ms-interpolation-mode:bicubic;clear:both;display:block;float:right;margin-bottom:-34px;margin-top:-18px;max-width:100%;outline:0;text-align:right;text-decoration:none;width:auto" src="<?php echo plugin_dir_url( __FILE__ ).'assets/img/gray-gold-slash.png';?>">
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
                <table align="center" class="container float-center" style="Margin:0 auto;background:#fefefe;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:640px">
                    <tbody>
                    <tr style="padding:0;text-align:left;vertical-align:top">
                        <td style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                    <!-- Parent post -->
                                    <?php if ( has_post_thumbnail()) : ?>
                                        <!-- Featured image -->
                                        <?php // featured image at top of post
                                        $medium_large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium-large'); ?>
                                        <img src="<?php echo $medium_large_image_url[0] ?>" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; width: auto; width:100%; max-width: 100%; float: left; clear: both; display: block;" align="left" />
                                    <?php else : ?>
                                        <!-- No thumbnail image -->
                                    <?php endif; ?>
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
                                            <th class="small-12 large-12 columns first last" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0 auto;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0 auto;padding:0;padding-bottom:20px;padding-left:16px;padding-right:16px;text-align:left;vertical-align:top;width:624px;word-wrap:break-word">
                                                <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                    <tbody>
                                                    <tr style="padding:0;text-align:left;vertical-align:top">
                                                        <th style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                                            <!-- Parent post title -->
                                                            <?php if( ! empty( $post->post_title ) ) : ?>
                                                                <h1 class="regular" style="Margin:0;Margin-bottom:10px;color:#112e51;font-family:Helvetica,Arial,sans-serif;font-size:34px;font-stretch:condensed;font-weight:700;letter-spacing:1px;line-height:1.4;margin:0;margin-bottom:10px;padding:0;text-align:left;text-transform:none;word-wrap:normal"><?php the_title(); ?></h1>
                                                            <?php endif; ?>
                                                            <!-- Parent post content -->
                                                            <?php the_content(); ?>
                                                        </th>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </th>
                                        </tr>
                                        </tbody>
                                    </table>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                            <!-- Digest of previous week's posts -->
                            <?php
                            // fire up a new loop for digest
                            // customize the excerpt length
                            function custom_excerpt_length( $length ) {
                                return 30;
                            }

                            add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

                            // Digest = posts from previous days, excluding current post
                            $id = get_the_ID();
                            $current_post = get_post( $id );
                            $category_id  = get_cat_ID( 'E-Newsletter' );
                            // run the query and return some posts
                            $digest_posts = new WP_Query( array(
                                'post__not_in' => array( $id ),
                                'posts_per_page' => -1,
                                'cat' => $category_id,
                            ) );
                            ?>
                            <?php while ( $digest_posts->have_posts() ): $digest_posts->the_post(); ?>
                                <hr style="color: #f3f3f3; height: 2px; background: #f3f3f3; border: none;" />
                                <table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                    <tbody>
                                    <tr style="padding:0;text-align:left;vertical-align:top">
                                        <td height="16" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:16px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">&nbsp;</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <?php if ( has_post_thumbnail()) : ?>
                                    <table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%">
                                        <tbody>
                                        <tr style="padding:0;text-align:left;vertical-align:top">
                                            <th class="small-3 large-3 columns first" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0 auto;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0 auto;padding:0;padding-bottom:20px;padding-left:16px;padding-right:8px;text-align:left;vertical-align:top;width:144px;word-wrap:break-word">
                                                <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                    <tbody>
                                                    <tr style="padding:0;text-align:left;vertical-align:top">
                                                        <th style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                                            <img src="<?php // featured image at top of post
                                                            if ( has_post_thumbnail()) {
                                                                $large_thumbnail_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large-thumbnail');
                                                                echo $large_thumbnail_image_url[0];
                                                            }
                                                            else { echo '<!-- no featured image -->'; }
                                                            ?>" style="-ms-interpolation-mode:bicubic;clear:both;display:block;width:100%;max-width:100%;outline:0;text-decoration:none;">
                                                        </th>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </th>
                                            <th class="small-9 large-9 columns last" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0 auto;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0 auto;padding:0;padding-bottom:20px;padding-left:8px;padding-right:16px;text-align:left;vertical-align:top;width:464px;word-wrap:break-word">
                                                <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                    <tbody>
                                                    <tr style="padding:0;text-align:left;vertical-align:top">
                                                        <th style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                                            <?php if( ! empty( $post->post_title ) ) : ?>
                                                                <h2 class="regular" style="Margin:0;Margin-bottom:10px;color:#112e51;font-family:Helvetica,Arial,sans-serif;font-size:30px;font-stretch:condensed;font-weight:400;letter-spacing:-1px;line-height:1.0;margin:0;margin-bottom:10px;padding:0;text-align:left;text-transform:none;word-wrap:normal"><?php the_title(); ?></h2>
                                                            <?php endif; ?>
                                                            <p style="Margin:0;Margin-bottom:10px;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:1.4;margin:0;margin-bottom:10px;padding:0;text-align:left"><?php the_excerpt( 'Read It All »' ); ?></p>
                                                        </th>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </th>
                                        </tr>
                                        </tbody>
                                    </table>
                                <?php else : ?>
                                    <table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%">
                                        <tbody>
                                        <tr style="padding:0;text-align:left;vertical-align:top">
                                            <th class="small-12 large-12 columns first last" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0 auto;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0 auto;padding:0;padding-bottom:20px;padding-left:16px;padding-right:16px;text-align:left;vertical-align:top;width:624px;word-wrap:break-word">
                                                <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                    <tbody>
                                                    <tr style="padding:0;text-align:left;vertical-align:top">
                                                        <th style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                                            <?php $title = get_the_title(); //Untitled set by parent theme function
                                                            if ($title == 'Untitled') : ?>
                                                                <!-- Untitled -->
                                                            <?php else : ?>
                                                            <!-- Title -->
                                                            <?php if( ! empty( $post->post_title ) ) : ?>
                                                            <h2 class="regular" style="Margin:0;Margin-bottom:10px;color:#112e51;font-family:Helvetica,Arial,sans-serif;font-size:30px;font-stretch:condensed;font-weight:400;letter-spacing:-1px;line-height:1.4;margin:0;margin-bottom:10px;padding:0;text-align:left;text-transform:none;word-wrap:normal"><?php the_title(); ?></h4>
                                                                <?php endif; ?>
                                                                <?php endif; ?>
                                                                <!-- Content -->
                                                                <?php the_excerpt( 'Read It All »' ); ?>
                                                        </th>
                                                        <th class="expander" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0!important;text-align:left;vertical-align:top;visibility:hidden;width:0;word-wrap:break-word"></th>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </th>
                                        </tr>
                                        </tbody>
                                    </table>
                                <?php endif; ?>
                            <?php endwhile; ?>
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
                                                <th class="small-12 large-6 columns first" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0 auto;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0 auto;padding:0;padding-bottom:20px;padding-left:16px;padding-right:8px;text-align:left;vertical-align:top;width:304px;word-wrap:break-word">
                                                    <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                        <tbody>
                                                        <tr style="padding:0;text-align:left;vertical-align:top">
                                                            <th style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                                                <p class="small" style="Margin:0;Margin-bottom:10px;color:#8a8a8a;font-family:Helvetica,Arial,sans-serif;font-size:80%;font-weight:400;line-height:1.4;margin:0;margin-bottom:10px;padding:0;text-align:left">&copy; <?php the_time('Y') ?> University of Tennessee at Chattanooga <br>615 McCallie Ave, Chattanooga, TN 37403 </p>
                                                            </th>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </th>
                                                <th class="small-12 large-6 columns last" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0 auto;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0 auto;padding:0;padding-bottom:20px;padding-left:8px;padding-right:16px;text-align:left;vertical-align:top;width:304px;word-wrap:break-word">
                                                    <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                        <tbody>
                                                        <tr style="padding:0;text-align:left;vertical-align:top">
                                                            <th style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                                                <table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%">
                                                                    <tbody>
                                                                    <tr style="padding:0;text-align:left;vertical-align:top">
                                                                        <th class="small-3 large-3 columns first" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0 auto;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0 auto;padding:0;padding-bottom:20px;padding-left:0!important;padding-right:0!important;text-align:left;vertical-align:top;width:25%;word-wrap:break-word">
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
                                                                        <th class="small-3 large-3 columns last" style="-moz-box-sizing:border-box;-moz-hyphens:auto;-webkit-box-sizing:border-box;-webkit-hyphens:auto;Margin:0 auto;border-collapse:collapse!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:1.4;margin:0 auto;padding:0;padding-bottom:20px;padding-left:0!important;padding-right:0!important;text-align:left;vertical-align:top;width:25%;word-wrap:break-word">
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
