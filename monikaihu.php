<?php get_header() ?>
<style type="text/css">
#wpcf7-f5-o1{
    padding-top: 100px;
    padding-bottom: 60px;
    background: #fff;
    padding-left: 410px;
}
#wpcf7-f5-o1 p{
    line-height: 50px;
    font-size: 18px;
}
input{
    height: 30px;
}
#send{
    width: 240px;
    line-height: 40px;
    text-align: center;
    margin-top: 10px;
    margin-bottom: 6px;
    margin-left: 143px;

}
.wpcf7-submit{
    width: 80px;
    height: 40px;
    line-height: 30px;
    text-align: center;
    background: #ccc;
    margin-left: 143px;

}
.yourname{
    float: left;
    width: 100%;
}
.wpcf7-mail-sent-ng,.screen-reader-response{
    display: none;
}
</style>
<?php
	/**
 * Template Name: monikaihu
 */
echo "亨控模拟开户";
echo do_shortcode( '[contact-form-7 id="320" title="模拟开户"]' ); 
?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jq.js"></script>
<script type="text/javascript">
	$(function(){
	var newNode = $('<p><div id="send" class="btn" style="width:150px;background:#ccc; cursor:pointer">获取手机验证码</div>手&nbsp&nbsp机&nbsp&nbsp验&nbsp&nbsp证&nbsp&nbsp码&nbsp&nbsp<input name="verifyCode"  type="text"><input class="url" value="" name="urlll"  type="hidden"></p>');
	$(".telP").append(newNode);
    var formNode  =$(".wpcf7-form").find("input").html();
	var url = $(".wpcf7-form").attr("action");
	$(".url").attr("value",url);
	$(".wpcf7-form").attr("action","http://www.cnhkjt.com/wpc/wp-content/themes/hengkongguanwang/factory1.php");
    $('#send').click(function(){
         $.ajax({
             type: "POST",
             url: "http://www.cnhkjt.com/wpc/wp-content/themes/hengkongguanwang/handle.php",
             data: {pNum:$("#your-tel").val()},
             dataType: "json",
             success: function(data){
                alert("验证码已发送");
              }
         });
    });
});
</script>
<?php get_footer() ?>