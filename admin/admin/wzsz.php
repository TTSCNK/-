<?php 
  include "../sakura/mysql.php";

if(isset($_COOKIE['sakura_mm'])){
  $sql = "select * from admin";
  $sakura = $Mysql->query($sql);
  $my_sj= $sakura->fetch_all()[0];
  if($_COOKIE['sakura_mm']!=$my_sj[1]){
    die("<script>alert('没有操作权限！'); window.location.replace('index.html');</script>");
  }
  //存在;
}else{
  die("<script>alert('没有操作权限！'); window.location.replace('index.html');</script>");
  //不存在;
}
  
  $sql = "select * from yingzhenyu";
  $sakura = $Mysql->query($sql);
  $my_sj= $sakura->fetch_all()[0];
?>
<!--
樱花表白墙制作人: 樱振宇
制作人QQ: 3152680200
-->
<html>
	<head>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
		<title>网站设置</title>
		<style>
			*{
				margin: 0;
				padding: 0;
			}
			body{
				background-image: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%);
			}
			p{
				margin-top:10px;
			}
			.bjk{
				width: 100%;
				font-size: 18px;
			}
			.wzsz{
				font-size: 18px;
				margin:50px auto;
				/*text-align: center;*/
				width: 330px;
				padding: 10px;
				background-color: burlywood;
			}
			button{
				padding:5px;
				font-size: 15px;
			}
		</style>
	</head>
	<body>
		<div class="wzsz"><h2 style="text-align: center;">信息设置</h2>
			<p>网站标题：<input class="bjk" value="<?php echo $my_sj[0]; ?>" type="text" /></p>
			<p>网站logo图片链接：<input class="bjk" placeholder="链接" value="<?php echo $my_sj[1]; ?>" type="text" /></p>
			<p>站长QQ号：<input class="bjk" value="<?php echo $my_sj[2]; ?>" type="text" /></p>
			<p>站长昵称：<input class="bjk" value="<?php echo $my_sj[3]; ?>" type="text" /></p>
			<p>背景音乐链接：<input class="bjk" placeholder="链接" value="<?php echo $my_sj[4]; ?>" type="text" /></p>
			<p>首页大图链接：<input class="bjk" placeholder="链接" value="<?php echo $my_sj[5]; ?>" type="text" /></p>
			<p>首页大图跳转链接：<input class="bjk" placeholder="链接" value="<?php echo $my_sj[6]; ?>" type="text" /></p>
			<p>首页通知：<input class="bjk" value="<?php echo $my_sj[7]; ?>" type="text" /></p>
			<p style="text-align: center;"><button onclick="szxx(0);">设置信息</button></p>
		</div>

		<div class="wzsz"><h2 style="text-align: center;">账号设置</h2>
			<p>管理账号：<input class="bjk" placeholder="要修改的账号" type="text" /></p>
			<p>管理密码：<input class="bjk" placeholder="要修改的密码" type="text" /></p>
			<p style="text-align: center;"><button onclick="szxx(1);">修改账号</button></p>
		</div>


		<div class="wzsz"><h2 style="text-align: center;">首页网站文件</h2>
			<p>CSS文件：</p>
			<textarea placeholder="这里写网站首页的CSS代码" class="css_js" style="width:100%;height: 222px;"><?php echo file_get_contents('../api/yzy/txt/index_css'); ?></textarea>
			<p>JS文件：</p>
			<textarea placeholder="这里写网站首页的JS代码" class="css_js" style="width:100%;height: 222px;"><?php echo file_get_contents('../api/yzy/txt/index_js'); ?></textarea>
			<p style="text-align: center;"><button onclick="szxx(2);">保存文件</button></p>
		</div>

		<div class="wzsz"><h2 style="text-align: center;">表白标签置顶</h2>
			<p>置顶表白标签ID：</p>
			<textarea placeholder="多个表白ID需要用“|”符号来分隔开(ID可以在表白标签管理查看),例如这样写: 0|1|2..." class="love_zd" style="width:100%;height: 222px;"><?php echo file_get_contents('../api/yzy/txt/zd'); ?></textarea>
			<p style="text-align: center;"><button onclick="szxx(3);">保存设置</button></p>
		</div>

		<script>
		function szxx(yzy){
			var nrjd=document.getElementsByClassName('bjk');
			if(yzy==0){
				window.location.replace('../api/yzy/wzxg.php?wzbt='+nrjd[0].value+'&wztb='+nrjd[1].value+'&zzqq='+nrjd[2].value+'&zznc='+nrjd[3].value+'&bjyy='+nrjd[4].value+'&sydt='+nrjd[5].value+'&dttz='+nrjd[6].value+'&sytz='+nrjd[7].value);
			}else if(yzy==1){
				window.location.replace('../api/yzy/xgadmin.php?zh='+nrjd[8].value+'&mm='+nrjd[9].value);
			}else if(yzy==2){
				var css_js=document.getElementsByClassName('css_js');
				window.location.replace('../api/yzy/css_js.php?css_nr='+btoa(encodeURIComponent(css_js[0].value))+'&js_nr='+btoa(encodeURIComponent(css_js[1].value)));
			}else{
				var love_zd=document.getElementsByClassName('love_zd');
				window.location.replace('../api/yzy/love_zd.php?zd='+love_zd[0].value);
			}
		}
		</script>
	</body>
</html>