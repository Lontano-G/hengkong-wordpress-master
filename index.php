<?php get_header() ?>
<?php get_banner() ?>

<div class="content">

	<div class="content_top">

		<div class="ct_nav_bottom">

			<ul>

				<li class="ct_nav_bottom_1"><a href="http://www.cnhkjt.com/hengkong/?p=293">大连油</a></li>

				<li class="ct_nav_bottom_2"><a href="http://www.cnhkjt.com/hengkong/?p=210">再生银</a></li>

				<li class="ct_nav_bottom_3"><a href="http://www.cnhkjt.com/hengkong/?p=289">再生镍</a></li>

				<li class="ct_nav_bottom_2"><a href="http://www.cnhkjt.com/hengkong/?p=291">湘银</a></li>

				<li class="ct_nav_bottom_1"><a href="http://www.cnhkjt.com/hengkong/?p=296">沥青</a></li>

				<li class="ct_nav_bottom_2"><a href="http://www.cnhkjt.com/hengkong/?p=298">天然气</a></li>
				<li class="ct_nav_bottom_1"><a href="http://www.cnhkjt.com/hengkong/?p=212">铜</a></li>
				<li class="ct_nav_bottom_2"><a href="http://www.cnhkjt.com/hengkong/?p=204">镍</a></li>
				<li class="ct_nav_bottom_1"><a href="http://www.cnhkjt.com/hengkong/?p=202">稻</a></li>

			</ul>

		</div>

		<div class="ct_video">

			<div class="slider">

		      <ul>
				<?php query_posts('cat=14&showposts=4&paged='.$page_num); ?> 
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		        <li><a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image(); ?>" alt=""></a></li>
				<?php endwhile; ?>
				<?php else : ?>
					<p style="width: 200px;">文章仍在更新中</p>
				<?php endif; ?>
		      </ul> 

    		</div>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/yxMobileSlider.js"></script>

  <script>

    $(".slider").yxMobileSlider({width:720,height:363,during:3000})

  </script>
		</div>

		<div class="ct_register">
		   <div class="ct_register_top">
			   	<a href="http://www.cnhkjt.com/hengkong/开户/" class="register1">实盘开户</a>
				<a href="http://www.cnhkjt.com/hengkong/模拟开户/" class="register2">模拟盘开户</a>
				<a href="http://www.cnhkjt.com/hengkong/%E5%9C%A8%E7%BA%BF%E5%8A%A0%E7%9B%9F%E7%94%B3%E8%AF%B7/" class="register3">在线加盟申请</a>

		   </div>

		   <div class="ct_register_bottom">
				<li><img src="<?php bloginfo('template_url'); ?>/images/tianping.png" alt=""><span>杠杆原理</span></li>
				<li><img src="<?php bloginfo('template_url'); ?>/images/diqiu.png" alt=""><span>T-O交易</span></li>
				<li><img src="<?php bloginfo('template_url'); ?>/images/shuangjiantou.png" alt=""><span>22小时交易</span></li>
				<li><img src="<?php bloginfo('template_url'); ?>/images/shou.png" alt=""><span>双向交易</span></li>
		   	

		   </div>

			

		</div>

		

	</div>

	<div class="heat">
		<h2><span>公告信息</span></h2>
	<div class="heatSearch">
		<div class="heatSearch_show">
			<div class="heatSearch_title">
				<h1>公司公告</h1>
				<a href="<?php bloginfo('url'); ?>/?cat=9">更多</a>
			</div>
			<?php query_posts('cat=9&showposts=6&paged=.$page_num'); ?>
			<ul>
			<?php while (have_posts()) : the_post();?>
				<li class="heatSearch_1"><span></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
			</ul>
		</div>
		<div class="heatSearch_show heatSearch_show2">
			<div class="heatSearch_title">
				<h1>大连再生资源交易中心</h1>
				<a href="<?php bloginfo('url'); ?>/?cat=42">更多</a>
			</div>
			<?php query_posts('cat=42&showposts=6&paged=.$page_num'); ?>
			<ul>
			<?php while (have_posts()) : the_post();?>
				<li class="heatSearch_1"><span></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
			</ul>
		</div>
		<div class="heatSearch_show heatSearch_show2">
			<div class="heatSearch_title">
				<h1>湖南澳鑫商品交易市场</h1>
				<a href="<?php bloginfo('url'); ?>/?cat=43">更多</a>
			</div>
			<?php query_posts('cat=43&showposts=6&paged=.$page_num'); ?>
			<ul>
			<?php while (have_posts()) : the_post();?>
				<li class="heatSearch_1"><span></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
			</ul>
		</div>
	</div>
	</div>




	<div class="ct_product">

		<div class="ct_product_shows">

			<h1><span>亨控评论</span></h1>

			<div class="ct_product_left">	

			<?php query_posts('cat=36&showposts=3&paged=.$page_num'); ?>

			<?php while (have_posts()) : the_post();?>

			<div class="ct_product_show">

				<img src="<?php echo catch_that_image(); ?>" />

				<div class="ct_product_show_right">

					<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>

					<p><?php the_excerpt(); ?></p>
				</div>
			</div>

			<?php endwhile; ?>

			<a href="<?php bloginfo('url'); ?>/?cat=36" class="ct_product_show_more">查看更多</a>

			</div>

		</div>

	
 		<div class="ct_product_right">

			<div class="ct_product_right_top">

				<h1><span>大连油实时行情</span></h1>


				<style type="text/css">
				/*.posbac{
					margin-top: -1100px;
				    margin-left: -10px;
				    position: relative;
				    z-index: 1;
				    overflow: hidden;
				}
				.ct_product_advantages{
					    width: 367px;
					    height: 210px;
					    border: 1px solid #d1d1d1;
					    margin: auto auto;
					    overflow: hidden;
				}*/
				</style>
				<div class="ct_product_advantages">
					<img style="width:100%" src="http://118.145.4.142:16925/hqweb/images2/DLO500BMinLine.png">
				</div>

			</div>

			<div class="ct_product_right_bottom">

				<h1><span>再生银实时行情</span></h1>

				<div class="contractRule">
				<img style="width:100%" src="http://118.145.4.142:16925/hqweb/images2/DLS15MinLine.png">
				</div>

			</div>

		</div>
	</div>

	
	<!-- <div class="ct_tv">

		<div class="ct_tv_shows_left">

			<h1>亨控<span>TV</span></h1>

			<div class="ct_tv_shows">

			<div class="ct_tv_show">

				<img src="<?php bloginfo('template_url'); ?>/images/tvshow.jpg" alt="" />

				<div class="ct_tv_show_name">

					<h2>亨金学究</h2>

					<h3><strong>讲师：</strong>张伟，王明</h3>

					<h3><strong>聊天内容：</strong>石油化工对当代经济的影响</h3>

					<a href="<?php the_permalink(); ?>">进入聊天室</a>

				</div>

			</div>

			<h4>在线直播与聊天室同步，准确分析行情为投资者提供海内外一流的金融投资咨询，有效把握和传递国际、国内最新行情资讯</h4>

			</div>

		</div>


		<div class="micro-blog">

			<h1>新浪<span>微博</span></h1>

			<div id="weibo" class="panel">  

    <ul class="panel_body">  

        <iframe id="weibo" style="width:350px; height:373px;" frameborder="0" scrolling="yes" src="http://v.t.sina.com.cn/widget/widget_blog.php?uid=1355610915"></iframe>  

    </ul>  

</div>  

		</div>

	</div> -->


	<div class="ct_college">

		<div class="ct_college_nav">

			<h1><span>亨金学院</span></h1>

			<ul>

				<li><a href="<?php bloginfo('url'); ?>/?cat=21">术语解释</a></li>

            <li><a href="<?php bloginfo('url'); ?>/?cat=20">常见问题</a></li>

            <li><a href="<?php bloginfo('url'); ?>/?cat=34">交易技巧</a></li>

            <li><a href="<?php bloginfo('url'); ?>/?cat=35">交易资讯</a></li>

            <li><a href="<?php bloginfo('url'); ?>/?cat=32">风险揭示</a></li>

			</ul>

		</div>

		<img src="<?php bloginfo('template_url'); ?>/images/ct_college.jpg" alt="" />



	</div>


	<!-- <div class="ct_comments">

		<h1>亨控<span>评论</span></h1>

		<?php query_posts('cat=8&showposts=2&paged=.$page_num'); ?>

		<?php while (have_posts()) : the_post();?>

		<div class="ct_comment">

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<h3><?php the_time('Y年n月j日') ?></h3>

			<a class="ct_commen_more" href="<?php the_permalink(); ?>"><p><?php the_excerpt(); ?></p></a>

		</div>

		<div class="ct_comment_kongge"style="width: 20px;height: 250px;float: left;"></div>

		<?php endwhile; ?>

	</div> -->


	<div class="ct_images">

		<h1><span>荣誉资质</span></h1>

		<div class="ct_images_top" id="ct_images_show">
			<div class="ct_images_top_forecase" id="ct_images_top_forecase_box">
				<ul class="ct_images_top_ul" id="imgbox" style="left:0px;">
				<?php query_posts('cat=27&showposts=8&paged='.$page_num); ?> 
				        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						    <li><a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image(); ?>" alt="">
							<span><?php the_title(); ?></span></a></li>
						<?php endwhile; ?>
						<?php else : ?>
						    文章仍在更新中
						<?php endif; ?>
				</ul>
			</div>
			<a href="javascript:;" class="reflex_arrow" id="prev">&lt;</a>
			<a href="javascript:;" class="reflex_arrow" id="next">&gt;</a>
		</div>
	</div>

	<div class="ct_cooperation">

		<h1><span>合作机构</span></h1>

	<div class="ct_images_top" id="ct_cooperation_show">
			
			<div class="ct_images_top_forecase" id="ct_cooperation_top_forecase_box">
				<ul class="ct_images_top_ul" id="cooperation_imgbox" style="left:0px;">
					<?php query_posts('cat=39&showposts=9999&paged='.$page_num); ?> 
				        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						    <li><a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image(); ?>" alt="">
							<span><?php the_title(); ?></span></a></li>
						<?php endwhile; ?>
						<?php else : ?>
						    文章仍在更新中
						<?php endif; ?>
				</ul>
			</div>
			<a href="javascript:;" class="reflex_arrow" id="cooperation_prev">&lt;</a>
			<a href="javascript:;" class="reflex_arrow" id="cooperation_next">&gt;</a>
		</div>
	</div>
	 	

		</div>

	</div>


	<div class="ct_friendLinks">

	<div class="ct_friendLink">

		<span>友情链接:</span>

		<ul>

			<li><a href="http://www.china-zszy.com/">大连再生资源交易所</a></li>

			<li><a href="http://www.hnaox.com/">湖南澳鑫商品交易市场</a></li>

			<li><a href="http://www.ccb.com/cn/home/indexv3.html">中国建设银行</a></li>

			<li><a href="http://bank.pingan.com/">平安银行</a></li>

		</ul>

	</div>

	</div>



	<div class="ct_last">

		<div class="suchLink">

			<h3>关于我们</h3>

			<ul>

				<li><a href="http://www.cnhkjt.com/hengkong/集团介绍/">公司简介</a></li>

				<li><a href="http://www.cnhkjt.com/hengkong/组织架构/">组织架构</a></li>

				<li><a href="http://www.cnhkjt.com/hengkong/集团文化/">集团文化</a></li>

				<li><a href="http://www.cnhkjt.com/hengkong/联系我们/">联系方式</a></li>

			</ul>

		</div>

		<div class="suchLink">

			<h3>学习相关</h3>

			<ul>

				<li><a href="<?php bloginfo('url'); ?>/?cat=21">术语解释</a></li>

				<li><a href="<?php bloginfo('url'); ?>/?cat=20">常见问题</a></li>

				<li><a href="<?php bloginfo('url'); ?>/?cat=35">交易资讯</a></li>

			</ul>

		</div>

		<div class="suchLink">

			<h3>交易平台</h3>

			<ul>

				<li><a href="http://www.hnaox.com">湖南澳鑫商品交易市场</a></li>

				<li><a href="http://www.china-zszy.com">大连再生资源交易所</a></li>



			</ul>

		</div>

		<div class="suchLink">

			<h3>合作银行</h3>

			<ul>

				<li><a href="http://www.ccb.com/cn/home/indexv3.html">中国建设银行</a></li>

				<li><a href="http://bank.pingan.com/">平安银行</a></li>

			</ul>

		</div>

		<!-- <div class="suchLink">

			<div class="saoma">微博：<img src="<?php bloginfo('template_url'); ?>/images/saoma.jpg" alt="" /></div>

			<div class="saoma">微信：<img src="<?php bloginfo('template_url'); ?>/images/saoma.jpg" alt="" /></div>

		</div> -->

	</div>

</div>



	<div class="footer">

 <p>版权所有©湖北亨控商贸有限公司  复制必究       技术支持：<a href="http://www.new-thread.com/">新思路团队网酷工作室</a></p>	
	</div>


  </div>

	<div id="monikaihu" class="kaihu"><a href="http://www.cnhkjt.com/hengkong/开户/">实盘开户</a></div>
    <div id="shipankaihu"  class="kaihu"><a href="http://www.cnhkjt.com/hengkong/模拟开户/">模拟开户</a></div>

</body>

</html>