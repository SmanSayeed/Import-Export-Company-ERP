<?php

namespace App\Http\Controllers;

use App\Commercial_invoice;   
use PDF;
use DB;
use Illuminate\Http\Request;
use Session;
class pdfGenerate extends Controller
{
public function index(){

	$data = DB::table('salesmodels')
       ->orderBy('id','desc')
       ->get();


	return view('files.sale-contract-page')->with('data',$data);
}
public function contractView($id){



	  $data = DB::table('salesmodels')
             
              ->where('id','=',$id)
              ->first();
              $key= $data->sales_pro_key;
	// echo "<pre>";
	// print_r($data); die();
	// echo "</pre>";
              	 $cdata = DB::table('customermodels')->where('id','=',$data->importer_id)->first(); //Should be ID
              	
              	 echo "<pre>";

              	// print_r($cdata);
               //     echo "</pre>";
               //   die();
				// echo "</pre>";	
                $p = DB::table('prosalesmodels')
              ->where('sales_pro_key','=',$key)
              ->get();

                  $admin = DB::table('admins')
              ->where('id','=',Session::get('id'))
              ->first();

               $bank = DB::table('bankmodels')->where('id','=',$data->beneficiarybank_id)->first();

	return view('files.sales-contract-view')->with('d',$data)->with('pro',$p)->with('c',$cdata)->with('admin',$admin)->with('bank',$bank);
}

public function pdfdownload($id){
	        $admin = DB::table('admins')
              ->where('id','=',Session::get('id'))
              ->first();
	 $d = DB::table('salesmodels')
             
              ->where('id','=',$id)
              ->first();
              $key= $d->sales_pro_key;
	// echo "<pre>";
	// print_r($data); die();
	// echo "</pre>";
              	 $c = DB::table('customermodels')->where('id','=',$d->importer_id)->first(); //Should be ID
    //           	 echo $cdata->address;
    //           	 echo "<pre>";

    //           	print_r($cdata); die();
				// echo "</pre>";	
                $pro = DB::table('prosalesmodels')
              ->where('sales_pro_key','=',$key)
              ->get();

              $bank = DB::table('bankmodels')->where('id','=',$d->beneficiarybank_id)->first();
	// return view('files.sales-contract-view')->with('d',$data)->with('pro',$p)->with('c',$cdata);

	$pdf = PDF::loadView('files.sales-contract-view',compact('d','pro','c','admin','bank'));
return $pdf->download('salescontract-'.$d->salescontractno.'.pdf');
}


public function commercial_invoice_edit($id){
  $data = DB::table('commercial_invoices')->where('id','=',$id)->first();
  return view('files.commercial_invoice_edit')->with('data',$data);
}

public function commercial_invoice_update(Request $request,$id){
          


        $proEntry = Commercial_invoice::find($id);
   
          
        $proEntry->sales_pro_shippingmark=$request->sales_pro_shippingmark;
        $proEntry->sales_pro_name=$request->sales_pro_name;
      
        $proEntry->sales_pro_hscode=$request->sales_pro_hscode;
        $proEntry->sales_pro_ctn=$request->sales_pro_ctn;

         $proEntry->sales_pro_unit=$request->sales_pro_unit;
        $proEntry->sales_pro_weight=$request->sales_pro_weight;
        $proEntry->sales_pro_price=$request->sales_pro_price;
        $proEntry->sales_pro_height=$request->sales_pro_height;

         $proEntry->sales_pro_width=$request->sales_pro_width;
        $proEntry->sales_pro_length=$request->sales_pro_length;


        $proEntry->sales_total_carton=$request->sales_total_carton;
        $proEntry->sales_total_net_weight=$request->sales_total_net_weight;

         $proEntry->sales_fob_value=$request->sales_fob_value;
        $proEntry->sales_total_fob_value=$request->sales_total_fob_value;
        $proEntry->update();

         return redirect()->back()->with('message','Updated Successfully');
}



public function commercial_invoice_view($id){
	   $admin = DB::table('admins')
              ->where('id','=',Session::get('id'))
              ->first();
              // print_r($admin);die();
   $data = DB::table('salesmodels')
             ->where('id','=',$id)
              ->first();
              $key= $data->sales_pro_key;

                $p = DB::table('commercial_invoices')
              ->where([['sales_pro_key','=',$key],['publish_key','=',1],])
              ->get();

              $c = DB::table('customermodels')->where('id','=',$data->importer_id)->first();

              $bank = DB::table('bankmodels')->where('id','=',$data->beneficiarybank_id)->first();
             //  echo "<pre>";
             //  print_r($p) ;
             // echo "</pre>";die();
 // dd( $p);
// dd( $data);
// dd( $c);
// dd( $bank);
   // die();
      return view('files.commercial-invoice-view')->with('data',$data)->with('p',$p)->with('admin',$admin)->with('c',$c)->with('bank',$bank);
}

public function commercial_invoice_download($id){
	 
  $admin = DB::table('admins')
              ->where('id','=',Session::get('id'))
              ->first();
   $data = DB::table('salesmodels')
              ->where('id','=',$id)
              ->first();
              $key= $data->sales_pro_key;

                $p = DB::table('commercial_invoices')
              ->where([['sales_pro_key','=',$key],['publish_key','=',1],])
              ->get();

              $c = DB::table('customermodels')->where('id','=',$data->importer_id)->first();
               $bank = DB::table('bankmodels')->where('id','=',$data->beneficiarybank_id)->first();
   // echo $p;die();
                $pdf = PDF::loadView('files.commercial-invoice-view',compact('p','data','admin','c','bank'));
return $pdf->download('commercial-invoice-'.$data->salescontractno.'.pdf'); 
}

public function packing_invoice_view($id){
	   


    $admin = DB::table('admins')
              ->where('id','=',Session::get('id'))
              ->first();
   $data = DB::table('salesmodels')
             
              ->where('id','=',$id)
              ->first();
              $key= $data->sales_pro_key;

                $p = DB::table('commercial_invoices')
              ->where([['sales_pro_key','=',$key],['publish_key','=',1],])
              ->get();
                $c = DB::table('customermodels')->where('id','=',$data->importer_id)->first();
                   $bank = DB::table('bankmodels')->where('id','=',$data->beneficiarybank_id)->first();
   // echo $p;die();
                      // dd( $p);die();
      return view('files.packing-invoice-view')->with('data',$data)->with('p',$p)->with('admin',$admin)->with('c',$c)->with('c',$c)->with('bank',$bank);
}

public function packing_invoice_download($id){
	 
  $admin = DB::table('admins')
              ->where('id','=',Session::get('id'))
              ->first();

   $data = DB::table('salesmodels')
             ->where('id','=',$id)
              ->first();
              $key= $data->sales_pro_key;

                $p = DB::table('commercial_invoices')
              ->where([['sales_pro_key','=',$key],['publish_key','=',1],])
              ->get();
                $c = DB::table('customermodels')->where('id','=',$data->importer_id)->first();
   // echo $p;die();
                   $bank = DB::table('bankmodels')->where('id','=',$data->beneficiarybank_id)->first();
                $pdf = PDF::loadView('files.packing-invoice-view',compact('p','data','admin','c','bank'));
return $pdf->download('packing-invoice-'.$data->salescontractno.'.pdf'); 
}

public function commercial_invoice_manage($id){
		$data = DB::table('salesmodels')
             
              ->where('id','=',$id)
              ->first();
              $key= $data->sales_pro_key;

             

                $p = DB::table('commercial_invoices')
              ->where('sales_pro_key','=',$key)
              ->get();
	return view('files.commercial-invoice-page')->with('data',$data)->with('p',$p);

}


public function commercial_invoice_publish($id){
  DB::table('commercial_invoices')
  ->where('id',$id)
  ->update(
    ['publish_key'=>1]
    );
    return back();
}
public function commercial_invoice_unpublish($id){
  
    $d = DB::table('commercial_invoices')
  ->where('id',$id)
  ->update(
    ['publish_key'=>0]
    );
  
  return back();
}



public function expform_view($id){
     


    $admin = DB::table('admins')
              ->where('id','=',Session::get('id'))
              ->first();
   $data = DB::table('salesmodels')
             
              ->where('id','=',$id)
              ->first();
              $key= $data->sales_pro_key;

                $p = DB::table('commercial_invoices')
              ->where([['sales_pro_key','=',$key],['publish_key','=',1],])
              ->get();
                $c = DB::table('customermodels')->where('id','=',$data->importer_id)->first();
                   $bank = DB::table('bankmodels')->where('id','=',$data->beneficiarybank_id)->first();
   // echo $p;die();
      return view('files.exp_form')->with('data',$data)->with('p',$p)->with('admin',$admin)->with('c',$c)->with('c',$c)->with('bank',$bank);
}

public function expform_download($id){
   
  $admin = DB::table('admins')
              ->where('id','=',Session::get('id'))
              ->first();

   $data = DB::table('salesmodels')
             ->where('id','=',$id)
              ->first();
              $key= $data->sales_pro_key;

                $p = DB::table('commercial_invoices')
              ->where([['sales_pro_key','=',$key],['publish_key','=',1],])
              ->get();
                $c = DB::table('customermodels')->where('id','=',$data->importer_id)->first();
   // echo $p;die();
                   $bank = DB::table('bankmodels')->where('id','=',$data->beneficiarybank_id)->first();
                $pdf = PDF::loadView('files.exp_form',compact('p','data','admin','c','bank'));
return $pdf->download('packing-invoice-'.$data->salescontractno.'.pdf'); 
}




public function cashhub_view($id){
     


    $admin = DB::table('admins')
              ->where('id','=',Session::get('id'))
              ->first();
   $data = DB::table('salesmodels')
             
              ->where('id','=',$id)
              ->first();
              $key= $data->sales_pro_key;

                $p = DB::table('commercial_invoices')
              ->where([['sales_pro_key','=',$key],['publish_key','=',1],])
              ->get();
                $c = DB::table('customermodels')->where('id','=',$data->importer_id)->first();
                   $bank = DB::table('bankmodels')->where('id','=',$data->beneficiarybank_id)->first();
   // echo $p;die();
      return view('files.cashhub')->with('data',$data)->with('p',$p)->with('admin',$admin)->with('c',$c)->with('c',$c)->with('bank',$bank);
}

public function cashhub_download($id){
   
  $admin = DB::table('admins')
              ->where('id','=',Session::get('id'))
              ->first();

   $data = DB::table('salesmodels')
             ->where('id','=',$id)
              ->first();
              $key= $data->sales_pro_key;

                $p = DB::table('commercial_invoices')
              ->where([['sales_pro_key','=',$key],['publish_key','=',1],])
              ->get();
                $c = DB::table('customermodels')->where('id','=',$data->importer_id)->first();
   // echo $p;die();
                   $bank = DB::table('bankmodels')->where('id','=',$data->beneficiarybank_id)->first();
                $pdf = PDF::loadView('files.cashhub',compact('p','data','admin','c','bank'));
return $pdf->download('packing-invoice-'.$data->salescontractno.'.pdf'); 
}


}
