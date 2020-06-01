<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\salesmodel;
use App\prosalesmodel;
use App\customermodel;
use App\Commercial_invoice;
use App\bankmodel;


class sales extends Controller
{

      public function register()
    {

        $cdata = DB::table('customermodels')->get();
        $bdata = DB::table('bankmodels')->get();
        $pdata = DB::table('pro_models')->get();
        // $data = DB::table('salesmodels')->get();
       return view('sales.sales-register',['customer'=>$cdata,
        'bank'=>$bdata],['pro'=>$pdata]);
    }

     public function details()
    {
         $cdata = DB::table('salesmodels')->get();
       return view('sales.sales-details',['sales'=>$cdata]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */




    function fetch(Request $request)
    {
         $select = $request->get('select');
         $value = $request->get('value');
         $dependent = $request->get('dependent');
         $data = DB::table('pro_models')
           ->where($select, $value)
          
           ->first();
               echo json_encode($data);
        // return (isset($data)) ? $data->pro_price : 0;
    }






    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            // 'name'=>'required',
            'beneficiarybank'=>'required',
            'importer'=>'required',
           'notifypartycheck'=>'required' 
            // 'salescontractno'=>'required',
            // 'dateofcontractregistration'=>'required',

            //   'shipmentform'=>'required',
            // 'shipmentdestination'=>'required',
            // 'nameoftheproduct'=>'required',
            // 'lastdateofshipment'=>'required',
            // 'contractvalidupto'=>'required',

            //   'packingofbags'=>'required',
            // 'partshipment'=>'required',
            // 'modeoftransport'=>'required',
            // 'modeofpayment'=>'required',
            // 'methodofpayment'=>'required',

            //   'currency'=>'required',
            // 'advancepayment'=>'required',
            // 'partadvancepayment'=>'required',
            // 'transshipment'=>'required',
            // 'productofshipment'=>'required',

            //   'percentegeofproductofshipment'=>'required',
            // 'iban'=>'required',
            // 'expno'=>'required',
            // 'lcl'=>'required',
            // 'lcno'=>'required',

            // 'productdescription'=>'required'

        ]);
         $sales_pro_key = rand(1,99999);
         $proEntry=new salesmodel();

        $proEntry->sales_pro_key=$sales_pro_key;
        $proEntry->name=$request->name;

          $expload_bank = explode ("-", $request->beneficiarybank);
              $eib0 =$expload_bank['0']; 
        $eib1 =$expload_bank['1']; 
        $proEntry->beneficiarybank=$eib0;
        $proEntry->beneficiarybank_id=$eib1;

        //  $proEntry->notifyparty=$request->notifyparty;
        // $proEntry->notifypartycheck=$request->notifypartycheck;
        // $proEntry->othernotifyparty=$request->othernotifyparty;

        if($request->notifypartycheck == 1){
            $proEntry->notifyparty=$request->notifyparty;
        $proEntry->notifypartycheck=$request->notifypartycheck;
    }elseif($request->notifypartycheck == 'other'){
         $proEntry->notifyparty=$request->notifyparty;
        $proEntry->notifypartycheck=$request->notifypartycheck;
        $proEntry->othernotifyparty=$request->othernotifyparty;
    }

        
        $expload_importer = explode ("-", $request->importer);
        // echo $expload_importer['0'].' '.$expload_importer['1'];die();
        $ei0 =$expload_importer['0']; 
        $ei1 =$expload_importer['1']; 

        //         echo  $ei0.' '. $ei1;
        // print_r($expload_importer);die();

        $proEntry->importer=$ei0;
        $proEntry->importer_id=$ei1;

        //         echo  $proEntry->importer.' '. $proEntry->importer_id;
        // print_r($expload_importer);die();


        $proEntry->salescontractno=$request->salescontractno;
        $proEntry->dateofcontractregistration=$request->dateofcontractregistration;

         $proEntry->shipmentform=$request->shipmentform;
        $proEntry->shipmentdestination=$request->shipmentdestination;
        $proEntry->nameoftheproduct=$request->nameoftheproduct;

        $proEntry->lastdateofshipment=$request->lastdateofshipment;
        $proEntry->contractvalidupto=$request->contractvalidupto;
        $proEntry->packingofbags=$request->packingofbags;

        //1
        if($request->partshipment=='other') $proEntry->partshipment=$request->partshipmentother;
          else $proEntry->partshipment=$request->partshipment; //1
          //2
          if($request->modeoftransport=='other') $proEntry->modeoftransport=$request->modeoftransportother;
        else $proEntry->modeoftransport=$request->modeoftransport; //2
        //3
            if($request->modeofpayment=='other') $proEntry->modeofpayment=$request->modeofpaymentother;
        else $proEntry->modeofpayment=$request->modeofpayment; //3
            
            // echo $request->modeofpayment.' '.$request->modeofpaymentother;die();
        //4
            if($request->methodofpayment=='other') $proEntry->methodofpayment=$request->methodofpaymentother;
        else $proEntry->methodofpayment=$request->methodofpayment; //4
        //5
        if($request->currency=='other')$proEntry->currency=$request->currencyother;
        else $proEntry->currency=$request->currency; //5

        $proEntry->advancepayment=$request->advancepayment; 

        //6
        if($request->partadvancepayment=='other') $proEntry->partadvancepayment=$request->partadvancepaymentother;
        else $proEntry->partadvancepayment=$request->partadvancepayment; //6
        //7

        if($request->transshipment=='other') $proEntry->transshipment=$request->transshipmentother;
        else $proEntry->transshipment=$request->transshipment; //7

        //8
        if($request->productofshipment=='other') $proEntry->productofshipment=$request->productofshipmentother;
        else $proEntry->productofshipment=$request->productofshipment; //8

         $proEntry->percentegeofproductofshipment=$request->percentegeofproductofshipment;
        $proEntry->iban=$request->iban;
        $proEntry->expno=$request->expno;

        $proEntry->lcl=$request->lcl;
        $proEntry->lcno=$request->lcno;
        $proEntry->productdescription=$request->productdescription;

        //  $proEntry->productcode=$request->productcode;
        // $proEntry->quantitypcs=$request->quantitypcs;
        // $proEntry->ctns=$request->ctns;
        // $proEntry->price=$request->price;
        // $proEntry->netweight=$request->netweight;

        //  $proEntry->totalnetweightcgs=$request->totalnetweightcgs;
        // $proEntry->grossweight=$request->grossweight;
        // $proEntry->totalgrossweightcgs=$request->totalgrossweightcgs;
      
        // echo "<pre>";
        // print_r($proEntry);die();
        //  echo "</pre>";

        foreach ($request->addmore as $key => $value) {
            // prosalesmodel::create($value);
             // $this->validate($request,[
             //    $value['sales_pro_name']=>'required'
             //    ]);
          
                 $data = array(
        'sales_pro_shippingmark' => $value['sales_pro_shippingmark'],
        'sales_pro_name' => $value['sales_pro_name'],

        'sales_pro_hscode' => $value['sales_pro_hscode'],
        'sales_pro_ctn' => $value['sales_pro_ctn'],

        'sales_pro_unit' => $value['sales_pro_unit'],
        'sales_pro_weight' => $value['sales_pro_weight'],
        'sales_pro_price' => $value['sales_pro_price'],

        'sales_pro_cbm' => $value['sales_pro_cbm'],
        'sales_pro_height' => $value['sales_pro_height'],
        'sales_pro_width' => $value['sales_pro_width'],
        'sales_pro_length' => $value['sales_pro_length'],
        'sales_total_carton' => $value['sales_total_carton'],
        'sales_total_net_weight'  => $value['sales_total_net_weight'],
        'sales_fob_value'  => $value['sales_fob_value'],
        'sales_total_fob_value'  => $value['sales_total_fob_value'],
        
        'sales_pro_key'=>$sales_pro_key
       );
       $insert_data[] = $data;
        // print_r($insert_data);

        }

               prosalesmodel::insert($insert_data);
               Commercial_invoice::insert( $insert_data );
               $proEntry->save();
          return redirect('sales-registration')->with('message','Submitted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { $cdata = DB::table('customermodels')->get();
        $bdata = DB::table('bankmodels')->get();
         
        $salesEdit = bankmodel::where('id',$id)->first();
        return view('sales.sales-edit',['sales'=>$salesEdit,'customer'=>$cdata,
        'bank'=>$bdata]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        
        $proEntry =salesmodel::find($id);

         $proEntry->name=$request->name;
        $proEntry->beneficiarybank=$request->beneficiarybank;
        $proEntry->importer=$request->importer;
        $proEntry->salescontractno=$request->salescontractno;
        $proEntry->dateofcontractregistration=$request->dateofcontractregistration;

         $proEntry->shipmentform=$request->shipmentform;
        $proEntry->shipmentdestination=$request->shipmentdestination;
        $proEntry->nameoftheproduct=$request->nameoftheproduct;
        $proEntry->lastdateofshipment=$request->lastdateofshipment;
        $proEntry->contractvalidupto=$request->contractvalidupto;

         $proEntry->packingofbags=$request->packingofbags;
        $proEntry->partshipment=$request->partshipment;
        $proEntry->modeoftransport=$request->modeoftransport;
        $proEntry->modeofpayment=$request->modeofpayment;
        $proEntry->methodofpayment=$request->methodofpayment;

         $proEntry->currency=$request->currency;
        $proEntry->advancepayment=$request->advancepayment;
        $proEntry->partadvancepayment=$request->partadvancepayment;
        $proEntry->transshipment=$request->transshipment;
        $proEntry->productofshipment=$request->productofshipment;

         $proEntry->percentegeofproductofshipment=$request->percentegeofproductofshipment;
        $proEntry->iban=$request->iban;
        $proEntry->expno=$request->expno;
        $proEntry->lcl=$request->lcl;
        $proEntry->lcno=$request->lcno;

         $proEntry->productcode=$request->productcode;
        $proEntry->quantitypcs=$request->quantitypcs;
        $proEntry->ctns=$request->ctns;
        $proEntry->price=$request->price;
        $proEntry->netweight=$request->netweight;

         $proEntry->totalnetweightcgs=$request->totalnetweightcgs;
        $proEntry->grossweight=$request->grossweight;
        $proEntry->totalgrossweightcgs=$request->totalgrossweightcgs;
        $proEntry->productdescription=$request->productdescription;

         $proEntry->save();
         return redirect('/sales-details')->with('message','Updated Successfully');
    }

      public function delete($id)
    {
        
        $data = salesmodel::find($id);
        $data->delete();
        return redirect('/sales-details')->with('message','Deleted Successfully');
    }

    public function sales_contract_product_list_page($id)
    {           $data = DB::table('salesmodels')
             
              ->where('id','=',$id)
              ->first();
              $key= $data->sales_pro_key;
                

                $p = DB::table('prosalesmodels')
              ->where('sales_pro_key','=',$key)
              ->get();
        return view('sales.sales_contract_product_list_page')->with('data',$data)->with('p',$p);
    }

     public function sales_contract_product_list_edit($id)
    {           $data = DB::table('prosalesmodels')->where('id','=',$id)->first();
        // echo "<pre>";
        // print_r($data);die();
        //  echo "<pre>";
        return view('sales.sales_contract_product_list_update')->with('data',$data);
    }

     public function sales_contract_product_list_update(Request $request, $id)
    {
         $proEntry = prosalesmodel::find($id);
    
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
            // echo $id;die();

         $proEntry->save();
         return redirect()->back()->with('message','Updated Successfully');
    }


    

    public function sales_contract_product_list_delete($id)
    { 
        $data = prosalesmodels::find($id);
        $data->delete();
         return redirect()->back()->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
}
