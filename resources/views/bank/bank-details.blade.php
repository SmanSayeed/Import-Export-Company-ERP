@extends('master')
@section('content')


        
         <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Beneficiary Bank list</h3>
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
      <th scope="col">Bank Name</th>
      <th scope="col">Bank Account</th>
      <th scope="col">Bank Branch</th>
      <th scope="col">Bank Swift</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($bank as $b)
    <tr>

      <td scope="row">{{$b->id}}</td>
      <td>{{$b->bankname}}</td>
      <td>{{$b->bankaccount}}</td>
      <td>{{$b->bankbranch}}</td>
      <td>{{$b->bankswift}}</td>
      <td>
        <a href="/bank-edit/{{$b->id}}" class="btn btn-primary">Edit</a>&nbsp;&nbsp;<a href="/bank-destroy/{{$b->id}}" class="btn btn-danger" onclick="alert('are you sure')">Delete</a>
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
          </div>

@endsection

