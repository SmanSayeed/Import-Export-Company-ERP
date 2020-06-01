<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	table{
		  border-collapse: collapse;
	}
	.border-black{
	
			border:1px solid black;
		height: 15px;
		
	}
	.centering{
		text-align: center;
	}
	body{
		
		font-size: 12px;
	}
	.custom_width{
		width: 20px;
	}
	
	

</style>
</head>

<body>
<table>
	<tr class="border-black">
		<td class="border-black" colspan="9"><h3 class="centering">SALES CONTRACT</h3></td>
	</tr>

	<tr class="border-black">
		<td colspan="4" class="border-black">
			<span>SALSE CONTRACT NO: {{$d->salescontractno}}</span><br>
			<span>DATE: {{$d->dateofcontractregistration}}</span>
		</td>

		<td colspan="5" class="border-black">
			<span>COUNTRY OF ORIGIN:BANGLADESH</span><br>
			<span>SALES TERM:{{$d->methodofpayment}}</span>
		</td>
	</tr>

	<tr class="border-black">
		<td class="border-black" colspan="4">
			<span>Exporter:</span><br>
			<span>Exporter Name:{{$admin->admin_username}}</span><br>
			<span>Exporter Address:{{$admin->admin_address}}</span><br>
			<span>Exporter Mobile:{{$admin->admin_mobile}}</span><br>
			<span>Exporter Email:{{$admin->admin_email}}</span><br>
			<span>Exporter Factory Address:{{$admin->admin_factory}}</span><br>
			<span>Exporter BIN:{{$admin->admin_bin}}</span><br>
			<span>Exporter ERC:{{$admin->admin_erc}}</span><br>
			
		

		</td >

		<td class="border-black" colspan="5">
			<span>Importer:</span>
			<span>{{$c->contactperson}}</span><br>
			<span>{{$c->address}}</span><br>
			<span>{{$c->contactno}}</span>
			<hr>
			<span>Notify Party:  @if($d->notifypartycheck==1) {{$d->notifyparty}} @elseif($d->notifypartycheck=='other') {{$d->notifyparty}} <br> Other Notify party: {{$d->othernotifyparty}} @endif</span>
		</td>
	</tr>

	<tr class="border-black">
		<td class="border-black" colspan="4">
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
	<tr class="border-black">
		<td colspan="4" class="border-black">

	
		<span>LOADING PORT:{{$d->shipmentform}}</span>

		</td>
		<td class="border-black" colspan="4">
		<span>FINAL DESTINATION:{{$d->shipmentdestination}}</span>
		
		</td>
		<td  colspan="1" class="border-black">
		<span>MODE OF TRANSPORT:{{$d->modeoftransport}}</span>
		
		</td>
	</tr>



	<tbody>
	<tr class="border-black">
		<td class="border-black" width="10%" >SL NO</td>
		<td class="border-black" colspan="1">SHIPPING MARKS</td>
		<td class="border-black" width="10%"HS CODE</td>
		<td class="border-black" colspan="1">DESCRIPTION OF GOODS</td>
		<td class="border-black" width="10%">PACK SIZE</td>
		<td class="border-black" width="10%">PCS/CTN</td>
		<td class="border-black " colspan="1">TOTAL CARTON</td>
		<td class="border-black" colspan="1">CFR/FOB VALUE IN US $/CTN</td>
		<td class="border-black" width="10%">TOTAL CFR/FOB VALUE IN US $</td>

	</tr>
		{{$i = 1}}{{$t=0}}{{$f=0}}
	@foreach($pro as $pro)
	<tr class="border-black">

		<td class="border-black">{{$i++}}</td>
		<td class="border-black">{{$pro->sales_pro_shippingmark}}</td>
		<td class="border-black">{{$pro->sales_pro_hscode}}</td>
		<td class="border-black">{{$d->productdescription}}</td>
		<td class="border-black">
				<span style="border-right:1px solid black;padding-right:30px;">{{$pro->sales_pro_weight}}</span> <span>{{$pro->sales_pro_unit}}</span></td>
		<td class="border-black">{{$pro->sales_pro_ctn}}</td>
		<td class="border-black">{{$pro->sales_total_carton}}</td>
		<td class="border-black">{{$pro->sales_pro_price*$pro->sales_pro_ctn}}  <?php $t+=$pro->sales_pro_price*$pro->sales_pro_ctn ?></td>
		<td class="border-black">{{$pro->sales_pro_price*$pro->sales_pro_ctn*$pro->sales_total_carton}} <?php $f+=$pro->sales_pro_price*$pro->sales_pro_ctn*$pro->sales_total_carton ?></td>
		

	</tr>
	@endforeach
	
		<tr class="border-black">
		<td class="border-black" colspan="8">FREIGHT CHARGE:</td>
		<td class="border-black">{{$t}}</td>
		
		

	</tr>
		<tr class="border-black">
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
		<tr class="border-black">
		<td class="border-black" colspan="8">TOTAL AMOUNT IN WORD</td>
		<td class="border-black"><?php echo numberTowords("$f")." ".$d->currency ?></td>
		
		

	</tr>
		<tr class="border-black">
		<td class="border-black" colspan="8">OTHER INFORMATION</td>
		<td class="border-black"></td>
		
		

	</tr>

	</tbody>
<tr>
	<td colspan="5"><br><u><b>DOCUMENT REQUIRED:</b></u><br>
	<span>THE FOLLOWING DOCUMENTS TO BE SENT TO THE BUYERS WITHIN 15(FIFTEEN) DAYS FROM</span><br>
	<span>THE SHIPMENT DATE</span>
	</td>
</tr>
<tr>
		<td colspan="5">A)INVOICE</td>
		<td colspan="2"> 3 COPIES</td>
	</tr>

	<tr>
		<td colspan="5">B)PACKING LIST</td>
		<td colspan="2">3 COPIES</td>
	</tr>

	<tr>
		<td colspan="5">C)COUNTRY OF ORIGIN</td>
		<td colspan="2">1 COPY</td>
	</tr>
	
		<tr>
	
		<td colspan="5">	<br>FULL SET OF B/L MADE OUT TO THE ORDER OF NEGOTIATING BANK AND ENDORSED TO THE ORDER OF BUYER AND THE CONTRACT IS VALID UP TO {{$d->lastdateofshipment}}</td>
		
	</tr>

<tr>

	<td colspan="5"><br><br>AS EXPORT-IMPORT(S) PTE LTD.</td>
	<td colspan="5"><br><br>FORK KG TRADERS</td>
</tr>
<tr>
	<td colspan="5"><br><br><br><br><br><br>AUTHORIZED SIGNATURE</td>
	<td colspan="5"><br><br><br><br><br><br>AUTHORIZED SIGNATURE</td>
</tr>


</table>


</body>
</html>