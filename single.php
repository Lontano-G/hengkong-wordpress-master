<?php get_header() ?>
<style type="text/css">
	body{
		width: 1024px;
		margin: 0 auto;
	}
	.nav_left{
		display: none !important;
	}
	.bdsharebuttonbox{
		display: none;
	}
	.single-content br{
		display: none;
	}
	.phonenav{
		display: none;
	}

		</style>
<div id="category_content">
		<!-- <p>当前位置：关于我们>公司简介</p> -->
		<?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?>
		<!-- <h2>公司简介</h2> -->
		<div class="title_border"></div>
		<div class="content_text">
			<!-- Column 1 /Content -->
	   		<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
	    	</br>
			<div class="single-grid">
				<!-- Blog Post -->
				<div class="post">
					<!-- Post Title -->
					<div class="single-title"><h3 class="title"><?php the_title(); ?></h3></div></br>
					<div class="singles-tags"><?php the_tags('  标签：', ', ', ''); ?>&nbsp<?php the_time('Y年n月j日') ?>&nbsp<?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?>
					</div></br>
					
					<span class="single-content"><?php the_content(); ?></span>
				</div>
			</div>
    		<?php else : ?>
		    <div class="errorbox">
		        没有文章！
		    </div>
    		<?php endif; ?>
        </div>
</div>
		<div style="margin-top: 30px;" id="single-comment">
			分享到：<div class="bdsharebuttonbox" style="display: block !important;margin-top: -30px;margin-left: 70px;"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a><a href="#" class="bds_fbook" data-cmd="fbook" title="分享到Facebook"></a><a href="#" class="bds_linkedin" data-cmd="linkedin" title="分享到linkedin"></a><a href="#" class="bds_twi" data-cmd="twi" title="分享到Twitter"></a></div>
			<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin","douban","fbook","linkedin","twi"]}};with(document)0[(getElementsByTagName("head")[0]||body).appendChild(createElement("script")).src="http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion="+~(-new Date()/36e5)];</script>
		</div>
		<?php comments_template(); ?>
	</br>
	<div><?php get_footer(); ?></div>