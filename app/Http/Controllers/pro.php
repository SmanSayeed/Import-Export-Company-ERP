<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proModel;
use DB;
use App\prosalesmodel;
class pro extends Controller
{

     public function register()
    {
       return view('pro.pro-register');	
    }

     public function details(Request $request)
    {

       $data = DB::table('pro_models')->get();


       return view('pro.pro-details',['pro'=>$data]);
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
    public function create()
    {
         
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
            

        ]);

        $proEntry=new proModel();

        $h=$request->pro_height;
        $w=$request->pro_width;
        $l=$request->pro_length;
     
        $cbm =( $h*$w*$l)/(1728*35.3145);
        // echo $h.' '.$w.' '.$l.' '.$cbm;
        $proEntry->pro_name=$request->pro_name;
        $proEntry->pro_hscode=$request->pro_hscode;
      
        $proEntry->pro_unit=$request->pro_unit;
        $proEntry->pro_weight=$request->pro_weight;

         $proEntry->pro_ctn=$request->pro_ctn;
        $proEntry->pro_price=$request->pro_price;
        $proEntry->pro_cbm=$cbm;
        $proEntry->pro_height=$request->pro_height;

         $proEntry->pro_width=$request->pro_width;
        $proEntry->pro_length=$request->pro_length;
    //     echo "<pre>";
    // print_r($proEntry);
    //    echo "<pre>";    
    // die();

        $proEntry->save();

        return redirect('pro-registration')->with('message','Submitted Successfully');
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
    {
        
        $proEdit = proModel::where('id',$id)->first();
        return view('pro.pro-edit',['p'=>$proEdit]);
    }

   
    public function update(Request $request, $id)
    {

     
        $cbm =( $request->height*  $request->width* $request->length)/(1728*35.3145);

        $proEntry = proModel::find($id);
        $proEntry->pro_name=$request->pro_name;
        $proEntry->pro_hscode=$request->pro_hscode;
      
        $proEntry->pro_unit=$request->pro_unit;
        $proEntry->pro_unit=$request->pro_weight;

         $proEntry->pro_ctn=$request->pro_ctn;
        $proEntry->pro_price=$request->pro_price;
        // $proEntry->pro_cbm=$request->pro_cbm;
        $proEntry->pro_cbm=$request->$cbm;
        $proEntry->pro_height=$request->pro_height;

         $proEntry->pro_width=$request->pro_width;
        $proEntry->pro_length=$request->pro_length;

         $proEntry->save();
         return redirect('/pro-details')->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = proModel::find($id);
        $data->delete();
        return redirect('/pro-details')->with('message','Deleted Successfully');
    }
}
