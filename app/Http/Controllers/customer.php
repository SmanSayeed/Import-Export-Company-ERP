<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\customermodel;
use DB;

class customer extends Controller
{

      public function register()
    {
       return view('customer.customer-register');
    }

     public function details()
    {

       $data = DB::table('customermodels')->get();


       return view('customer.customer-details',['customer'=>$data]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            'companyname'=>'required',
            'contactperson'=>'required',
            'branch'=>'required',
            'address'=>'required',

            'contactno'=>'required',
            'swift'=>'required',
            'email'=>'required',
            'contactemail'=>'required',

            'phone'=>'required',
            'importerbank'=>'required',
         

        ]);

        $bankEntry=new customermodel();

        $bankEntry->companyname=$request->companyname;
          $bankEntry->contactperson=$request->contactperson;
            $bankEntry->branch=$request->branch;
              $bankEntry->address=$request->address;
                $bankEntry->contactno=$request->contactno;

      $bankEntry->contactemail=$request->contactemail;
        $bankEntry->swift=$request->swift;
          $bankEntry->email=$request->email;
            $bankEntry->phone=$request->phone;
              $bankEntry->importerbank=$request->importerbank;
     

        $bankEntry->save();

        return redirect('customer-registration')->with('message','Submitted Successfully');
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
         $bankEdit = customermodel::where('id',$id)->first();
        return view('customer.customer-edit',['customer'=>$bankEdit]);
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
           $bankEntry = customermodel::find($id);
      
        $bankEntry->companyname=$request->companyname;
          $bankEntry->contactperson=$request->contactperson;
            $bankEntry->branch=$request->branch;
              $bankEntry->address=$request->address;
                $bankEntry->contactno=$request->contactno;

      $bankEntry->contactemail=$request->contactemail;
        $bankEntry->swift=$request->swift;
          $bankEntry->email=$request->email;
            $bankEntry->phone=$request->phone;
              $bankEntry->importerbank=$request->importerbank;

         $bankEntry->save();
         return redirect('/customer-details')->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = customermodel::find($id);
        $data->delete();
        return redirect('/customer-details')->with('message','Deleted Successfully');
    }
}
