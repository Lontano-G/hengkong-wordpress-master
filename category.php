	<?php get_header() ?>
	<style type="text/css">
	body{
		width: 1024px;
		margin: 0 auto;
	}
	.nav_left{
		display: none !important;
	}
	.phonenav{
		display: none;
	}
		</style>
<script type="text/javascript">
//window.onload = function(){
    //function loadCSS() {
    	//var phonenav = document.getElementById('phonenav');

     //if((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|wOSBrowser|BrowserNG|WebOS)/i))) {

         //   phonenav.style.display = 'none';

       // }

        //else {

           // document.write('<link href="<?php bloginfo('template_url'); ?>/css/pc.css" rel="stylesheet" type="text/css" media="screen" />');

        //}

    //}

    //loadCSS();
//}
</script>
	<div id="category_content">
		<!-- <p>当前位置：关于我们>公司简介</p> -->
		<?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?>
		<div class="title_border"></div>
		<!-- <h4>图文列表</h4> -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="content_text1">
		    <!-- <p><a href="<?php the_permalink(); ?>"><div><h3><?php the_title(); ?></h3></a></p> -->
			<div class="cate-img"><p><a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image(); ?>" /></a></p></div>
			<div class="cate-content">
				<a href="<?php the_permalink(); ?>">
					<h3><?php the_title() ?></h3>
					<div class="artmes">
						<?php the_tags('  标签：', ', ', ''); ?>&nbsp<?php the_time('Y年n月j日') ?>&nbsp<?php comments_popup_link('查看评论', '查看评论', '% 条评论', '', '评论已关闭'); ?>
					</div>
					<p style="line-height: 24px;color: #777;"><?php the_excerpt(); ?></p>
				</a>
			</div>
		</div>

		  
		<?php endwhile; ?>
			<div class="page_navi"><?php par_pagenavi(3); ?></div>
            <?php else : ?>
            <h3 class="title"><a href="#" rel="bookmark">未找到</a></h3>
            <p>没有找到任何文章！</p>
            <?php endif; ?>
		
	</div>
	<div class="footer_cate">
	</div>
	<?php get_footer() ?>

