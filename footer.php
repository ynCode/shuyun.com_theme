<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

    </div>
	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<!--<?php do_action( 'twentyeleven_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>-->
                <!--left-->
                <div class="foot_left">
                <!--logo-->
                  <span class="sy_logo"></span><wb:follow-button uid="2102331613" type="red_1" width="67" height="24" ></wb:follow-button>
                  <p class="gray32"><a href="/sitemap">网站地图</a><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span><a href="/link">友情链接</a><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span><a href="/aboutus/contact/">联系我们</a><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span><a href="/legal-disclaimer">法律声明</a></p>
                  <p class="gray32"><div class="fl"><a target="_blank" href="http://www.miibeian.gov.cn/publish/query/indexFirst.action">浙ICP备12003970号-1</a>&nbsp;&nbsp;</div>

<!-- CNZZ代码 开始 -->
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cdiv id='cnzz_stat_icon_1000030848'%3E%3C/div%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1000030848%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
<!-- CNZZ代码 结束 -->

</p>
                  <p class="graya3 clear">©Copyright 2010 - 2013 shuyun Co.,Ltd All Rights Reserved.&nbsp;&nbsp;杭州数云&nbsp;版权所有</p>
                </div>
                <!--right-->
                <div class="foot_right">
                  <table width="410">
                    <tr>
                      <td width="310" height="70">
                        <table width="329">
                          <tr>
                            <td width="321" height="20" class="gray39">数云热线：400-027-0163<span class="graya3"></span></td>
                          </tr>
                          <tr>
                            <td height="20" class="gray39">数云客服：<a id="wh3" target="_blank" class="gray3d mar5" href="http://wpa.qq.com/msgrd?v=3&uin=800016177&site=qq&menu=yes"><i class="QQCustomer"></i>QQ客服</a><a id="wh4" target="_blank" class="gray3d mar5" href="http://amos.im.alisoft.com/msg.aw?v=2&uid=%E6%95%B0%E6%8D%AE%E8%B5%A2%E5%AE%B6&site=cntaobao&s=1&charset=utf-8"><i class="WWCustomer"></i>旺旺客服</a><span class="gray3d"></span></td>
                          </tr>
                          <tr>
                            <td height="30" align="right"><a  key ="5223f91124306332d31f3341"  logo_size="83x30"  logo_type="realname"  href="http://www.anquan.org" ><script src="http://static.anquan.org/static/outer/js/aq_auth.js"></script></a></td>
                          </tr>
                        </table>
                      </td>
                      <td width="70" height="70"><!--数云微信二维码--><a class="Qr_code" href="javascript:"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/weixinimg.jpg" width="66" height="66" title="数云微信二维码" /></a></td>
                    </tr>
                  </table>
                </div>
			</div>
	</footer><!-- #colophon <img src="http://newhelp.fenxibao.com/wp-content/uploads/2013/10/cnzz.png" width="50" height="12" /><img src="http://newhelp.fenxibao.com/wp-content/uploads/2013/10/SafetyCertification.png" width="83" height="30" />-->
</div><!-- #page -->
<!--右侧快捷 在线客服 回到顶部-->
<script type='text/javascript'>
    $(function() {
        $.fn.scrollToTop = function() {
            $(this).removeAttr("href");
            if ($(window).scrollTop() != "0") {
               $(this).fadeIn("slow")
            }
            var scrollDiv = $(this);
            //$(window).scroll(function() {
               //if ($(window).scrollTop() == "0") {
               //    $(scrollDiv).fadeOut("slow")
              //  } else {
                //   $(scrollDiv).fadeIn("slow")
              // }
           // });
            $(".toTop").click(function() {
               $("html, body").animate({
                   scrollTop: 0
               }, "slow")
            })
        }
    });
    $(function() {
        $("#w2b-StoTop").scrollToTop();
    });
</script>
<ul id="w2b-StoTop" style="z-index:9999;">
	<li class="wangwang"><a id="wh1" target="_blank" href="http://amos.im.alisoft.com/msg.aw?v=2&uid=%E6%95%B0%E6%8D%AE%E8%B5%A2%E5%AE%B6&site=cntaobao&s=1&charset=utf-8">旺旺客服</a></li>
	<li class="qq"><a id="wh2" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=800016177&site=qq&menu=yes">企业客服</a></li>
	<li class="toTop"><a href="#">回到顶部</a></li></ul>

<?php wp_footer(); ?>

<!--百度代码 开始 -->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fb38d171977e551b47af11be52881be17' type='text/javascript'%3E%3C/script%3E"));
</script>
<!--百度代码 结束 -->





</body>
</html>
