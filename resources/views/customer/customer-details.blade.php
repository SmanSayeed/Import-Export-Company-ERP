@extends('master')
@section('content')


        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Customer List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
                             @if($m = Session::get('message'))
    <h1 class="btn btn-success">{{$m}}</h1>
    @endif
 <!-- ====================================================== -->
<table class="table">
  <thead>
    <tr>
      <th style="width:10px;">#</th>
      <th style="width:10px;">Company Name</th>
      <th style="width:10px;">Contact Person</th>
      <th style="width:10px;"> Branch</th>
      <th style="width:10px;">Address</th>
      <th style="width:10px;">Contact no</th>
      <th style="width:10px;">Swift</th>
      <th style="width:10px;">Email</th>
      <th style="width:10px;">Contact Email</th>

      <th style="width:10px;">Phone</th>
      <th style="width:10px;">Importer Bank</th>

      <th style="width:10px;">Action</th>
     
    </tr>
  </thead>
  <tbody>
      @foreach($customer as $c)
    <tr>

      <td scope="row">{{$c->id}}</td>

      <td>{{$c->companyname}}</td>
      <td>{{$c->contactperson}}</td>
      <td>{{$c->branch}}</td>
      <td>{{$c->address}}</td>

       <td>{{$c->contactno}}</td>
      <td>{{$c->swift}}</td>
      <td>{{$c->email}}</td>
      <td>{{$c->contactemail}}</td>

       <td>{{$c->phone}}</td>
      <td>{{$c->importerbank}}</td>
    
      <td>
        <a href="/customer-edit/{{$c->id}}" class="btn btn-primary">Edit</a>&nbsp;&nbsp;<a href="/customer-destroy/{{$c->id}}" class="btn btn-danger" onclick="alert('are you sure')">Delete</a>
      </td>
   
    </tr>
       @endforeach
 
  </tbody>
</table>

                
 <!-- ====================================================== -->
              </div>
            </div>
          </div>

@endsection