@extends('master')
@section('content')


 <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit Commercial Invoice Products</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">


 @if(count($errors)>0)
                        <ul>
                          @foreach($errors->all() as $error)
                            <li style="color:red">{{$error}}</li>
                          @endforeach
                        </ul>
                        
                      @endif

                      @if ($message = Session::get('message'))
                      <h1 class="btn btn-success">{{$message}}</h1>
                      @endif
  
              <form method="post" action="/commercial-invoice-edit/{{$data->id}}">
              @csrf
                <div class="row">

                  <div class="col-md-4">

                          <div class="form-group">
                        <label class="form-control-label" for="input-address">Shipping Mark</label>
                        <input  class="form-control form-control-alternative" placeholder="Shipping Mark"  type="text" name="sales_pro_shippingmark" value="{{$data->sales_pro_shippingmark}}">
                       </div>

             <div class="form-group">
                        <label class="form-control-label" for="input-address">Product Name</label>
                        <input  class="form-control form-control-alternative" placeholder="Product Name"  type="text" name="sales_pro_name" value="{{$data->sales_pro_name}}">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">HS Code</label>
                        <input  class="form-control form-control-alternative" placeholder="HS code"  type="text" name="sales_pro_hscode" value="{{$data->sales_pro_hscode}}">
                       </div>

                  

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Unit</label>
                        <input  class="form-control form-control-alternative" placeholder="Unit"  type="text" name="sales_pro_unit" value="{{$data->sales_pro_unit}}">
                       </div>

                        <div class="form-group">
                        <label class="form-control-label" for="input-address">Weight</label>
                        <input  class="form-control form-control-alternative" placeholder="Weight"  type="text" name="sales_pro_weight" value="{{$data->sales_pro_weight}}">
                       </div>
                       
                            <div class="form-group">
                        <label class="form-control-label" for="input-address">Product Price</label>
                        <input  class="form-control form-control-alternative" placeholder=""  type="text" name="sales_pro_price" value="{{$data->sales_pro_price}}">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Packaging: Pcs/CTN</label>
                        <input  class="form-control form-control-alternative" placeholder=""  type="text" name="sales_pro_ctn" value="{{$data->sales_pro_ctn}}">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">CBM</label>
                        <input  class="form-control form-control-alternative" placeholder="Unit"  type="text" name="sales_pro_cbm" value="{{$data->sales_pro_cbm}}">
                       </div>


                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Height</label>
                        <input  class="form-control form-control-alternative" placeholder="Unit"  type="text" name="sales_pro_height" value="{{$data->sales_pro_height}}">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Width</label>
                        <input  class="form-control form-control-alternative" placeholder="Unit"  type="text" name="sales_pro_width" value="{{$data->sales_pro_width}}">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Length</label>
                        <input  class="form-control form-control-alternative" placeholder="Length"  type="text" name="sales_pro_length" value="{{$data->sales_pro_length}}">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Total Carton</label>
                        <input  class="form-control form-control-alternative" placeholder="Length"  type="text" name="sales_total_carton" value="{{$data->sales_total_carton}}">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Total Net Weight</label>
                        <input  class="form-control form-control-alternative" placeholder="Length"  type="text" name="sales_total_net_weight" value="{{$data->sales_total_net_weight}}">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Sales FOB Value</label>
                        <input  class="form-control form-control-alternative" placeholder="Length"  type="text" name="sales_fob_value" value="{{$data->sales_fob_value}}">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Sales Total FOB Value</label>
                        <input  class="form-control form-control-alternative" placeholder="Length"  type="text" name="sales_total_fob_value" value="{{$data->sales_total_fob_value}}">
                       </div>


        

<div class="row">
  <div class="col-md-8">
    <button href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" name="submit">Submit</button>

  </div>
</div>


              </form>
    </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>  
        


       <!--  <div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Beneficiary Bank Registration</h3>
                </div>
               
              </div>
            </div>
          
                      @if(count($errors)>0)
                        <ul>
                          @foreach($errors->all() as $error)
                            <li style="color:red">{{$error}}</li>
                          @endforeach
                        </ul>
                        
                      @endif

                      @if ($message = Session::get('message'))
                      <h1 class="btn btn-success">{{$message}}</h1>
                      @endif
            <div class="card-body">
              <form method="post" action="/pro-store">
              @csrf
                <div class="row">

                	<div class="col-md-4">

					   <div class="form-group">
                        <label class="form-control-label" for="input-address">Product code</label>
                        <input  class="form-control form-control-alternative" placeholder="Product code"  type="text" name="pro_name">
                       </div>
                       
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Product Price</label>
                        <input  class="form-control form-control-alternative" placeholder=""  type="text" name="pro_price">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">CTNS</label>
                        <input  class="form-control form-control-alternative" placeholder=""  type="text" name="pro_ctns">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Weight</label>
                        <input  class="form-control form-control-alternative" placeholder=""  type="text" name="pro_weight">
                       </div>

					</div>


                </div>	


        

<div class="row">
  <div class="col-md-8">
    <button href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" name="submit">Submit</button>

  </div>
</div>


              </form>

              </div>
            </div>
          </div> -->
     
@endsection