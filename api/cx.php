<?
@($love52=(int)$_GET['love52']);
@($wan=(int)$_GET['wan']);
@($lx=(int)$_GET['lx']);
$hqdst=9;//获取多少条数据
include "../sakura/mysql.php";

	if($wan==0){//表白---------------------------------
	$sql="select count(*) from love;";
	}elseif($wan==1){//日常---------------------------------
	$sql="select count(*) from sakura;";
	}elseif($wan==2) {//公告---------------------------------
	$sql="select count(*) from root;";
	}else{//查找---------------------------------
	}
	$sakura = $Mysql->query($sql);
	$my_sj= $sakura->fetch_all();
	$sysj=$my_sj[0][0]; //条数
	if((int)($sysj%$hqdst)==0){$syys=(int)($sysj/$hqdst);} //页数1
	else{$syys=(int)($sysj/$hqdst+1);}//页数2
	if($love52=="" || $love52<0){
	  $love52=0;
	}
	if($love52>=$syys){
	  $love52=$syys-1;
	}
	$dqys=$love52+1; //当前页数

if($lx==0){
	echo "{\"sysj\":$sysj,\"syys\":$syys,\"dqys\":$dqys}";
}else{
	$love52*=$hqdst;
	if($wan==0){
	  //表白---------------------------------
	  $sql = "select * from love ORDER BY id DESC limit {$love52},{$hqdst}";
	}elseif($wan==1){
	//日常---------------------------------
	  $sql = "select * from sakura ORDER BY id DESC limit {$love52},{$hqdst}";
	}elseif($wan==2){
	//公告---------------------------------
	  $sql = "select * from root ORDER BY id DESC limit {$love52},{$hqdst}";
	}else{
	  exit();
	}
	  $sakura = $Mysql->query($sql);
	  if($sakura==false) {
	  	 echo '<div class="love"><div class="gonggao"><h3>此处暂时还没有数据！<h3></div></div>';
	  }else{
	  	$my_sj= $sakura->fetch_all();
	  	foreach($my_sj as $fhz){
		    if($wan==0){
		        $bbnr=htmlspecialchars($fhz[3]);
		        $bb_nr=mb_substr($bbnr,0,99,"utf-8");
		        if(mb_strlen($bbnr,"utf-8")>99){
		          echo '<div class="lo_ve"><div class="love_zero_ta">TA: '.htmlspecialchars($fhz[2]).'</div><p class="love_zero_xx">&nbsp;&nbsp;&nbsp;&nbsp;<span onclick="zknr(this);" id="'.$bbnr.'" >'.$bb_nr.'...... <span style="color:blue;">[点击内容展开全部]</span></span></p><div class="love_zero_bz">笔者:'.htmlspecialchars($fhz[1]).'<br/>'.date("Y年m月d日 H:i:s",$fhz[4]).'</div></div>';
		        }else{
		           echo '<div class="lo_ve"><div class="love_zero_ta">TA: '.htmlspecialchars($fhz[2]).'</div><p class="love_zero_xx">&nbsp;&nbsp;&nbsp;<span ondblclick="bfyy(this);">'.$bbnr.'</span></p><div class="love_zero_bz">笔者:'.htmlspecialchars($fhz[1]).'<br/>'.date("Y年m月d日 H:i:s",$fhz[4]).'</div></div>';
		        }
		    }else if($wan==1){
		      $tplj=htmlspecialchars($fhz[1]);
		      if($tplj=="[object HTMLInputElement]" || $tplj==""){
		         //$tplj="http://api.sakura.gold/ksfjtp";

		      	 $bbnr=htmlspecialchars($fhz[3]);
			     $bb_nr=mb_substr($bbnr,0,66,"utf-8");
			     if(mb_strlen($bbnr,"utf-8")>66){
			        echo '<div class="n-r" id="'.htmlspecialchars($fhz[0]).'" onclick="danji(this);"><div><span onclick="zknr(this);" id="'.$bbnr.'" class="rcqs_nr">'.$bb_nr.'...... <span class="zknr">[点击内容展开全部]</span></span></div><hr/><div class="love_two_dzplyd"><span>👤笔者:'.htmlspecialchars($fhz[2]).'</span>&nbsp;&nbsp;<span>📝记录时间: '.date("Y年m月d日 H:i:s",$fhz[4]).'</span></div></div>';
			     }else{
			         echo '<div class="n-r" id="'.htmlspecialchars($fhz[0]).'" onclick="danji(this);"><div class="rcqs_nr" ondblclick="bfyy(this);">'.$bbnr.'</div><hr/><div class="love_two_dzplyd"><span>👤笔者:'.htmlspecialchars($fhz[2]).'</span>&nbsp;&nbsp;<span>📝记录时间: '.date("Y年m月d日 H:i:s",$fhz[4]).'</span></div></div>';
			      }

		      }else{
			      $bbnr=htmlspecialchars($fhz[3]);
			      $bb_nr=mb_substr($bbnr,0,66,"utf-8");
			      if(mb_strlen($bbnr,"utf-8")>66){
			        echo '<div class="n-r" id="'.htmlspecialchars($fhz[0]).'" onclick="danji(this);"><div class="love_two_img" style="background-image:url(../img/logo.png);"><div class="love_two_img" style="background-image:url('.$tplj.');" ><span class="lovd_two_ta">'.htmlspecialchars($fhz[2]).'的照片分享</span></div></div><div><span onclick="zknr(this);" id="'.$bbnr.'" class="rcqs_nr">'.$bb_nr.'...... <span class="zknr">[点击内容展开全部]</span></span></div><hr/><div class="love_two_dzplyd"><span>👤笔者:'.htmlspecialchars($fhz[2]).'</span>&nbsp;&nbsp;<span>📝记录时间: '.date("Y年m月d日 H:i:s",$fhz[4]).'</span></div></div>';
			      }else{
			         echo '<div class="n-r" id="'.htmlspecialchars($fhz[0]).'" onclick="danji(this);"><div class="love_two_img" style="background-image:url(../img/logo.png);"><div class="love_two_img" style="background-image:url('.$tplj.');" ><span class="lovd_two_ta">'.htmlspecialchars($fhz[2]).'的照片分享</span></div></div><div class="rcqs_nr" ondblclick="bfyy(this);">'.$bbnr.'</div><hr/><div class="love_two_dzplyd"><span>👤笔者:'.htmlspecialchars($fhz[2]).'</span>&nbsp;&nbsp;<span>📝记录时间: '.date("Y年m月d日 H:i:s",$fhz[4]).'</span></div></div>';
			      	}

			    }


		    }else if($wan==2){
		     // print_r($fhz);
		    echo "<div class='gonggao'>公告 ".date("Y年m月d日 H:i:s",$fhz[2])."<hr/>".$fhz[1]."</div>";
		    }
	  	}
	}
}
$Mysql->close();
?>