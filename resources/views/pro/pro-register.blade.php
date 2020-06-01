@extends('master')
@section('content')


 <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Product Registration</h3>
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
  
              <form method="post" action="/pro-store">
              @csrf
                <div class="row">

                  <div class="col-md-4">

             <div class="form-group">
                        <label class="form-control-label" for="input-address">Product Name</label>
                        <input  class="form-control form-control-alternative" placeholder="Product Name" value="" type="text" name="pro_name">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">HS Code</label>
                        <input  class="form-control form-control-alternative" placeholder="HS code" value="" type="text" name="pro_hscode">
                       </div>

                  

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Unit</label>
                        <input  class="form-control form-control-alternative" placeholder="Unit" value="" type="text" name="pro_unit">
                       </div>

                        <div class="form-group">
                        <label class="form-control-label" for="input-address">Weight</label>
                        <input  class="form-control form-control-alternative" placeholder="Weight" value="" type="text" name="pro_weight">
                       </div>
                       
                            <div class="form-group">
                        <label class="form-control-label" for="input-address">Product Price</label>
                        <input  class="form-control form-control-alternative" placeholder="" value="" type="text" name="pro_price">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Packaging: Pcs/CTN</label>
                        <input  class="form-control form-control-alternative" placeholder="" value="" type="text" name="pro_ctn">
                       </div>

                       <!-- <div class="form-group">
                        <label class="form-control-label" for="input-address">CBM</label>
                        <input  class="form-control form-control-alternative" placeholder="Unit" value="" type="text" name="pro_cbm">
                       </div> -->


                       <div class="form-group">
                        <label class="form-control-label cbm" for="input-address">Do you want to insert CBM?</label><br>
                        <input   value="Yes" type="radio" name="cbm">Yes<br>
                        <input    value="No" type="radio" name="cbm">No
                       </div>


                       <div class="form-group hcbm">
                        <label class="form-control-label" for="input-address">Height</label>
                        <input  class="form-control form-control-alternative" placeholder="Unit" value="" type="text" name="pro_height">
                       </div>

                       <div class="form-group wcbm">
                        <label class="form-control-label" for="input-address">Width</label>
                        <input  class="form-control form-control-alternative" placeholder="Unit" value="" type="text" name="pro_width">
                       </div>

                       <div class="form-group lcbm">
                        <label class="form-control-label" for="input-address">Length</label>
                        <input  class="form-control form-control-alternative" placeholder="Length" value="" type="text" name="pro_length">
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
                        <input  class="form-control form-control-alternative" placeholder="Product code" value="" type="text" name="pro_name">
                       </div>
                       
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Product Price</label>
                        <input  class="form-control form-control-alternative" placeholder="" value="" type="text" name="pro_price">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">CTNS</label>
                        <input  class="form-control form-control-alternative" placeholder="" value="" type="text" name="pro_ctns">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Weight</label>
                        <input  class="form-control form-control-alternative" placeholder="" value="" type="text" name="pro_weight">
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
       <script type="text/javascript">
       $(document).ready(function(){
          // alert('saad');
              $('.wcbm').hide();
               $('.hcbm').hide();
                $('.lcbm').hide();
                console.log($('.cbm').val);
            $('input[type="radio"]').click(function(){
            if($(this).val()=='Yes'){
              $('.wcbm').show();
               $('.hcbm').show();
                $('.lcbm').show();
            }else if($(this).val()=='No'){
                 $('.wcbm').hide();
               $('.hcbm').hide();
                $('.lcbm').hide();
            }
          });
       });
     </script>

@endsection
