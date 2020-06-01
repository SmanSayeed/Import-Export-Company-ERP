@extends('master')
@section('content')
 <div class="col-xs-12">

 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sales Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                 <div class="table-responsive">
                 @if($m = Session::get('message'))
    <h1 class="btn btn-success">{{$m}}</h1>
    @endif
 <!-- ====================================================== -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      
      <th scope="col">name</th>
      <th scope="col">beneficiarybank</th>
      <th scope="col">importer</th>
      <th scope="col">salescontractno</th>
      <th scope="col">dateofcontractregistration</th>

      <th scope="col">shipmentform</th>
      <th scope="col">shipmentdestination</th>
      <th scope="col">nameoftheproduct</th>
      <th scope="col">lastdateofshipment</th>
      <th scope="col">contractvalidupto</th>

      <th scope="col">packingofbags</th>
      <th scope="col">partshipment</th>
      <th scope="col">modeoftransport</th>
       <th scope="col">modeofpayment</th>
      <th scope="col">methodofpayment</th>

      <th scope="col">currency</th>
      <th scope="col">advancepayment</th>
      <th scope="col">partadvancepayment</th>
       <th scope="col">transshipment</th>
      <th scope="col">percentegeofproductofshipment</th>

      <th scope="col">iban</th>
      <th scope="col">expno</th>
      <th scope="col">lcl</th>
       <th scope="col">lcno</th>

      <th scope="col">productdescription</th>
      

      <th>Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($sales as $b)
    <tr>

      <td scope="row">{{$b->id}}</td>

      <td>{{$b->name}}</td>
       <td>{{$b->beneficiarybank}}</td>
        <td>{{$b->importer}}</td>
         <td>{{$b->salescontractno}}</td>
          <td>{{$b->dateofcontractregistration}}</td>

       <td>{{$b->shipmentform}}</td>
        <td>{{$b->shipmentdestination}}</td>
         <td>{{$b->nameoftheproduct}}</td>
          <td>{{$b->lastdateofshipment}}</td>
           <td>{{$b->contractvalidupto}}</td>

         <td>{{$b->packingofbags}}</td>
          <td>{{$b->partshipment}}</td>
           <td>{{$b->modeoftransport}}</td>
            <td>{{$b->modeofpayment}}</td>
             <td>{{$b->methodofpayment}}</td>

             <td>{{$b->currency}}</td>
              <td>{{$b->advancepayment}}</td>
               <td>{{$b->partadvancepayment}}</td>
                <td>{{$b->transshipment}}</td>
                 <td>{{$b->productofshipment}}</td>

                 <td>{{$b->percentegeofproductofshipment}}</td>
                  <td>{{$b->iban}}</td>
                   <td>{{$b->expno}}</td>
                    <td>{{$b->lcl}}</td>
                     <td>{{$b->lcno}}</td>
<!--
                  
                         -->
                          <td>{{$b->productdescription}}</td>


     
      <td>
       <a href="/sales-contract-product-list-page/{{$b->id}}" class="btn btn-primary">Products List</a>&nbsp;&nbsp; <a href="/sales-edit/{{$b->id}}" class="btn btn-primary">Edit</a>&nbsp;&nbsp;<a href="/sales-destroy/{{$b->id}}" class="btn btn-danger" onclick="alert('are you sure')">Delete</a>
      </td>
   
    </tr>
       @endforeach
 
  </tbody>
</table>

                
 <!-- ====================================================== -->

              </div>
            </div>
          </div>
          </div>

@endsection