<?php get_header() ?>
<style type="text/css">
body{
		width: 1024px;
		margin: 0 auto;
	}
	.nav_left{
		display: none !important;
	}
	#category_content{
	z-index: 1;
	font-family: 微软雅黑;
	width: 940px;
	padding-left: 40px;
	padding-right: 40px;
	margin: 10px auto 0px;
	background: #fff;
	padding-bottom: 30px;
}
#category_content h3{
	margin-top: 20px;
	border-bottom: 2px solid #fff;
	text-align: center;
}
#category_content a h3:hover{
	color: #ff7800;
}
.title_border{
	height: 10px;
	border-bottom: 2px solid #e1e1e1;
	border-radius: 10px;
	margin-left: -20px;
	width: 980px;
	box-shadow: 5px 5px 5px #f7f7f7;
}
.content_text{
	margin-top: 20px;
	width: 880px;
	/*height: 250px;*/
	padding: 30px;
	border-top:0.5px solid #e1e1e1;
	border-right:0.5px solid #e1e1e1;
	border-left:2px solid #e1e1e1;
	border-bottom: 2px solid #e1e1e1;
	box-shadow: -10px 10px 10px #f7f7f7;
	border-radius: 10px;
	font-family: 微软雅黑;
	font-size: 16;
	text-indent: 2em;
	/*color: #4f4f4f;*/
}
.content_text p{
	margin: 12px 30px;
}
.phonenav{
		display: none;
	}
</style>
		<div id="category_content">
		<?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?>
		<div class="title_border"></div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="content_text">
			<a href="<?php the_permalink(); ?>">
					<h3><?php the_title() ?></h3>
					<div class="artmes" style="width: 96%;">
						<?php the_tags('  标签：', ', ', ''); ?>&nbsp<?php the_time('Y年n月j日') ?>&nbsp<?php comments_popup_link('查看评论', '查看评论', '% 条评论', '', '评论已关闭'); ?>
					</div>
					<p style="line-height: 24px;color: #777;"><?php the_excerpt(); ?></p>
			</a>
		</div>
		<?php endwhile; ?>
		<div class="page_navi"><?php par_pagenavi(3); ?></div>
		 <?php else : ?>
            <h3 class="title"><a href="#" rel="bookmark">未找到</a></h3>
            <p>没有找到任何文章！</p>
            <?php endif; ?>
		</div>
	<?php get_footer() ?>