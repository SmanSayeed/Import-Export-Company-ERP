<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
table{
		  border-collapse: collapse;
	}
	.border-black{
			border:1px solid black;
		height: 15px;
		width: 20px;
	}
	.centering{
		text-align: center;
	}
	body{
		font-size: 12px;
	}

</style>
<body>
<table>
	<tr >
		<td class="border-black" colspan="9"><h3 class="centering">PACKING & WEIGHT LIST</h3></td>
	</tr>

	<tr class="border-black">
		<td class="border-black" colspan="9"> 
			<span>SALSE CONTRACT NO: {{$data->salescontractno}}</span><br>
			<span>INVOICE NO: {{$data->salescontractno}}</span><br>
		
			<span>EXP NO: {{$data->salescontractno}}</span><br>
			<span>PACKING LIST NO: {{$data->salescontractno}}</span><br>

			<span>FINAL DESTINATION:{{$data->shipmentdestination}}</span><br>
			<span>SALES TERM:{{$data->salescontractno}}</span><br>

			<span>PAYMENT TERM:{{$data->salescontractno}}</span><br>
			<span>LOADING PORT:{{$data->shipmentform}}</span><br>

			<span>PORT OF DISCHARGE:{{$data->shipmentdestination}}</span><br>
			<span>MODE OF CARRYING:{{$data->modeoftransport}}</span><br>

			
			
		</td>
	</tr>

	

	<tr class="border-black">
		<td class="border-black" colspan="5">
			<span>EXPORTER</span><br>
			<span>Exporter Name:{{$admin->admin_username}}</span><br>
			<span>Exporter Address:{{$admin->admin_address}}</span><br>
			<span>Exporter Mobile:{{$admin->admin_mobile}}</span><br>
			<span>Exporter Email:{{$admin->admin_email}}</span><br>
			<span>Exporter Factory Address:{{$admin->admin_factory}}</span><br>
			<span>Exporter BIN:{{$admin->admin_bin}}</span><br>
			<span>Exporter ERC:{{$admin->admin_erc}}</span><br>


		</td>

		<td class="border-black" colspan="4">
				<span>{{$c->contactperson}}</span><br>
			<span>{{$c->address}}</span><br>
			<span>{{$c->contactno}}</span>
			<hr>
			<span>Notify Party:  @if($data->notifypartycheck==1) {{$data->notifyparty}} @elseif($data->notifypartycheck=='other') {{$data->notifyparty}} <br> Other Notify party: {{$data->othernotifyparty}} @endif</span>
		</td>
	</tr>


	<tr class="border-black">
		<td class="border-black" colspan="4" >
			<span>BENEFICIARY BANK</span><br>
			<span>{{$bank->bankname}}</span><br>
			<span>{{$bank->bankaccount}}</span><br>
			<span>{{$bank->bankbranch}}</span>
			<span>{{$bank->bankswift}}</span>
			

		</td>

		<td class="border-black" colspan="5">
			<span>IMPORTER BANK</span><br>
			<span>{{$c->importerbank}}</span><br>
			<span>{{$c->branch}}</span><br>
			<span>{{$c->swift}}</span>
		</td>
	</tr>

	<tbody>
	<tr>
		<td class="border-black" colspan="1" >SL NO</td>
		<td class="border-black" colspan="1">SHIPPING MARKS</td>
		<td class="border-black" colspan="1">HS CODE</td>
		<td class="border-black" colspan="1">DESCRIPTION OF GOODS</td>
		<td class="border-black" colspan="1">PACK SIZE</td>
		<td class="border-black" colspan="1">PCS/CTN</td>
		<td class="border-black " colspan="1">TOTAL CARTON</td>
		<td class="border-black" colspan="1">TOTAL NET WEIGHT</td>
		<td class="border-black" colspan="1">TOTAL GROSS WEIGHT</td>

	</tr>
	{{$i=1}}{{$t=0}}{{$f=0}}
	@foreach($p as $p)
	<tr>

		<td class="border-black">{{$i++}}</td>
		<td class="border-black">{{$p->sales_pro_shippingmark}}</td>
		<td class="border-black">{{$p->sales_pro_hscode}}</td>
		<td class="border-black">{{$data->productdescription}}</td>
		<td class="border-black"><span style="border-right:1px solid black;padding-right:30px;">{{$p->sales_pro_weight}}</span> {{$p->sales_pro_unit}}</td>
		<td class="border-black">{{$p->sales_pro_ctn}}</td>
		<td class="border-black">{{$p->sales_pro_price*$p->sales_pro_ctn}}</td>
		<td class="border-black">{{$p->sales_pro_ctn*$p->sales_pro_weight}}<?php $t+=$p->sales_pro_ctn*$p->sales_pro_weight ?></td>
		<td class="border-black">{{$p->sales_pro_weight*$p->sales_pro_ctn}}<?php $f+=$p->sales_pro_weight*$p->sales_pro_ctn ?></td>
		

	</tr>
	@endforeach
	
		<tr>
		<td class="border-black" colspan="8">FREIGHT CHARGR:</td>
		<td class="border-black">{{$t}}</td>
		
		

	</tr>
		<tr>
		<td class="border-black" colspan="8">TOTAL CFR/FOB VALUE</td>
		<td class="border-black">{{$f}}</td>
		
		

	</tr>

	<?php
function numberTowords($num)
{

$ones = array(
0 =>"ZERO",
1 => "ONE",
2 => "TWO",
3 => "THREE",
4 => "FOUR",
5 => "FIVE",
6 => "SIX",
7 => "SEVEN",
8 => "EIGHT",
9 => "NINE",
10 => "TEN",
11 => "ELEVEN",
12 => "TWELVE",
13 => "THIRTEEN",
14 => "FOURTEEN",
15 => "FIFTEEN",
16 => "SIXTEEN",
17 => "SEVENTEEN",
18 => "EIGHTEEN",
19 => "NINETEEN",
"014" => "FOURTEEN"
);
$tens = array( 
0 => "ZERO",
1 => "TEN",
2 => "TWENTY",
3 => "THIRTY", 
4 => "FORTY", 
5 => "FIFTY", 
6 => "SIXTY", 
7 => "SEVENTY", 
8 => "EIGHTY", 
9 => "NINETY" 
); 
$hundreds = array( 
"HUNDRED", 
"THOUSAND", 
"MILLION", 
"BILLION", 
"TRILLION", 
"QUARDRILLION" 
); /*limit t quadrillion */
$num = number_format($num,2,".",","); 
$num_arr = explode(".",$num); 
$wholenum = $num_arr[0]; 
$decnum = $num_arr[1]; 
$whole_arr = array_reverse(explode(",",$wholenum)); 
krsort($whole_arr,1); 
$rettxt = ""; 
foreach($whole_arr as $key => $i){
	
while(substr($i,0,1)=="0")
		$i=substr($i,1,5);
if($i < 20){ 
/* echo "getting:".$i; */
$rettxt .= $ones[$i]; 
}elseif($i < 100){ 
if(substr($i,0,1)!="0")  $rettxt .= $tens[substr($i,0,1)]; 
if(substr($i,1,1)!="0") $rettxt .= " ".$ones[substr($i,1,1)]; 
}else{ 
if(substr($i,0,1)!="0") $rettxt .= $ones[substr($i,0,1)]." ".$hundreds[0]; 
if(substr($i,1,1)!="0")$rettxt .= " ".$tens[substr($i,1,1)]; 
if(substr($i,2,1)!="0")$rettxt .= " ".$ones[substr($i,2,1)]; 
} 
if($key > 0){ 
$rettxt .= " ".$hundreds[$key]." "; 
}
} 
if($decnum > 0){
$rettxt .= " and ";
if($decnum < 20){
$rettxt .= $ones[$decnum];
}elseif($decnum < 100){
$rettxt .= $tens[substr($decnum,0,1)];
$rettxt .= " ".$ones[substr($decnum,1,1)];
}
}
return $rettxt;
}
// extract($_POST);
// if(isset($convert))
// {
// echo "<p align='center' style='color:blue'>".numberTowords("$num")."</p>";
// }
?>


		<tr>
		<td class="border-black" colspan="8">TOTAL AMOUNT IN WORD</td>
		<td class="border-black"><?php echo numberTowords("$f")." ".$data->currency ?></td>
		
		

	</tr>
		<tr>
		<td class="border-black" colspan="8">OTHER INFORMATION</td>
		<td class="border-black"></td>
		
		

	</tr>

	</tbody>


</table>


</body>
</html>