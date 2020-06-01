@extends('master')
@section('content')

 <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sales Contract Products List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                  @if($m = Session::get('message'))
    <h1 class="btn btn-success">{{$m}}</h1>
    @endif
 <!-- ====================================================== -->

<table class="table">
    <tr>
        <td>Sales Contract No</td>
        <td>Importer Name</td>
    
    </tr>

           <tr>
        <td>{{$data->salescontractno}}</td>
         <td>{{$data->importer}}</td>
   
             </tr>


</table>
<hr>
<h2>Products Details</h2>
<table class="table">
    <tr>
    <td>Serial</td>
        <td>Product Shipping Mark</td>
        <td>Product Name</td>
        <td>Product HS Code</td>

         <td>Product Weight</td>
         <td>Product CTN</td>
         <td>Product Price</td>
         <td>Product CBM</td>
         <td>Product Height </td>
         <td>Product Width</td>
         <td>Product Lenght</td>

         <td>Total Carton</td>
         <td>Total Net Weight </td>
         <td>FOB Value  </td>
         <td>Total Fob Value</td>
         <td>Action</td>
    
    </tr>
    {{$i=0}}
@foreach($p as $d)
           <tr>

           <td>{{$i++}}</td>
        <td>{{$d->sales_pro_shippingmark}}</td>
         <td>{{$d->sales_pro_name}}</td>
         <td>{{$d->sales_pro_hscode}}</td>
         <td>{{$d->sales_pro_weight}} {{$d->sales_pro_unit}}</td>
       
         <td>{{$d->sales_pro_ctn}}</td>

         <td>{{$d->sales_pro_price}}</td>
         <td>{{$d->sales_pro_cbm}}</td>
         <td>{{$d->sales_pro_height}}</td>
         <td>{{$d->sales_pro_width}}</td>

         <td>{{$d->sales_pro_length}}</td>
         <td>{{$d->sales_total_carton}}</td>
         <td>{{$d->sales_total_net_weight}}</td>
         <td>{{$d->sales_fob_value}}</td>

         <td>{{$d->sales_total_fob_value}}</td>
        
        

        <td>

        <a href= "/sales-contract-product-list-edit/{{$d->id}}" class="btn btn-primary">Edit</a>
  
        <a href="{{route('commercial-invoice-unpublish',$d->id)}}" class="btn btn-danger">Delete</a>
     
       
        </td>
             </tr>
@endforeach

</table>


                
 <!-- ====================================================== -->





   </div>
               
              </div>
            </div>
            <div class="card-body">
              

              </div>
            </div>
          </div>
        </div>
      </div>
@endsection