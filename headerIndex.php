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
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<!--<![endif]-->
<head>
<title><?php
    /*
     * Print the <title> tag based on what is being viewed.
     */
    global $page, $paged;

    wp_title( '|', true, 'right' );

/*  // Add the blog name.
    bloginfo( 'name' );*/

/*  // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";

    // Add a page number if necessary:
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );*/

    ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="description" content="数云-中国电子商务CRM领导品牌，为B2C零售企业提供新一代精准营销软件产品和服务。包含了客户关系管理（CRM）和商业智能（BI）两大产品线，其主打产品数据赢家">
<meta name="keywords" content="数云，数据赢家，电商crm，淘宝crm，crm">
<meta name="baidu-site-verification" content="W4rQZicAc0" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<!-- 首页我们的客户js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/AC_RunActiveContent.js" type="text/javascript"></script>
<!-- 新轮播需要的js和css -->
 <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/Vizo-style.css" />
<!-- jQuery -->
<script src="http://libs.baidu.com/jquery/1.7.1/jquery.min.js"></script>

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
<!-- <meta name="viewport" content="width=device-width" /> -->
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=2" />
<!-- mobile style -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/mobile.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed indexFoot">
    <header id="branding" role="banner">
            <hgroup>
                <!--left-->
                <h1 id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><span id="site-description"><?php bloginfo( 'description' ); ?></span></h1>
                <!--right-->
                <div class="site-right">
                  <ul>
                    <li>客户专线 <b class="greenA f14">400-027-0163</b></li>
                    <li><a target="_blank" href="http://bbs.fenxibao.com/forum.php"><i class="iconCRMBBS"></i>CRM论坛</a></li>
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

<!-- 新轮播 -->

<div id="Slidebox">
  <!--flash begin-->
  <div id="flashBg">
    <div id="flashLine">
      <div id="flash">
    <a name="#00312d" style="display:block;" id="flash1" target="_blank" href="http://www.shuyun.com/%E6%95%B0%E4%BA%91newbi%E8%87%AA%E5%AE%9A%E4%B9%89%E6%8A%A5%E8%A1%A8%E5%85%8D%E8%B4%B9%E8%AF%95%E7%94%A8/"></a>
      <a name="#001e33" id="flash2" target="_blank" href="http://www.shuyun.com/?p=5539"></a>
      <a name="#83c75a"  id="flash3" target="_blank" href=""></a>
      <a name="#1a2632" id="flash4" target="_blank" href="/products/enterprise-crm-software/product-presentation/"></a>
    <a name="#14263A" id="flash5" target="_blank" href="/campus"></a>
        <div class="flash_bar">
          <div class="dq"  id="f1" onclick="changeflash(1)"></div>
          <div class="no"  id="f2" onclick="changeflash(2)"></div>
          <div class="no"  id="f3" onclick="changeflash(3)"></div>
      <div class="no"  id="f4" onclick="changeflash(4)"></div>
      <div class="no"  id="f5" onclick="changeflash(5)"></div>
        </div>
      </div>
    </div>
  </div>


<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){
$(".item1").hover(function(){$("#tit_fc1").slideDown("slow");   }, function() {$("#tit_fc1").slideUp("slow");});
$(".item2").hover(function(){$("#tit_fc2").slideDown("slow");   }, function() {$("#tit_fc2").slideUp("slow");});
$(".item3").hover(function(){$("#tit_fc3").slideDown("slow");   }, function() {$("#tit_fc3").slideUp("slow");});
$(".item4").hover(function(){$("#tit_fc4").slideDown("slow");   }, function() {$("#tit_fc4").slideUp("slow");});
});
var currentindex=1;
$("#flashBg").css("background-color",$("#flash1").attr("name"));
function changeflash(i) {
currentindex=i;
for (j=1;j<=5;j++){//此处的5代表你想要添加的幻灯片的数量与下面的5相呼应
    if (j==i)
    {$("#flash"+j).fadeIn("slow");
    $("#flash"+j).css("display","block");
    $("#f"+j).removeClass();
    $("#f"+j).addClass("dq");
    $("#flashBg").css("background-color",$("#flash"+j).attr("name"));
    }
    else
    {$("#flash"+j).css("display","none");
    $("#f"+j).removeClass();
    $("#f"+j).addClass("no");}
}}
function startAm(){
timerID = setInterval("timer_tick()",5000);//5000代表间隔时间设置
}
function stopAm(){
clearInterval(timerID);
}
function timer_tick() {
    currentindex=currentindex>=5?1:currentindex+1;//此处的5代表幻灯片循环遍历的次数
    changeflash(currentindex);}
$(document).ready(function(){
$(".flash_bar div").mouseover(function(){stopAm();}).mouseout(function(){startAm();});
startAm();
});

 //]]>
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/banner.js"></script>
    </header>
<!-- #branding -->

    <div id="main">
