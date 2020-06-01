<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bankmodel;
use DB;
class bank extends Controller
{

     public function register()
    {
       return view('bank.bank-register');
    }

     public function details(Request $request)
    {

       $data = DB::table('bankmodels')->get();


       return view('bank.bank-details',['bank'=>$data]);
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
            'bankname'=>'required',
            'bankaccount'=>'required',
            'bankbranch'=>'required',
            'bankswift'=>'required'

        ]);

        $bankEntry=new bankmodel();

        $bankEntry->bankname=$request->bankname;
        $bankEntry->bankaccount=$request->bankaccount;
        $bankEntry->bankbranch=$request->bankbranch;
        $bankEntry->bankswift=$request->bankswift;

        $bankEntry->save();

        return redirect('bank-registration')->with('message','Submitted Successfully');
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
        
        $bankEdit = bankmodel::where('id',$id)->first();
        return view('bank.bank-edit',['bank'=>$bankEdit]);
    }

   
    public function update(Request $request, $id)
    {

        
        $bankEntry = bankmodel::find($id);
         $bankEntry->bankname=$request->bankname;
        $bankEntry->bankaccount=$request->bankaccount;
        $bankEntry->bankbranch=$request->bankbranch;
        $bankEntry->bankswift=$request->bankswift;
         $bankEntry->save();
         return redirect('/bank-details')->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = bankmodel::find($id);
        $data->delete();
        return redirect('/bank-details')->with('message','Deleted Successfully');
    }
}
