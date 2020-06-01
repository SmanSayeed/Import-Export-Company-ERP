@extends('master')
@section('content')


 <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Product Edit</h3>
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
  
              <form method="post" action="/pro-edit/{{$p->id}}">
              @csrf
                <div class="row">

                  <div class="col-md-4">

             <div class="form-group">
                        <label class="form-control-label" for="input-address">Product Name</label>
                        <input required="" class="form-control form-control-alternative" placeholder="Product Name"  type="text" name="pro_name" value="{{$p->pro_name}}">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">HS Code</label>
                        <input required="" class="form-control form-control-alternative" placeholder="HS code"  type="text" name="pro_hscode" value="{{$p->pro_hscode}}">
                       </div>

                  

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Weight</label>
                        <input  class="form-control form-control-alternative" placeholder="Weight"  type="text" name="pro_weight">
                       </div>
                       
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Unit</label>
                        <input required="" class="form-control form-control-alternative" placeholder="Unit"  type="text" name="pro_unit" value="{{$p->pro_unit}}">
                       </div>
                       
                            <div class="form-group">
                        <label class="form-control-label" for="input-address">Product Price</label>
                        <input required="" class="form-control form-control-alternative" placeholder=""  type="text" name="pro_price" value="{{$p->pro_price}}">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Packaging: Pcs/CTN</label>
                        <input required="" class="form-control form-control-alternative" placeholder=""  type="text" name="pro_ctn" value="{{$p->pro_ctn}}" >
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">CBM</label>
                        <input required="" class="form-control form-control-alternative" placeholder="Unit"  type="text" name="pro_cbm" value="{{$p->pro_cbm}}">
                       </div>


                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Height</label>
                        <input required="" class="form-control form-control-alternative" placeholder="Unit"  type="text" name="pro_height" value="{{$p->pro_height}}">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Width</label>
                        <input required="" class="form-control form-control-alternative" placeholder="Unit"  type="text" name="pro_width" value="{{$p->pro_width}}">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Length</label>
                        <input required="" class="form-control form-control-alternative" placeholder="Length"  type="text" name="pro_length" value="{{$p->pro_length}}">
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
                        <input required="" class="form-control form-control-alternative" placeholder="Product code"  type="text" name="pro_name">
                       </div>
                       
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Product Price</label>
                        <input required="" class="form-control form-control-alternative" placeholder=""  type="text" name="pro_price">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">CTNS</label>
                        <input required="" class="form-control form-control-alternative" placeholder=""  type="text" name="pro_ctns">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Weight</label>
                        <input required="" class="form-control form-control-alternative" placeholder=""  type="text" name="pro_weight">
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