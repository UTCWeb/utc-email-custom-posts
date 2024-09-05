<?php
/**
 * Template Name: Newsletter Letterhead Template
 * Template Post Type: utcblogs_newsletter
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--[if gte mso 9]><xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <!--Variables-->
    <title><?php the_title(); ?> | <?php bloginfo( 'name' ); ?></title>
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
    <style>/* internal stylesheet for compatibility with WP image code */
    img[class*=align],img[class*=wp-image-]{height:auto}.wp-caption{max-width:100%}img.size-full,img.size-large{height:auto;max-width:100%}.alignleft{float:left}.alignright{float:right}.aligncenter{display:block;margin-left:auto;margin-right:auto}blockquote.alignleft,img.alignleft{margin:7px 24px 7px 0}.wp-caption.alignleft{margin:7px 14px 7px 0}blockquote.alignright,img.alignright{margin:7px 0 7px 24px}.wp-caption.alignright{margin:7px 0 7px 14px}.wp-caption.aligncenter,blockquote.aligncenter,img.aligncenter{margin-top:7px;margin-bottom:7px}.wp-caption{margin-bottom:24px}.wp-caption img[class*=wp-image-]{display:block;margin:0}.wp-caption{color:#767676}.wp-caption-text{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;font-style:italic;margin:9px 0;padding-right:10px;font-size:12px;line-height:1.5}.gallery{margin-bottom:20px}.gallery-item{float:left;margin:0 4px 4px 0;overflow:hidden;position:relative}.gallery-columns-1 .gallery-item{max-width:100%}.gallery-columns-2 .gallery-item{max-width:48%;max-width:-webkit-calc(50% - 4px);max-width:calc(50% - 4px)}.gallery-columns-3 .gallery-item{max-width:32%;max-width:-webkit-calc(33.3% - 4px);max-width:calc(33.3% - 4px)}.gallery-columns-4 .gallery-item{max-width:23%;max-width:-webkit-calc(25% - 4px);max-width:calc(25% - 4px)}.gallery-columns-5 .gallery-item{max-width:19%;max-width:-webkit-calc(20% - 4px);max-width:calc(20% - 4px)}.gallery-columns-6 .gallery-item{max-width:15%;max-width:-webkit-calc(16.7% - 4px);max-width:calc(16.7% - 4px)}.gallery-columns-7 .gallery-item{max-width:13%;max-width:-webkit-calc(14.28% - 4px);max-width:calc(14.28% - 4px)}.gallery-columns-8 .gallery-item{max-width:11%;max-width:-webkit-calc(12.5% - 4px);max-width:calc(12.5% - 4px)}.gallery-columns-9 .gallery-item{max-width:9%;max-width:-webkit-calc(11.1% - 4px);max-width:calc(11.1% - 4px)}.gallery-columns-1 .gallery-item:nth-of-type(1n),.gallery-columns-2 .gallery-item:nth-of-type(2n),.gallery-columns-3 .gallery-item:nth-of-type(3n),.gallery-columns-4 .gallery-item:nth-of-type(4n),.gallery-columns-5 .gallery-item:nth-of-type(5n),.gallery-columns-6 .gallery-item:nth-of-type(6n),.gallery-columns-7 .gallery-item:nth-of-type(7n),.gallery-columns-8 .gallery-item:nth-of-type(8n),.gallery-columns-9 .gallery-item:nth-of-type(9n){margin-right:0}.gallery-caption{background-color:rgba(0,0,0,.7);-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;color:#fff;font-size:12px;line-height:1.5;margin:0;max-height:50%;opacity:0;padding:6px 8px;position:absolute;bottom:0;left:0;text-align:left;width:100%}.gallery-caption:before{content:"";height:100%;min-height:49px;position:absolute;top:0;left:0;width:100%}.gallery-item:hover .gallery-caption{opacity:1}.gallery-columns-7 .gallery-caption,.gallery-columns-8 .gallery-caption,.gallery-columns-9 .gallery-caption{display:none}
    /* additional internal styles */
    sup {font-size: smaller; line-height: 8px;}
    </style>
<?php
if ( function_exists( 'yoast_analytics' ) ) {
  yoast_analytics();
}
?>
</head>

<body bgcolor="#f1f1f1"  style="background:#f1f1f1;margin:0;padding:0;mso-padding-alt: 0px 0px 0px 0px;"><style type="text/css">div#emailPreHeader{ display: none !important; }</style><div id="emailPreHeader" style="mso-hide:all; visibility:hidden; opacity:0; color:transparent; mso-line-height-rule:exactly; line-height:0; font-size:0px; overflow:hidden; border-width:0; display:none !important;">UTC Email pre-header</div>

<!-- Begin header table -->
<table width="600" border="0" cellspacing="0" cellpadding="10" align="center" bgcolor="#f1f1f1">
  <tr>
    <td align="center" style="font-family:Helvetica,Arial, sans-serif; font-size:12px; line-height:18px; color:#444444"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" style="color:#58799a; text-decoration:underline">View Online&nbsp;&rarr;</a></td>
  </tr>
</table>

<!-- Begin masthead table -->
<table width="600" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff">
  <tr>
    <td>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	  <table width="600" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
        	<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo( 'description' ); ?>">
        		<img src="<?php // featured image at top of post
							 if ( has_post_thumbnail()) {
							   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
							   echo $large_image_url[0];
							 }
							 else { echo 'https://via.placeholder.com/600x173&text=Featured+Image+exactly+600px+by+173px'; }
							?>" width="600" height="173" alt="<?php bloginfo( 'description' ); ?>" border="0" />
			</a>
		</td>
      </tr>
      <tr>
      <td>
      	<!-- Begin main content table -->
      	<table width="580" border="0" cellspacing="15" cellpadding="0" align="center">
      		<?php $title = get_the_title(); //Untitled set by theme function
      		      if ($title == 'Untitled') : ?>
      		<!-- Untitled -->
      		<?php else : ?>
      		<!-- Title -->
      		<tr>
      		<td style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:20px; line-height:28px; color:#58799a"><?php the_title(); ?></td>
      		</tr><?php endif; ?>
            <tr>
    		<td style="font-family:Helvetica,Arial, sans-serif; font-size:12px; line-height:18px; color:#333333">
	            	<?php the_content(__('Read more &#8250;')); ?>            
           	</td>
  			</tr>
      	</table>
	<?php endwhile; ?>
	<?php else : ?>
      <table width="600" border="0" cellspacing="0" cellpadding="0">
      <tr>
      <td>
      	<!-- Begin main content table -->
      	<table width="580" border="0" cellspacing="15" cellpadding="0" align="center">
      		<tr>
    		<td style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:20px; line-height:28px; color:#58799a"><?php the_title(); ?></td>
  			</tr>
            <tr>
    		<td style="font-family:Helvetica,Arial, sans-serif; font-size:12px; line-height:18px; color:#333333">
	
				        <h1 class="title-404"><?php _e('404 &#8212; Fancy meeting you here!', 'responsive'); ?></h1>
				        <p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'responsive'); ?></p>
				        <h6><?php _e( 'You can return', 'responsive' ); ?> <a href="<?php echo home_url(); ?>/" title="<?php esc_attr_e( 'Home', 'responsive' ); ?>"><?php _e( '&#9166; Home', 'responsive' ); ?></a> <?php _e( 'or search for the page you were looking for', 'responsive' ); ?></h6>
				        <?php get_search_form(); ?>
           	</td>
  			</tr>
      	</table>
	<?php endif; ?>   
      </td>
      </tr>
      <tr>
        <td bgcolor="#00386b">
        	<!-- Begin footer table -->
            <table width="580" border="0" cellspacing="15" cellpadding="0" align="center">
  				<tr>
    			<td>
                <!-- Begin footer three column table -->
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
  					<tr>
    				<td style="font-family:Helvetica,Arial, sans-serif; font-size:11px; line-height:16px; color:#FFFFFF" align="left">
						<?php
						    $powered_text = of_get_option('powered_text');
						      if ($powered_text){ ?>       
						    <?php echo $powered_text ?>
						    <?php } else { ?>
						   <a href="https://www.utc.edu/" style="color:#e0aa0f; text-decoration:underline">The University of Tennessee at Chattanooga</a><br />
						   <a href="<?php bloginfo('url'); ?>" style="color:#e0aa0f; text-decoration:underline"><?php bloginfo( 'title' ); ?></a><br/>615 McCallie Ave | Chattanooga, TN 37403<br/>Phone: (423) 425-4111</td>
						  <?php } ?>
      				<td width="7%">
                    <!-- Begin social media icons table -->
                    <?php if(of_get_option('footer_social', '1')) {
	                   echo '<table width="100%" border="0" cellspacing="0" cellpadding="0">'
	  						.'<tr>';
	    					if (of_get_option('twitter_url')) echo '<td align="center"><a href="' . of_get_option( 'twitter_url' ) . '">'
													.'<img src="https://www.utc.edu/_resources/img/twitter.png" width="20" height="20" alt="Follow on Twitter" border="0" />'
													.'</a>'
													.'</td>';
	  						echo '</tr>'
	  							.'<tr>';
	    					if (of_get_option('fb_url')) echo '<td align="center"><a href="' . of_get_option('fb_url') . '">'
													.'<img src="https://www.utc.edu/_resources/img/facebook.png" width="20" height="20" alt="Find on Facebook" border="0" />'
													.'</a>'
													.'</td>';
	  						echo '</tr>'
						.'</table>'; 
					} ?>
                    </td>
    				<td align="center"><a href="https://www.utc.edu" target="_blank"><img src="<?php echo plugin_dir_url( __FILE__ ).'assets/img/web-wordmark-retina.png'; ?>" width="250" height="36" alt="UT icon" border="0" /></a></td>
  					</tr>
				</table>
				
                </td>
  				</tr>
			</table>
        </td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="600" border="0" cellspacing="0" cellpadding="10" align="center" bgcolor="#F1F1F1">
  <tr>
    <td align="center" style="font-family:Helvetica,Arial, sans-serif; font-size:10px; line-height:12px; color:#999999"><p>Engaging students, Inspiring change, and Enriching community.</p>
	    <p>The University of Tennessee at Chattanooga is a comprehensive, <br />community-engaged campus of the University of Tennessee System.</p>
    </td>
  </tr>
</table>

</body>
</html>
