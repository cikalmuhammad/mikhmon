																																																																																																																																																																																																						 <!--https://isbernendi.github.io/-awal-->	
<?php 
if(substr($validity,-1) == "d"){
  $validity = "   <br>MASA AKTIF : ".substr($validity,0,-1)." HARI";
}else if(substr($validity,-1) == "h"){
  $validity = "MASA AKTIF : ".substr($validity,0,-1)."Jam";
}
if(substr($timelimit,-1) == "d" & strlen($timelimit) >3){
  $timelimit = "Durasi:".((substr($timelimit,0,-1)*7) +  substr($timelimit, 2,1))." HARI";
}else if(substr($timelimit,-1) == "d"){
  $timelimit = "Durasi:".substr($timelimit,0,-1)." HARI";
}else if(substr($timelimit,-1) == "h"){
  $timelimit = "Durasi:".substr($timelimit,0,-1)."Jam";
}else if(substr($timelimit,-1) == "w"){
  $timelimit = "Durasi:".(substr($timelimit,0,-1)*7)." HARI";
}	            	            
if($getprice == "3000"){ $color = "#E50877";} 
elseif($getprice == "1000"){ $color = "#752CEB";}
elseif($getprice == "2000"){ $color = "#13C013";}
elseif($getprice == "3000"){ $color = "#E50877";}
elseif($getprice == "4000"){ $color = "#F75418";}
elseif($getprice == "5000"){ $color = "#FF0000";}
elseif($getprice == "8000"){ $color = "#663399";}
elseif($getprice == "10000"){ $color = "#663399";}
elseif($getprice == "13000"){ $color = "#2E8B57";}
elseif($getprice == "15000"){ $color = "#2E8B57";}
elseif($getprice == "17000"){ $color = "#0000FF";}
elseif($getprice == "20000"){ $color = "#0000FF";}
elseif($getprice == "35000"){ $color = "#6495ED";} 
elseif($getprice == "40000"){ $color = "#6495ED";} 
elseif($getprice == "80000"){ $color = "#FF8C00";}
elseif($getprice == "85000"){ $color = "#FF8C00";}
elseif($getprice == "160000"){ $color = "#DC143C";} 
elseif($getprice == "170000"){ $color = "#DC143C";} 
else{ $color = "#FF69B4";}?>  
 <!--https://isbernendi.github.io/-mulai-->
<table style="display: inline-block;border-collapse: collapse;border: 1px solid <?php echo $color ?>;margin: 2.5px;width: 150px;overflow:hidden;position:relative;padding: 1px;margin: 0px;border: 2px solid<?php echo $color ?>; background:; ">
<tbody>
<tr>
<td style="background:#fff;color:#666;padding:2px;" valign="top" colspan="2">
<div style="text-align:center;color:#000000;font-size:9px;font-weight:bold;margin:1px;padding:2.5px;">	
<img style="margin:2px ;" width="197" height="35" src="<?php echo $logo;?>" alt="logo">	
<div style="text-align:center;font-weight:bold;font-family:Tahoma;font-size:13px;padding-left:17px;color:#ff0101"> <?= $price; ?>
</div>
</div>
</td>
<tr>
<td style="color:#666;" valign="top">
<table style="width:100%;">
<tbody>
<tr>	
<tr>
<td style="width:65px">
</div>		
</td>	
<td style="width:100px">
<div style="float:right;margin-top:2px;margin-right:0px;width:5%;text-align:right;font-size:7px;">
</div>	
</td>		
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="color:#666;border-collapse: collapse;" valign="top">
<table style="width:100%;border-collapse: collapse;">
<tbody>
<tr>
<td style="width:95px"valign="top" >
<div style="clear:both;color:#555;margin-top:-15px;margin-bottom:1px;">
<?php if($usermode == "vc"){?> 
<div style="padding:0px;border-bottom:1.5px solid;text-align:center;font-weight:bold;font-size:15px;color:#000000">Kode Voucher</div>		
<div style="padding:0px;border-bottom:1.5px solid;text-align:center;font-weight:bold;font-size:20px;color:#000000"><?php echo $username;?>	</div>
<?php }elseif($usermode == "up"){?>
<div style="padding:0px;border-bottom:1.5px solid;text-align:center;font-weight:bold;font-size:15px;color:<?php echo $color ?>">Member</div>	
<div style="padding:1px;border-bottom:1px solid;text-align:center;font-weight:bold;font-size:14px;color:#000000;"><?php echo "User: ".$username."<br>Pass: ".$password;?></div>
<?php }?>
<!---voucher-akhir-->
<div style="margin-top:3px;">
</div>	
</tr>
<td style="background:#fff;padding:2px;" valign="top" colspan="2">
<div style="margin-top:-1px;text-align:center;color:#000000;font-size:8px;font-weight:bold;"> 

<div style="margin-top:-1px;text-align:center;color:#000000;font-size:8px;font-weight:bold;"><?php echo $validity;?> 
</div>
</td>	
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
  <!--https://isbernendi.github.io/-akhir-->	        	        	        	        	        	        	        	        	        	        	        	        	        	        