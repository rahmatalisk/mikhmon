																																										
<?php
if($datalimit == ""){$datalimit = "Unlimited";}else{$datalimit = $datalimit;}
if($timelimit == ""){$timelimit = "Unlimited";}else{$timelimit = $timelimit;}
?>
<style type="text/css">
.rotate {
  vertical-align: bottom;
  text-align: center;
}
.rotate span {
  -ms-writing-mode: tb-rl;
  -webkit-writing-mode: vertical-rl;
  writing-mode: vertical-rl;
  transform: rotate(360deg);
  white-space: nowrap;
}
.bgwhite{
 -webkit-print-color-adjust: exact;
 background-color: #fff;
 color:#000;
}
.fontID{
	font-size : 18px;
}
</style>

<table class="voucher border" bgcolor="#31B404" style="border-left:solid 2px #830303; border-right:solid 2px #9a06d4; border-top:0px; border-bottom:0px; width: 245px; color:#fff; text-align: center; -webkit-print-color-adjust: exact;">
<tbody>
<tr>
<td colspan="2" style="font-weight:bold;"><?= $hotspotname ?></td>
<td class="rotate bgwhite" rowspan="8" style="vertical-align: top; font-size:20px; font-wight:bold; padding-top:20px; border-left:solid 2px #2D2D2D;"><span style="color: <?= $tcolor;?>"><?= $price;?></span></td>
</tr>
<tr>
<td class="bgwhite" >Package</td>
<td class="bgwhite" ><?= $getuprofile;?></td>
</tr>
<tr>
<td class="bgwhite" >Data Limit</td>
<td class="bgwhite" ><?= $datalimit;?></td>
</tr>
<tr>
<td class="bgwhite" >Time Limit</td>
<td class="bgwhite" ><?= $timelimit;?></td>
</tr>
<tr>
<td class="bgwhite" >Validity</td>
<td class="bgwhite" ><?= $validity;?></td>
</tr>
<?php if($usermode == "vc"){?>
<tr>
<td colspan="2" style="font-size:12px; font-weight: bold;">ID.VOUCHER</td>
</tr>
<tr>
<td colspan="2" class="bgwhite fontID" ><?= $username;?></td>
</tr>
<?php }elseif($usermode == "up"){?>
<tr>
<td style="font-size:12px; font-weight: bold;">USERNAME</td>
<td style="font-size:12px; font-weight: bold;">PASSWORD</td>
</tr>
<tr>
<td class="bgwhite fontID" ><?= $username;?></td>
<td class="bgwhite fontID" ><?= $password;?></td>
</tr>
<?php }?>	
<tr>
<td colspan="2" style="width: 100%;">	
<table style="width: 100%;">	
<tr>	
<td style="font-size:10px; text-align: left;">more info:</td>
<td style="font-size:10px; text-align: right;">www.fb.com/optimalitsolutionbgb</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>	        	        	        	        	        	        	        