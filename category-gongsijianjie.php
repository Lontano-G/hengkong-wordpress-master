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
#category_content h2{
	margin-top: 20px;
	border-bottom: 2px solid #fff;
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

	width: 150px;
	margin: 50px auto;
}
.phonenav{
		display: none;
	}
</style>
		<div id="category_content">
		<?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?>
		<div class="title_border"></div>
		<div class="content_text">
			亨控集团是现代化、科技化、多元化为一体的综合型控股集团公司，涉及金融、娱影、贸易、教育、大宗商品、中介服务等众多领域。
			亨控集团有多年金融行业背景与丰富的运营科学管理经验，运用集团雄厚的资本实力，通过先进的资金管理`经验和专业风险控制能力，
			整合专业化管理团队，人性化的服务体系，为投资者提供海内外一流的金融投资咨询，有效把握和传递国际、国内最新行情资讯等服务
			，为客户创造价值，为合作伙伴提供稳定、共赢的事业平台，为员工提供事业成功的阶梯，共同成长、励精图治、追求卓越。
			亨控集团控股子公司有：亨控（厦门）石油化工有限公司; 西安亨控影视文化传播有限公司; 汇深（厦门）石油化工有限公司; 亨控国际金
			融教学中心; 中山市亨筠国际贸易进出口有限公司; 厦门市亨筠贸易有限公司;  湖北亨控商贸有限公司等。
			经营理念：广开渠道、合作共赢。
		</div>
	</div>
<?php get_footer() ?>