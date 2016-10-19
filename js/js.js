// 选项卡js区域
window.onload = function(){
	// $(function(){
	// 	$(".tab_spot ul li").each(function(index){
	// 		$(this).mouseover(function(){
	// 			$(this).addClass("tab_spot1").siblings().removeClass("tab_spot1");
	// 			$("#tab_spot_content>ul>li").eq(index).addClass("tab_spot_content1").siblings().removeClass("tab_spot_content1");
	// 		})
	// 	});
	// })

var ct_images_show = document.getElementById('ct_images_show');
var ct_images_top_forecase_box = document.getElementById('ct_images_top_forecase_box');
var imgbox = document.getElementById('imgbox');
var prev = document.getElementById("prev");
var next = document.getElementById("next");
var li = imgbox.getElementsByTagName("li");
var lis = imgbox.getElementsByTagName("li").length;
var width = li[0].offsetWidth;
var boxwidth = ct_images_top_forecase_box.offsetWidth;
var i = boxwidth/width;
var max = -(lis*width)+width*i;
var time;





next.onclick = function(){
	if (parseInt(imgbox.style.left)<=max) {
		imgbox.style.left = 0 + 'px';

	}else{
		imgbox.style.left = parseInt(imgbox.style.left) - width + 'px';}
	
}
prev.onclick = function(){
	if (parseInt(imgbox.style.left)>=0) {
		imgbox.style.left = 0 + 'px';
	}else{
		imgbox.style.left = parseInt(imgbox.style.left) + width + 'px';
	};
	
}

function reflex_play(){
		time = setInterval(function(){
				next.onclick();
			},6000);

		}//setInterval 一直去执行
	function reflex_stop() {
			clearInterval(time);
		}//清除定时器
ct_images_show.onmouseover = reflex_stop;
ct_images_show.onmouseout = reflex_play;
reflex_play();










var ct_cooperation_show = document.getElementById('ct_cooperation_show');
var ct_cooperation_top_forecase_box = document.getElementById('ct_cooperation_top_forecase_box');
var cooperation_imgbox = document.getElementById('cooperation_imgbox');
var cooperation_prev = document.getElementById("cooperation_prev");
var cooperation_next = document.getElementById("cooperation_next");
var cooperation_li = cooperation_imgbox.getElementsByTagName("li");
var cooperation_lis = cooperation_imgbox.getElementsByTagName("li").length;
var cooperation_width = cooperation_li[0].offsetWidth;
var cooperation_boxwidth = ct_images_top_forecase_box.offsetWidth;
var cooperation_i = cooperation_boxwidth/cooperation_width;
var cooperation_max = -(cooperation_lis*cooperation_width)+cooperation_width*cooperation_i;
var cooperation_time;





cooperation_next.onclick = function(){
	if (parseInt(cooperation_imgbox.style.left)<=cooperation_max) {
		cooperation_imgbox.style.left = 0 + 'px';

	}else{
		cooperation_imgbox.style.left = parseInt(cooperation_imgbox.style.left) - cooperation_width + 'px';}
	
}
cooperation_prev.onclick = function(){
	if (parseInt(cooperation_imgbox.style.left)>=0) {
		cooperation_imgbox.style.left = 0 + 'px';
	}else{
		cooperation_imgbox.style.left = parseInt(cooperation_imgbox.style.left) + cooperation_width + 'px';
	};
	
}

function cooperation_play(){
		cooperation_time = setInterval(function(){
				cooperation_next.onclick();
			},6000);

		}//setInterval 一直去执行
	function cooperation_stop() {
			clearInterval(cooperation_time);
		}//清除定时器
ct_cooperation_show.onmouseover = cooperation_stop;
ct_cooperation_show.onmouseout = cooperation_play;
cooperation_play();























}