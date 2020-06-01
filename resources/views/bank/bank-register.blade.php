@extends('master')
@section('content')

 <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Beneficiary Bank Registration</h3>
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
               <form method="post" action="/bank-store">
              @csrf
                <div class="row">

                  <div class="col-md-4">

             <div class="form-group">
                        <label class="form-control-label" for="input-address">Bank name</label>
                        <input required="" class="form-control form-control-alternative" placeholder="Bank Name" value="" type="text" name="bankname">
                       </div>
                       
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Account No</label>
                        <input required="" class="form-control form-control-alternative" placeholder="" value="" type="text" name="bankaccount">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Branch/Address</label>
                        <input required="" class="form-control form-control-alternative" placeholder="" value="" type="text" name="bankbranch">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">SWIFT</label>
                        <input required="" class="form-control form-control-alternative" placeholder="" value="" type="text" name="bankswift">
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
              <form method="post" action="/bank-store">
              @csrf
                <div class="row">

                	<div class="col-md-4">

					   <div class="form-group">
                        <label class="form-control-label" for="input-address">Bank name</label>
                        <input required="" class="form-control form-control-alternative" placeholder="Bank Name" value="" type="text" name="bankname">
                       </div>
                       
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Account No</label>
                        <input required="" class="form-control form-control-alternative" placeholder="" value="" type="text" name="bankaccount">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Branch/Address</label>
                        <input required="" class="form-control form-control-alternative" placeholder="" value="" type="text" name="bankbranch">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">SWIFT</label>
                        <input required="" class="form-control form-control-alternative" placeholder="" value="" type="text" name="bankswift">
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