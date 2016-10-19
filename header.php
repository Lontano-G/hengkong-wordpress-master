<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">



<head>



<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" >


<title><?php if ( is_home() ) {



        bloginfo('name'); echo " - "; bloginfo('description');



    } elseif ( is_category() ) {



        single_cat_title(); echo " - "; bloginfo('name');



    } elseif (is_single() || is_page() ) {



        single_post_title();



    } elseif (is_search() ) {



        echo "搜索结果"; echo " - "; bloginfo('name');



    } elseif (is_404() ) {



        echo '页面未找到!';



    } else {



        wp_title('',true);



    } ?></title>



<script src="<?php bloginfo('template_url'); ?>/js/js.js"></script>



<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>



<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />



<!-- <link href="<?php bloginfo('template_url'); ?>/css/pc.css" rel="stylesheet" type="text/css" media="screen" />



<link href="<?php bloginfo('template_url'); ?>/css/style-phone.css" rel="stylesheet" type="text/css" media="handheld" /> -->



<script type="text/javascript">

    function loadCSS() {

     if((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|wOSBrowser|BrowserNG|WebOS)/i))) {

            document.write('<link href="<?php bloginfo('template_url'); ?>/css/style-phone.css" rel="stylesheet" type="text/css" media="screen" />');

        }

        else {

            document.write('<link href="<?php bloginfo('template_url'); ?>/css/pc.css" rel="stylesheet" type="text/css" media="screen" />');

        }

    }

    loadCSS();

</script>



<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>







<style type="text/css">



    



</style>



</head>



<body>








<div class="head_top_top" style="font-size:20px;background-color:#ffffff;padding-left:20px;font-weight:600;color:#969696;">投资有风险，入市须谨慎!</div>


<div class="head_top">



    <div class="head_top_left">24小时客服热线 ： <strong>400-1166-157</strong> </div>
    <ul class="head_top_right">
         <li class="head_top_land"><a href="http://www.cnhkjt.com/hengkong/wp-login.php">登陆/注册</a></li>
         <li class="head_top_about"><a href="http://www.cnhkjt.com/hengkong/集团介绍/">关于我们</a></li>
          <li class="head_top_img"><a href="http://www.cnhkjt.com/hengkong/微信二维码/"><img src="<?php bloginfo('template_url'); ?>/images/weixin.jpg" alt="" /></a>
                                        <span><img src="<?php bloginfo('template_url'); ?>/images/erweima.jpg" alt="" /></span>
          </li>
    </ul>
</div>



<div class="header">

    <div class="hd_logo">



        <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" /></a>



    </div>



    <div class="hd_phone">



        <a target="_blank" href=" http://www.cnhkjt.com/hengkong/wp-hengkong/?page_id=178"><img src="<?php bloginfo('template_url'); ?>/images/hd_phone.jpg" alt="" /></a>



    </div>  



</div>







<div class="forecase">

    

</div>


<div class="phonenav" id="phonenav">

    <ul>

        <li><a href="http://www.cnhkjt.com/hengkong/集团介绍/"><img src="<?php bloginfo('template_url'); ?>/images/gongsijianjie.jpg" alt="" /><span>集团介绍</span></a></li>

        <li><a href="<?php bloginfo('url'); ?>/?cat=35"><img src="<?php bloginfo('template_url'); ?>/images/jiaoyizixun.jpg" alt="" /><span>交易资讯</span></a></li>

        <li><a href="<?php bloginfo('url'); ?>/?cat=4"><img src="<?php bloginfo('template_url'); ?>/images/chanpingzhanshi.jpg" alt="" /><span>产品中心</span></a></li>
        
        <li><a href="<?php bloginfo('url'); ?>/?cat=38"><img src="<?php bloginfo('template_url'); ?>/images/gonggaoxinxi.jpg" alt="" /><span>公告信息</span></a></li>

        <li><a href="http://www.cnhkjt.com/hengkong/亨控直播室/"><img src="<?php bloginfo('template_url'); ?>/images/shipinzhibo.jpg" alt="" /><span>视频直播</span></a></li>

        <li><a href="<?php bloginfo('url'); ?>/?cat=40"><img src="<?php bloginfo('template_url'); ?>/images/shishixinwen.jpg" alt="" /><span>时事新闻</span></a></li>

        <li><a href="<?php bloginfo('url'); ?>/?cat=36"><img src="<?php bloginfo('template_url'); ?>/images/hengkongpinlun.jpg" alt="" /><span>亨控评论</span></a></li>

        <li><a href="<?php bloginfo('url'); ?>/?cat=2"><img src="<?php bloginfo('template_url'); ?>/images/xiazaizhuanqu.jpg" alt="" /><span>下载专区</span></a></li>

    </ul>

</div>



















<div class="mainnav">



 <!--    <div class="nav_left">



        <span>产品中心<div class="nav_left_image"></div></span>



    </div>
 -->


        <div class="nav_right">



        <!-- <div class="nav"> -->



    <!--导航条-->



    <ul class="nav-main">

        <li id="li-1"><a>产品中心</a></li>

        <li  ><a href="http://www.cnhkjt.com/hengkong">首页</a></li>



       <li id="li-2"><a> 交易平台<span></span></a></li> 



        <li id="li-3"><a>资讯中心<span></span></a></li>



        <li id="li-4"> <a> 亨金学院<span></span> </a></li>



        <li id="li-5"><a>合作联盟<span></span></a></li>



        <li><a href="http://www.cnhkjt.com/hengkong/亨控直播室/">亨控直播室</a></li>



        <li id="li-6"><a>亨控开户</a></li>



        <li id="li-7"><a>下载专区</a></li>



        <!-- <li><a href="#">其他</a></li> -->







    </ul>



    <!--隐藏盒子-->



    <div id="box-1" class="hidden-box hidden-loc-index">



        <ul>

            <li><a href="<?php bloginfo('url'); ?>/?cat=5">产品优势</a></li>



            <li><a href="<?php bloginfo('url'); ?>/?cat=13">合作细则</a></li>



        </ul>



    </div>



    <div id="box-2" class="hidden-box hidden-loc-us">



        <ul>



            <li><a href="http://www.cnhkjt.com/hengkong/大连再生资源交易所/">大连再生资源交易所</a></li>



            <li><a href=" http://www.cnhkjt.com/hengkong/湖南澳鑫商品交易中心/">湖南澳鑫商品交易中心</a></li>



        </ul>



    </div>



    <div id="box-3" class="hidden-box hidden-loc-info">



        <ul>
             <li><a href="<?php bloginfo('url'); ?>/?cat=38">公告信息</a></li>
             <li><a href="<?php bloginfo('url'); ?>/?cat=40">时事新闻</a></li>
             <li><a href="<?php bloginfo('url'); ?>/?cat=36">亨控评论</a></li>





        </ul>



    </div>



    <div id="box-4" class="hidden-box hidden-loc-info box04">



        <ul>
            
            <li><a href="<?php bloginfo('url'); ?>/?cat=21">术语解释</a></li>



            <li><a href="<?php bloginfo('url'); ?>/?cat=20">常见问题</a></li>



            <li><a href="<?php bloginfo('url'); ?>/?cat=34">交易技巧</a></li>



            <li><a href="<?php bloginfo('url'); ?>/?cat=35">交易资讯</a></li>



            <li><a href="<?php bloginfo('url'); ?>/?cat=32">风险揭示</a></li>




        </ul>



    </div>

    <div id="box-5" class="hidden-box hidden-loc-info box05">



        <ul>
            
            <li><a href="http://www.cnhkjt.com/hengkong/在线加盟申请/">代理加盟</a></li>



            <li><a href="<?php bloginfo('url'); ?>/?cat=39">合作机构</a></li>





        </ul>



    </div>    
    <div id="box-6" class="hidden-box hidden-loc-info box06">



        <ul>
            
            <li><a href="http://www.cnhkjt.com/hengkong/开户/">实盘开户</a></li>



            <li><a href="http://www.cnhkjt.com/hengkong/模拟开户/">模拟盘开户</a></li>





        </ul>



    </div>    
    <div id="box-7" class="hidden-box hidden-loc-info box07">



        <ul>
            
            <li><a href="<?php bloginfo('url'); ?>/?cat=16">大连再生资源交易所</a></li>



            <li><a href="<?php bloginfo('url'); ?>/?cat=24">湖南澳鑫商品交易中心</a></li>





        </ul>



    </div>



</div>











    </div>



</div>