<?php 
      session_start();
      header("Content-type:text/html;charset=utf-8");
      if($_SESSION['verifyCode']==$_POST['verifyCode']){
            echo '<html><head></head><body style="display:none;"><div role="form" class="wpcf7" id="wpcf7-f5-o1" lang="zh-CN" dir="ltr">
      <div class="screen-reader-response"></div>
      <form action="'.$_POST["urlll"].'" method="post" id="wpcf7-form" class="wpcf7-form" novalidate="novalidate">
      <div style="display: none;">
      <input type="hidden" name="_wpcf7" value="5">
      <input type="hidden" name="_wpcf7_version" value="4.4.1">
      <input type="hidden" name="_wpcf7_locale" value="zh_CN">
      <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f5-o1">
      <input type="hidden" name="_wpnonce" value="4b5db10f42">
      </div>
      <p>你的名字 （必填）<br>
          <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="'.$_POST['your-name'].'" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </p>
      <p class="telP">电话号码（必填）<br>
          <span class="wpcf7-form-control-wrap tel-526"><input type="tel" name="tel-526" value="'.$_POST['tel-526'].'" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel your-tel" id="your-tel" aria-invalid="false"></span> <p></p><div id="send" class="btn" style="width:120px;background:red; cursor:pointer">获取手机验证码</div>手机验证码<input name="verifyCode" type="text"><input class="url" value="'.$_POST["urlll"].'" name="url" type="hidden"><p></p></p>
      
      <p><input type="submit" value="发送" class="wpcf7-form-control wpcf7-submit"></p>
      <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
      <script type="text/javascript" src="http://www.cnhkjt.com/wpc/wp-content/themes/hengkongguanwang/jq.js"></script>
      <script type="text/javascript">
        var autoSubmit = document.getElementById("wpcf7-form").submit();
      </script></body></html>';
      }else{
            echo "<script>alert('验证码不对');window.location.href='http://www.cnhkjt.com/wpc/zaixianjiameng/';</script>";
      };

?>






