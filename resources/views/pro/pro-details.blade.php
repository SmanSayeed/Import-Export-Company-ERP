@extends('master')
@section('content')


         <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Product List</h3>
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
      <th scope="col">Product Name</th>
      <th scope="col">Product Code</th>
    
      <th scope="col">Product Unit</th>
      <th scope="col">Product Weight</th>

      <th scope="col">Packaging: PCS/CTN</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product CBM</th>
      <th scope="col">Product Height</th>

      <th scope="col">Product Width</th>
      <th scope="col">Product Length</th>
      <th scope="col">Action</th>
     
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($pro as $b)
    <tr>

      <td scope="row">{{$b->id}}</td>
      <td>{{$b->pro_name}}</td>
      <td>{{$b->pro_hscode}}</td>
      <td>{{$b->pro_unit}}</td>
      <td>{{$b->pro_weight}}</td>
      <td>{{$b->pro_ctn}}</td>

    <td>{{$b->pro_price}}</td>
      <td>{{$b->pro_cbm}}</td>
      <td>{{$b->pro_height}}</td>
      <td>{{$b->pro_width}}</td>

         <td>{{$b->pro_length}}</td>
      <td>
        <a href="/pro-edit/{{$b->id}}" class="btn btn-primary">Edit</a>&nbsp;&nbsp;<a href="/pro-destroy/{{$b->id}}" class="btn btn-danger" onclick="alert('are you sure')">Delete</a>
      </td>
   
    </tr>
       @endforeach
 
  </tbody>
</table>

                
 <!-- ====================================================== -->





   </div>
               
              </div>
            </div>
            <div class="card-body">
              

              </div>
            </div>
          </div>

@endsection

