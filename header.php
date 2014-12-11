<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
	#secondary, #page{
		background: #C8C8C8;
	}
</style>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<!-- <title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title> -->
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script src="http://libs.baidu.com/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://www.sunsean.com/idTabs/jquery.idTabs.min.js"></script>
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<?php
	// hide specific post or page
    //$noindex = get_post_meta($post->ID, 'noindex-post', true);

    //if ($noindex) {
    //    echo '<meta name="robots" content="noindex,nofollow" />';
    //}
?>
<!-- <meta name="viewport" content="width=device-width" /> -->
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=2" />
<!-- mobile style -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/mobile.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">

	<header id="branding" role="banner">
			<hgroup>
				<!--left-->
                <h1 id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><span id="site-description"><?php bloginfo( 'description' ); ?></span></h1>
                <div class="mobile-button">
                    <button class="button-toggle"></button>
                </div>
                <!--right-->
                <div class="site-right">
                  <ul>
                    <li>客户专线 <b class="greenA f14">400-027-0163</b></li>
                    <li><a target="_blank" href="http://bbs.fenxibao.com/forum.php
"><i class="iconCRMBBS"></i>CRM论坛</a></li>
                    <!--<li><a href="javascript:"><i class="iconMessage"></i>留言区</a></li>-->
                  </ul>

                  <?php
				// Has the text been hidden?
				if ( 'blank' == get_header_textcolor() ) :
			?>
				<div class="only-search<?php if ( $header_image ) : ?> with-image<?php endif; ?>">
				<?php get_search_form(); ?>
				</div>
			<?php
				else :
			?>
				<?php get_search_form(); ?>
			<?php endif; ?>

                </div>
			</hgroup>

            <nav id="access" role="navigation">
                  <h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
                  <?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
                  <div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
                  <div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
                  <?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
                  <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>



            </nav><!-- #access -->
<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div id="first" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div><!-- #first .widget-area -->
	<?php endif; ?>



	</header><!-- #branding -->

     <div class="locationDiv"><div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div></div>
	<div id="main">
