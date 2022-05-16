<?php
/**
 * Template Name: Newsletter Digest
 * Template Post Type: utcblogs_newsletter
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title><?php the_title(); ?> | <?php bloginfo( 'name' ); ?></title>
    <?php
        if ( function_exists( 'yoast_analytics' ) ) {
          yoast_analytics();
        }
        ?>
  </head>
   <body style="width: 100% !important; min-width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 14px; background: #f1f1f1; margin: 0; padding: 0 0 20px;" bgcolor="#f1f1f1">
      
      <style type="text/css">/* ZURB Ink 1.5 stylesheet plus color and button mods */
         a:visited,h1 a:active,h1 a:visited,h2 a:active,h2 a:visited,h3 a:active,h3 a:visited,h4 a:active,h4 a:visited,h5 a:active,h5 a:visited,h6 a:active,h6 a:visited{color:#2ba6cb!important}table.button:active td,table.button:visited td{background:#2795b6!important}table.button:visited td a{color:#fff!important}table.button:hover td,table.large-button:hover td,table.medium-button:hover td,table.small-button:hover td,table.tiny-button:hover td{background:#2795b6!important}table.button td a:visited,table.button:active td a,table.button:hover td a,table.large-button td a:visited,table.large-button:active td a,table.large-button:hover td a,table.medium-button td a:visited,table.medium-button:active td a,table.medium-button:hover td a,table.small-button td a:visited,table.small-button:active td a,table.small-button:hover td a,table.tiny-button td a:visited,table.tiny-button:active td a,table.tiny-button:hover td a{color:#fff!important}table.secondary:hover td{background:#d0d0d0!important;color:#555}table.secondary td a:visited,table.secondary:active td a,table.secondary:hover td a{color:#555!important}table.success:hover td{background:#457a1a!important}table.alert:hover td{background:#970b0e!important}table.button:hover td{background:#00386b!important}table.facebook:hover td{background:#2d4473!important}table.twitter:hover td{background:#0087bb!important}table.google-plus:hover td{background:#c00!important}a:active,a:hover{color:#e0aa0f!important}a:visited{color:#58799a!important}.gallery-caption:before{content:"";height:100%;min-height:49px;position:absolute;top:0;left:0;width:100%}.gallery-item:hover .gallery-caption{opacity:1}@media only screen and (max-width:600px){table[class=body] img{width:auto!important;height:auto!important}table[class=body] center{min-width:0!important}table[class=body] .container{width:95%!important}table[class=body] .row{display:block!important}table[class=body] .wrapper{display:block!important;padding-right:0!important}table[class=body] .column,table[class=body] .columns{table-layout:fixed!important;float:none!important;width:100%!important;padding-right:0!important;padding-left:0!important;display:block!important}table[class=body] .wrapper.first .column,table[class=body] .wrapper.first .columns{display:table!important}table[class=body] table.column td,table[class=body] table.columns td{width:100%!important}table[class=body] .column td.one,table[class=body] .columns td.one{width:8.333333%!important}table[class=body] .column td.two,table[class=body] .columns td.two{width:16.666666%!important}table[class=body] .column td.three,table[class=body] .columns td.three{width:25%!important}table[class=body] .column td.four,table[class=body] .columns td.four{width:33.333333%!important}table[class=body] .column td.five,table[class=body] .columns td.five{width:41.666666%!important}table[class=body] .column td.six,table[class=body] .columns td.six{width:50%!important}table[class=body] .column td.seven,table[class=body] .columns td.seven{width:58.333333%!important}table[class=body] .column td.eight,table[class=body] .columns td.eight{width:66.666666%!important}table[class=body] .column td.nine,table[class=body] .columns td.nine{width:75%!important}table[class=body] .column td.ten,table[class=body] .columns td.ten{width:83.333333%!important}table[class=body] .column td.eleven,table[class=body] .columns td.eleven{width:91.666666%!important}table[class=body] .column td.twelve,table[class=body] .columns td.twelve{width:100%!important}table[class=body] td.offset-by-eight,table[class=body] td.offset-by-eleven,table[class=body] td.offset-by-five,table[class=body] td.offset-by-four,table[class=body] td.offset-by-nine,table[class=body] td.offset-by-one,table[class=body] td.offset-by-seven,table[class=body] td.offset-by-six,table[class=body] td.offset-by-ten,table[class=body] td.offset-by-three,table[class=body] td.offset-by-two{padding-left:0!important}table[class=body] table.columns td.expander{width:1px!important}table[class=body] .text-pad-right{padding-left:10px!important}table[class=body] .text-pad-left{padding-right:10px!important}table[class=body] .hide-for-small,table[class=body] .show-for-desktop{display:none!important}table[class=body] .hide-for-desktop,table[class=body] .show-for-small{display:inherit!important}table[class=body] .right-text-pad{padding-left:10px!important}table.button,table.tiny-button{width:99%;overflow:visible!important}table[class=body] .left-text-pad{padding-right:10px!important}table[class=body] .row{width:95%!important}table[class=body] .row.header{width:100%!important}hr{width:95%!important}}@media only screen and (max-width:400px){hr,table[class=body] .row{width:94%!important}}
         /* Partial stylesheet for compatibility with WP image code */
         img[class*=align],img[class*=wp-image-]{height:auto}.wp-caption{max-width:100%}img.size-full,img.size-large{height:auto;max-width:100%}.alignleft{float:left}.alignright{float:right}.aligncenter{display:block;margin-left:auto;margin-right:auto}blockquote.alignleft,img.alignleft{margin:7px 24px 7px 0}.wp-caption.alignleft{margin:7px 14px 7px 0}blockquote.alignright,img.alignright{margin:7px 0 7px 24px}.wp-caption.alignright{margin:7px 0 7px 14px}.wp-caption.aligncenter,blockquote.aligncenter,img.aligncenter{margin-top:7px;margin-bottom:7px}.wp-caption{margin-bottom:24px}.wp-caption img[class*=wp-image-]{display:block;margin:0}.wp-caption{color:#767676}.wp-caption-text{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;font-style:italic;margin:9px 0;padding-right:10px;font-size:12px;line-height:1.5}.gallery{margin-bottom:20px}.gallery-item{float:left;margin:0 4px 4px 0;overflow:hidden;position:relative}.gallery-columns-1 .gallery-item{max-width:100%}.gallery-columns-2 .gallery-item{max-width:48%;max-width:-webkit-calc(50% - 4px);max-width:calc(50% - 4px)}.gallery-columns-3 .gallery-item{max-width:32%;max-width:-webkit-calc(33.3% - 4px);max-width:calc(33.3% - 4px)}.gallery-columns-4 .gallery-item{max-width:23%;max-width:-webkit-calc(25% - 4px);max-width:calc(25% - 4px)}.gallery-columns-5 .gallery-item{max-width:19%;max-width:-webkit-calc(20% - 4px);max-width:calc(20% - 4px)}.gallery-columns-6 .gallery-item{max-width:15%;max-width:-webkit-calc(16.7% - 4px);max-width:calc(16.7% - 4px)}.gallery-columns-7 .gallery-item{max-width:13%;max-width:-webkit-calc(14.28% - 4px);max-width:calc(14.28% - 4px)}.gallery-columns-8 .gallery-item{max-width:11%;max-width:-webkit-calc(12.5% - 4px);max-width:calc(12.5% - 4px)}.gallery-columns-9 .gallery-item{max-width:9%;max-width:-webkit-calc(11.1% - 4px);max-width:calc(11.1% - 4px)}.gallery-columns-1 .gallery-item:nth-of-type(1n),.gallery-columns-2 .gallery-item:nth-of-type(2n),.gallery-columns-3 .gallery-item:nth-of-type(3n),.gallery-columns-4 .gallery-item:nth-of-type(4n),.gallery-columns-5 .gallery-item:nth-of-type(5n),.gallery-columns-6 .gallery-item:nth-of-type(6n),.gallery-columns-7 .gallery-item:nth-of-type(7n),.gallery-columns-8 .gallery-item:nth-of-type(8n),.gallery-columns-9 .gallery-item:nth-of-type(9n){margin-right:0}.gallery-caption{background-color:rgba(0,0,0,.7);-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;color:#fff;font-size:12px;line-height:1.5;margin:0;max-height:50%;opacity:0;padding:6px 8px;position:absolute;bottom:0;left:0;text-align:left;width:100%}.gallery-caption:before{content:"";height:100%;min-height:49px;position:absolute;top:0;left:0;width:100%}.gallery-item:hover .gallery-caption{opacity:1}.gallery-columns-7 .gallery-caption,.gallery-columns-8 .gallery-caption,.gallery-columns-9 .gallery-caption{display:none}
      </style>
      <table class="body" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; height: 100%; width: 100%; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;">
         <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
            <td class="center" align="center" valign="top" style="border-collapse: collapse !important; vertical-align: top; text-align: center; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;">
               <center style="width: 100%; min-width: 320px;">
                  <table class="row header" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; position: relative; background: #00386b; padding: 0px;" bgcolor="#00386b">
                     <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                        <td class="center" align="center" style="border-collapse: collapse !important; vertical-align: top; text-align: center; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;" valign="top">
                           <center style="width: 100%; min-width: 320px;">
                              <table class="container" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: inherit; width: 580px; margin: 0 auto; padding: 0;">
                                 <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                                    <td class="wrapper last" style="border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 10px 0px 0px;" align="left" valign="top">
                                       <table class="twelve columns" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 580px; margin: 0 auto; padding: 0;">
                                          <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                                             <td class="six sub-columns" style="border-collapse: collapse !important; vertical-align: top; text-align: left; min-width: 0px; width: 50%; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0px 10px 10px 0px;" align="left" valign="top">
                                                <!-- Logo & Link -->
                                                <a href="http://www.utc.edu/" style="border: none; color: #ffffff; text-decoration: none; font-weight: normal; width: 100%;">
                                                <img src="//www.utc.edu/_resources/img/web-wordmark-retina.png" width="250" height="36" style="border: none; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; width: auto; max-width: 250px; float: left; clear: both; display: block;" align="left" border="0" />
                                                </a>
                                             </td>
                                             <td class="six sub-columns last" style="text-align: right; vertical-align: middle; border-collapse: collapse !important; min-width: 0px; width: 50%; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0px 0px 10px;" align="right" valign="middle">
                                                <!-- Site, Date meta, View link -->
                                                <span class="template-label" style="color: #e0aa0f; font-weight: bold; font-size: 11px;"><?php bloginfo( 'title' ); ?></span>
                                                <br /><span class="small-label" style="color: #7d97b0; font-weight: normal; font-style: italic; font-size: 11px;"><?php the_time('m/j/Y') ?>&nbsp;&nbsp;&nbsp;<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" style="color: #58799a; text-decoration: none; font-weight: bold; width: 100%;">View&nbsp;Online&nbsp;&rarr;</a></span>
                                             </td>
                                             <td class="expander" style="border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;" align="left" valign="top"></td>
                                          </tr>
                                       </table>
                                    </td>
                                 </tr>
                              </table>
                           </center>
                        </td>
                     </tr>
                  </table>
                  <table id="content" class="container" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: inherit; width: 580px; background: #ffffff; margin: 0 auto; padding: 0;" bgcolor="#ffffff">
                     <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                        <td style="border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;" align="left" valign="top">

                           <?php if (have_posts()) : ?>
                           <?php while (have_posts()) : the_post(); ?>
                           <!-- Parent post -->
							<?php if ( '' != get_the_post_thumbnail() ) : ?>
							<!-- Featured image -->
							<table style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: inherit; max-width: 100%; background: #ffffff; margin: 0 auto; padding: 0;">
							    <tbody>
							        <tr style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: inherit; max-width: 100%; background: #ffffff; margin: 0 auto; padding: 0;">
							            <td style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: inherit; width: 604px; max-width: 100%; background: #ffffff; margin: 0 auto; padding: 0;">
							               <?php // featured image at top of post
							               $medium_large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium-large'); ?>
							               <img src="<?php echo $medium_large_image_url[0] ?>" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; width: auto; max-width: 100%; float: left; clear: both; display: block;" align="left" />
							            </td>
							        </tr>
							    </tbody>
							</table>
							<?php else : ?>
							<!-- No thumbnail image -->
							<?php endif; ?>
                           <table class="row" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; position: relative; display: block; margin: 0px 12px; padding: 0px;">
                              <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">

                                 <td class="wrapper last" style="border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 10px 0px 0px;" align="left" valign="top">
                                    <table class="twelve columns" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; margin: 0 auto; padding: 0;">
                                       <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                                          <td style="border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0px 0px 10px;" align="left" valign="top">
                                             <!-- Parent post title -->
                                             <h1 style="color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; text-align: left; line-height: 1.0; font-size: 40px; margin: 0; padding: 0;" align="left"><?php the_title(); ?></h1>
                                             <!-- Parent post content -->
                                             <?php the_content(); ?>
                                          </td>
                                          <td class="expander" style="border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;" align="left" valign="top"></td>
                                       </tr>
                                    </table>
                                 </td>
                              </tr>
                           </table>
                           <?php //end loop for intro post
                           		endwhile; 
						   		endif;
						   		wp_reset_query();?>

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
						// How many days back?
						$days_back = 7;
						// date_query does not accept Unix timestamps currently
						// so we have to use date() to make it a string again
						$after_date = date( 'c', strtotime( "{$days_back} days ago", 
											mysql2date( 'U', $current_post->post_date_gmt ) ) );
						// run the query and return some posts
						$digest_posts = new WP_Query( array(
						    'date_query' => array(
						        array(
						            'before' => $current_post->post_date_gmt,
						            'after' => $after_date,
						            'column' => 'post_date_gmt',
						        ),
						    ),
						    'post__not_in' => array( $id ),
						    'posts_per_page' => -1,
						) );
						?>
						<?php while ( $digest_posts->have_posts() ): $digest_posts->the_post(); ?>
						
						   <hr style="color: #d9d9d9; height: 1px; background: #d9d9d9; border: none;" />
                           <table class="row" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; position: relative; display: block; margin: 0px 12px; padding: 0px;">
                              <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                                 <td class="wrapper" style="border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 10px 10px 0px 0px;" align="left" valign="top">
                                    <?php if ( '' != get_the_post_thumbnail() ) : ?>
									<!-- Thumbnail image -->
									<table class="three columns" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 130px; margin: 0 auto; padding: 0;">
									   <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
									      <td style="border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0px 0px 10px;" align="left" valign="top">
									         
									         <img width="130" height="130" src="<?php // featured image at top of post
									       if ( '' != get_the_post_thumbnail() ) {
									         $large_thumbnail_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large-thumbnail');
									         echo $large_thumbnail_image_url[0];
									       }
									       else { echo '<!-- no featured image -->'; }
									       
									?>" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; width: auto; max-width: 100%; float: left; clear: both; display: block;" align="left" />
									      </td>
									      <td class="expander" style="border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;" align="left" valign="top"></td>
									   </tr>
									</table>
									</td>
									<td class="wrapper last" style="border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 10px 0px 0px;" align="left" valign="top">
									<table class="nine columns" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 430px; margin: 0 auto; padding: 0;">
									   <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
									      <td style="border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0px 0px 10px;" align="left" valign="top">
									         <!-- Title -->
									         <h4 style="color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; text-align: left; line-height: 1.0; font-size: 28px; margin: 0; padding: 0;" align="left"><?php the_title(); ?></h4>
									         <!-- Excerpt -->
									         <?php the_excerpt( 'Read More »' ); ?>
									      </td>
									      <td class="expander" style="border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;" align="left" valign="top"></td>
									   </tr>
									</table>
									<?php else : ?>
									<!-- No thumbnail image -->
									<table class="twelve columns" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 560px; margin: 0 auto; padding: 0;">
									   <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
									      <td style="border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0px 0px 10px;" align="left" valign="top">
									         <!-- Title -->
									         <h4 style="color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; text-align: left; line-height: 1.0; font-size: 28px; margin: 0; padding: 0;" align="left"><?php the_title(); ?></h4>
									         <!-- Excerpt -->
									         <?php the_excerpt( 'Read More »' ); ?>
									      </td>
									      <td class="expander" style="border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;" align="left" valign="top"></td>
									   </tr>
									</table>
									<?php endif; ?>
                                 </td>
                              </tr>
                           </table>

                           <?php endwhile; ?>

                          
                           <table class="row footer" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; position: relative; display: block; margin: 12px 12px 0px; padding: 0px; width: 580px; background: #ebebeb;">
                              <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                                 <?php if (of_get_option('footer_social', '1')) : ?>
                                 <td class="wrapper" style="border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; background: #ebebeb; margin: 0; padding: 10px 10px 0px 0px;" align="left" bgcolor="#ebebeb" valign="top">
                                    <table class="six columns" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 280px; margin: 0 auto; padding: 0;">
                                       <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                                          <td class="left-text-pad" style="border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0px 0px 10px 10px;" align="left" valign="top">

                                             <?php if (of_get_option('fb_url')) : ?>
                                             <!-- Social -->
                                             <table class="tiny-button facebook" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; overflow: hidden; padding: 0; margin-bottom: 12px;">
                                                <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                                                   <td style="border-collapse: collapse !important; vertical-align: top; text-align: center; color: #ffffff; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; display: block; width: auto !important; background: #3b5998; margin: 0; padding: 5px 0 4px; border: 1px solid #2d4473;" align="center" bgcolor="#3b5998" valign="top">
                                                      <a href="<?php echo of_get_option( 'fb_url' ); ?>" style="color: #ffffff; text-decoration: none; font-weight: normal; font-family: Helvetica, Arial, sans-serif; font-size: 12px; display: block; height: 100%; width: 100%;">Facebook</a>
                                                   </td>
                                                </tr>
                                             </table>
                                             <?php endif; ?>
                                             <?php if (of_get_option('twitter_url')) : ?>
                                             <!-- Social -->
                                             <table class="tiny-button twitter" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; overflow: hidden; padding: 0; margin-bottom: 0px;">
                                                <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                                                   <td style="border-collapse: collapse !important; vertical-align: top; text-align: center; color: #ffffff; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; display: block; width: auto !important; background: #00acee; margin: 0; padding: 5px 0 4px; border: 1px solid #0087bb;" align="center" bgcolor="#00acee" valign="top">
                                                      <a href="<?php echo of_get_option( 'twitter_url' ); ?>" style="color: #ffffff; text-decoration: none; font-weight: normal; font-family: Helvetica, Arial, sans-serif; font-size: 12px; display: block; height: 100%; width: 100%;">Twitter</a>
                                                   </td>
                                                </tr>
                                             </table>
                                             <?php endif; ?>
                                          </td>
                                          <td class="expander" style="border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;" align="left" valign="top"></td>
                                       </tr>
                                    </table>
                                 </td>
                                 <?php endif; ?>
                                 <td class="wrapper last" style="border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; background: #ebebeb; margin: 0; padding: 10px 0px 0px; width: 290px;" align="left" bgcolor="#ebebeb" valign="top">
                                    <table class="six columns" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 280px; margin: 0 auto; padding: 0;">
                                       <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                                          <td class="last right-text-pad" style="border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0px 0px 10px 10px;" align="left" valign="top">
                                             <!-- Theme Option -->
                                             <?php
											    $powered_text = of_get_option('powered_text');
											      if ($powered_text){ ?>
											      <?php echo $powered_text ?>
											    <?php } else { ?>
											   <p style="color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 14px; margin: 0 0 10px; padding: 0; width:100%;" align="left"><a href="http://www.utc.edu/" style="color:#e0aa0f; text-decoration:underline">The University of Tennessee at Chattanooga</a><br />
											   <a href="<?php bloginfo('url'); ?>" style="color:#e0aa0f; text-decoration:underline"><?php bloginfo( 'title' ); ?></a><br/>615 McCallie Ave | Chattanooga, TN 37403<br/>Phone: (423) 425-4111</p>
											  <?php } ?>
                                          </td>
                                          <td class="expander" style="border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;" align="left" valign="top"></td>
                                       </tr>
                                    </table>
                                 </td>
                              </tr>
                           </table>
                           <table class="row" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; position: relative; display: block; margin: 0px 12px; padding: 0px;">
                              <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                                 <td class="wrapper last" style="border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 10px 0px 0px;" align="left" valign="top">
                                    <table class="twelve columns" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 580px; margin: 0 auto; padding: 0;">
                                       <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                                          <td class="expander" style="border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 2px;" align="left" valign="top"></td>
                                       </tr>
                                    </table>
                                 </td>
                              </tr>
                           </table>
                           <!-- Container end below -->
                        </td>
                     </tr>
                  </table>
                  <table class="twelve columns" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 580px; margin: 0 auto; padding: 0;">
                     <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                        <td class="wrapper fineprint" style="border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; height: 44px; margin: 0; padding: 0px 0px 10px;" align="left" valign="top">
                           <p style="color: #999999; font-family: Helvetica,Arial, sans-serif; font-weight: normal; text-align: center; line-height: 12px; font-size: 10px; margin: 10px 10px 10px; padding: 0;" align="center">Engaging students, Inspiring change, and Enriching community.</p>
                           <p style="color: #999999; font-family: Helvetica,Arial, sans-serif; font-weight: normal; text-align: center; line-height: 12px; font-size: 10px; margin: 6px 10px 10px; padding: 0;" align="center">The University of Tennessee at Chattanooga is a comprehensive, community-engaged campus of the University of Tennessee System.</p>
                        </td>
                     </tr>
                  </table>
               </center>
            </td>
         </tr>
      </table>
   </body>
</html>
