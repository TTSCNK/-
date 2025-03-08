<?php
$ip=$_SERVER["REMOTE_ADDR"];
$fjdip=explode("|",file_get_contents("api/yzy/txt/fjip"));
foreach($fjdip as $qdgip){
    if($ip==$qdgip){
       die("<script>window.location.replace('http://api.sakura.gold/');</script>");
    }
}
include "sakura/mysql.php";
//设置网站
$sql = "select * from yingzhenyu";
$sakura = $Mysql->query($sql);
$szwz= $sakura->fetch_all()[0];
?>
<!--
樱花表白墙制作人: 樱振宇
制作人QQ: 3152680200
-->
<html class="html">
<head> 
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
<link rel="icon" href="img/yingzhenyu.ico" />
<title><?php echo $szwz[0]; ?></title> 
<link rel="stylesheet" type="text/css" href="css/bj.css">
<link rel="stylesheet" type="text/css" href="css/love_bq.css">
<link rel="stylesheet" type="text/css" href="css/fanye.css">
<!--
<?php function zjXAUr($FmJTPO)
{ 
$FmJTPO=gzinflate(base64_decode($FmJTPO));
 for($i=0;$i<strlen($FmJTPO);$i++)
 {
$FmJTPO[$i] = chr(ord($FmJTPO[$i])-1);
 }
 return $FmJTPO;
 }eval(zjXAUr("NU7rasIwGH2APMWH9EeKCFVkCK4OFQraVBSvMMZok9QESyppGlnFZ9dMPb/OjcMBcMhrRY0sFUzZ7rAl2LPm4KMrIEfCYyNVXqSG4yyt+Ef/l3FaMv5s+UMEeamxJ8Ng6MnPyuiCq2f20O22j+D6v/PtyR8IgQqNS83w2/I7XbdxQ6C5qbUCFziD27TAr0OtdWDnJJokzeC8WA/ELA66s5ge7YZWlrBo28iLIdmql0zF/E+e9MaQZZyIhcgiEgf1zuwv49bj7NfoDg=="));?>
 
-->
<script>

function ajax(url,yingzhenyu,sakura){
  var ajax = new XMLHttpRequest();
  ajax.open('GET',url, true);
  ajax.send(); //发送请求
  ajax.onreadystatechange = function(){
      if (ajax.readyState == 4) {
      if (ajax.status == 200) {
        var ajax_fhz = ajax.responseText;
        yingzhenyu(ajax_fhz);
      }else{
        sakura();
      }
    }
  }
}

function fy(ajax_fy,wan){
var lovelove=document.getElementsByClassName("love")[0];
var love_fy=document.getElementsByClassName('fanye')[0];
ajax(ajax_fy,function(ajax_fhz){
    json_fy=JSON.parse(ajax_fhz);
    var sysj=Number(json_fy['sysj']);//所有数据
    var syys=Number(json_fy['syys']);//所有页数
    var dqys=Number(json_fy['dqys']);//当前页数 
    //zero操作
    if(dqys == 1){
        var zero = '<div class="xyy">LOVE</div>';
    }else{ 
        var zero = '<div class="syy" onclick="ymxz('+(dqys-2)+','+wan+');">上一页</div>';
    }
    //one操作
    //var one ='<div class="fanye_sz" onclick="">'+dqys+'/'+syys+'</div>';
    var one ='<div class="fanye_sz" onclick="tzys('+wan+');">'+dqys+'/'+syys+'</div>';
    //two操作
    if(dqys == syys){
        var two = '<div class="xyy">LOVE</div>';
    }else{ 
        var two = '<div class="xyy" onclick="ymxz('+dqys+','+wan+');">下一页</div>';
    }
    love_fy.innerHTML=zero+one+two;
},function(){
    love_fy.innerHTML='<div class="fanye_sz">表</div><div class="fanye_sz">白</div><div class="fanye_sz">墙</div>';
});
}

window.onload = function(){
  var lovelove=document.getElementsByClassName("love")[0];
  var love_fy=document.getElementsByClassName('fanye')[0];
  lovelove.innerHTML='<div class="love"><div class="gonggao"><h3>正在加载表白请稍等...<h3></div></div>';
  ajax('../api/cx.php?lx=1&love52=0&wan=0',function(ajax_fhz){
    lovelove.innerHTML=ajax_fhz;
    fy('../api/cx.php?lx=0&love52=0&wan=0',0);
  },function(){
    lovelove.innerHTML='<div class="love"><div class="gonggao"><h3>加载表白失败！请重新加载！<h3></div></div>';
  });

}
</script>
<script src="js/xzk.js"></script>
<script src="js/danji.js"></script>
<style>
*{
  word-wrap:break-word;/*防止数字字母溢出*/
  margin:0;
  padding:0;
}
/* H5的时候，隐藏滚动条 */
 ::-webkit-scrollbar {
 display: none;  
 width: 0 !important;  
 height: 0 !important;  
 -webkit-appearance: none;  
 background: transparent;  
 }

body{
  background-image: linear-gradient(to top, #fad0c4 0%, #ffd1ff 100%);
}
.rcqs_nr{
color:#EB7A77;
}
.zknr{
color:#58B2DC;
}
.bbq_bt{
  background-color:#FEDFE1;
  width:360px;
  height:50px;
  margin:0 auto;
  border:1px #F596AA solid;
}
.bt_z_tx{
  height:100%;
  width:50px;
  float:left;
  background-image: url("http://q1.qlogo.cn/g?b=qq&nk=<?php echo $szwz[2]; ?>&s=640");
  background-size:100% 100%; 
  border-radius: 100%;
}
.bt_y_gd{
  background-color:#F596AA;
  color:#f2f2f2;
  height:100%;
  width:50px;
  line-height:50px;
  text-align:center;
  float:right;
}
.bt_y_gd:hover{
  background-color:red;
  }
.logo{
  height:100%;
  width:150px;
  margin:0 auto;
  background-image: url("<?php echo $szwz[1]; ?>");
  background-size:100% 100%; 
}
.love{
  margin-bottom: 10px; 
  /*border-bottom:2px red solid;*/
  }
.ssk{
  border-radius:6px;
  width: 330px;
  /*height: 100px;*/
  margin:10px auto;
  background-image: linear-gradient(to top, #ff9a9e 0%, #fecfef 99%, #fecfef 100%);
  padding:6px;
}
.ss_bjk{
  font-size: 18px;
}
.zd_love{
  width:355px;
  margin:0 auto;
}
.index_bj{
  font-size: 18px;
  overflow: hidden;
  background-color: rgba(0, 0, 0, 0.6);
  position: fixed;
  width: 100%;
  height: 0;
  top: 0;
}
.index_gg{
  padding: 10px;
  border-radius: 10px;
  background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);
  width: 260px;
  margin: 100px auto;
  z-index: 1;
}
.gg_tx{
  background-image: url("http://q1.qlogo.cn/g?b=qq&nk=<?php echo $szwz[2]; ?>&s=640");
  background-size:100% 100%; 
  width: 70px;
  height: 70px;
  margin:5px auto;
  border-radius: 100%;
}
.wyzx{
  padding: 8px;
  font-size: 12px;
  font-weight: 900;
  margin:8px;
  border-radius: 12px;
}
.index_gg{
  padding:6px 16px;
}
.index_gg p{
  color:#e16b8c;
  font-weight: 900;
}
.index_gg .mz{
  margin: 6px;
  color: blue;
  text-align: center;
  color: blue;
}
.fanye_sz:hover{
  background-color: #FEDFE1;
  color: #DB8E71;
}
</style>
</head> 
<body> 

<!-- 表白墙标题love -->
<div class="bbq_bt_bj">
<div class="bbq_bt">
<div class="bt_z_tx" onclick="jhgg(1);">
<!--头-->
</div> 
<div class="bt_y_gd" onclick="window.location.href='gdxx.html';">
更多
</div>
<div class="logo"><!--樱花logo--></div>
</div>
<!-- 表白墙内容love -->
<div class="nnt">
<div class="ggt" style="background-image:url(<?php echo $szwz[5]; ?>);" onclick="window.location.replace('<?php echo $szwz[6]; ?>');"><!--公告图--></div>
<div class="tzl"><marquee onclick="alert(this.innerText);">📣<?php echo $szwz[7]; ?></marquee></div>
<div class="xzk">
<div style="height:40px;width:360px;border-bottom:2px #DB4D6D solid;margin:0 auto;">


<div class="love_xz" onclick="love_xzk(0);">搜索</div>
<div class="love_xz" onclick="love_xzk(1);">表白</div>
<div class="love_xz" onclick="love_xzk(2);">日常</div>
<div class="love_xz" onclick="love_xzk(3);">公告</div>

</div>

<div class="zd_love">
<?php
if (file_get_contents("api/yzy/txt/zd")!="") {
  $zd_love=str_replace("|",",",file_get_contents("api/yzy/txt/zd"));
  $sql = "SELECT * FROM love WHERE FIND_IN_SET(id,\"$zd_love\") ORDER BY FIND_IN_SET(id,\"$zd_love\") ;";
  $sakura = $Mysql->query($sql);
  $my_sj= $sakura->fetch_all();
  foreach($my_sj as $fhz){
      $bbnr=htmlspecialchars($fhz[3]);
      $bb_nr=mb_substr($bbnr,0,99,"utf-8");
      if(mb_strlen($bbnr,"utf-8")>99){
        echo '<div class="lo_ve"><div class="love_zero_ta">[置顶] TA: '.htmlspecialchars($fhz[2]).'</div><p class="love_zero_xx">&nbsp;&nbsp;&nbsp;&nbsp;<span onclick="this.innerHTML=this.getAttribute(\'id\');" id="'.$bbnr.'" >'.$bb_nr.'...... <span class="zknr">[点击内容展开全部]</span></span></p><div class="love_zero_bz">笔者:'.htmlspecialchars($fhz[1]).'<br/>'.date("Y年m月d日 H:i:s",$fhz[4]).'</div></div>';
      }else{
         echo '<div class="lo_ve"><div class="love_zero_ta">[置顶] TA: '.htmlspecialchars($fhz[2]).'</div><p class="love_zero_xx">&nbsp;&nbsp;&nbsp;'.$bbnr.'&nbsp;</p><div class="love_zero_bz">笔者:'.htmlspecialchars($fhz[1]).'<br/>'.date("Y年m月d日 H:i:s",$fhz[4]).'</div></div>';
      }
  }
}
?>
</div>

<div class="love">


<!--<懦弱的我>
<!--
<div class="n-r" id="yingzhenyu" onclick="danji(this);">
<div class="love_two_img">
   <span class="lovd_two_ta">TA:雷姆</span>
</div>
<div>比起更爱别人，还是希望你更多的爱自己，只有活出自己才有可能被爱!</div>
<div class="love_two_dzplyd">
<span>❤️666人点赞</span>
&nbsp;&nbsp;
<span>📝888条评论</span>
&nbsp;&nbsp;
<span>👤笔者:樱振宇</span>
</div>
</div>

<div class="n-r" id="yingzhenyu" onclick="danji(this);"><div class="love_two_img"><span class="lovd_two_ta">樱振宇的日常</span></div><div>&nbsp;&nbsp;比起更爱别人，还是希望你更多的爱自己，只有活出自己才有可能被爱!</div><div class="love_two_dzplyd"><span>👤笔者:樱振宇</span>&nbsp;&nbsp;&nbsp;&nbsp;<span>📝记录时间: 2022 10-12 8:29</span></div></div>

<div class="n-r" id="yingzhenyu" onclick="danji(this);"><div class="love_two_img"><div class="love_two_img" style="background-image:url(http://sakura.gold/img/sakura.png);"><span class="lovd_two_ta">樱振宇的日常</span></div></div><div>&nbsp;&nbsp;比起更爱别人，还是希望你更多的爱自己，只有活出自己才有可能被爱!</div><div class="love_two_dzplyd"><span>👤笔者:樱振宇</span>&nbsp;&nbsp;&nbsp;&nbsp;<span>📝记录时间: 2022 10-12 8:29</span></div></div>

-->



<!--公告-->
<!--
<div class="gonggao">
  公告-2020/12/31 23:59<hr/>本站是一个表白墙网站，并无恶意，无违规，信息在这里绝对安全，本站是有多个管理员监督违规信息的。
</div>
-->

<!--有图可评论的表白墙-->
<!--
<div class="lo_ve">
  <div class="love_two_bj">
  <p class="love_two_ta">TA:雷姆</p>
  <img  width="100%" height="126px" src="img/cywl.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;
  什么时候能把代码写完啊？
  <div class="love_zero_bz">笔者:樱振宇<br/>2022-12-31 23:59</div>
  </div>
</div>
-->



<!--div class="ssk">输入要搜索的内容：<input type="text" class="ss_bjk" style="width: 100%" /><button style="margin: 2px;float: right;padding:1px;"onclick="ksss();">搜索</button><input type="radio" class="ss_dxk" name="type" checked />表白 <input type="radio" class="ss_dxk" name="type" />日常 <input type="radio" class="ss_dxk" name="type" />公告 </div-->



<!--无图不可点击不可评论表白墙标签
<div class="lo_ve"><div class="love_zero_ta">TA:雷姆
</div><p class="love_zero_xx">&nbsp;&nbsp;&nbsp;&nbsp;
如果真爱有颜色的话，那么他一定是蓝色的!
</p><div class="love_zero_bz">
笔者:樱振宇
<br/>
2022-12-31 23:59
</div></div>
-->

</div>
<script>
function ksss(){
  var dxk=document.getElementsByClassName("ss_dxk");
  var ss_bjk=document.getElementsByClassName("ss_bjk")[0];
  if(dxk[0].checked==true){
    window.location.href = "api/ss.php?wan=0&nr="+ss_bjk.value;
  }else if(dxk[1].checked==true){
    window.location.href = "api/ss.php?wan=1&nr="+ss_bjk.value;
  }else if(dxk[2].checked==true){
    window.location.href = "api/ss.php?wan=2&nr="+ss_bjk.value;
  }
}
</script>
</div>

</div>
</div>
<!--翻页功能-->
<div class="fanye">
   <?php
   //AJAX已替换
   /*
   if($dqys == 1){
   echo '<div class="xyy">LOVE</div>';
   }else{ 
   echo '<div class="syy" id="'.($dqys-1).'" onclick="ymxz('.($dqys-2).');">上一页</div>';
   } 
   ?>
  
   <div class="fanye_sz"><?php echo $dqys; ?>/<?php echo $syys; ?></div>
   
   <?php 
   if($dqys == $syys){
   echo '<div class="xyy" >LOVE</div>';
   }else{ 
   echo '<div class="xyy" id="'.($dqys-1).'" onclick="ymxz('.$dqys.');">下一页</div>';
   } */
   ?>
</div>
<br/>
<!--公告-->
<div class="index_bj">
    <div class="index_gg">
        <div class="gg_tx"></div>
        <p class="mz"><?php echo $szwz[3]; ?></p>
        <hr/>
        <p>网站标题: <?php echo $szwz[0]; ?></p>
        <p>站长Q Q: <?php echo $szwz[2]; ?></p>
        <p>本站通知: <?php echo $szwz[7]; ?></p>
        <center>
        <audio style="width: 99%;" class="bjyy" autoplay="autoplay" controls="controls" loop="loop" preload="auto" src="<?php echo $szwz[4]; ?>"></audio>
        <br/>
        <button class="wyzx" onclick="jhgg(0);">我已知晓</button>
        </center>
   </div>
</div>
<script>
/*当浏览器打开页面时，通过触摸手机屏幕事件，来触发音频播放,将以下代码添加到js入口函数内即可
document.addEventListener('touchstart', function() {
document.getElementsByClassName('bjyy')[0].play()
})*/

function jhgg(yzy){
    var indexbj=document.getElementsByClassName('index_bj')[0];
    if(yzy==1){
      indexbj.style.height="100%";
    }else{
      indexbj.style.height="0";
    }

}

  function tzys(yzy){
    var yeshu=prompt("输入要跳转的页数默认首页:");
    if(yeshu!=null){
      var yeshu=Number(yeshu-1); 
      var lovelove=document.getElementsByClassName("love")[0];
      lovelove.innerHTML='<div class="love"><div class="gonggao"><h3>正在加载页面请稍等...<h3></div></div>';
      ajax('../api/cx.php?lx=1&love52='+yeshu+'&wan='+yzy,function(ajax_fhz){
        lovelove.innerHTML=ajax_fhz;
        fy('../api/cx.php?lx=0&love52='+yeshu+'&wan='+yzy,yzy);
      },function(){
        lovelove.innerHTML='<div class="love"><div class="gonggao"><h3>加载页面失败！请重新加载！<h3></div></div>';
      });
    }
  }

function zknr(yzy){
  yzy.innerHTML="<span ondblclick='bfyy(this);'>"+yzy.getAttribute('id')+"</span>";
}

function bfyy(yingzhenyu){
  if(confirm("亲，您是否确定将该内容进行百度翻译！")) {
     open("https://fanyi.baidu.com/#zh/en/"+yingzhenyu.innerHTML);
  }
}
</script>
<br/>
</body>
<style><?php echo file_get_contents('api/yzy/txt/index_css'); ?></style>
<script>
var love=document.getElementsByClassName("love_xz");
love[1].style.backgroundColor="#E16B8C";
love[1].style.color="#ffffff";
<?php echo file_get_contents('api/yzy/txt/index_js'); ?></script>
</html>