@extends('master')
@section('content')
  
  
    <!-- Page content -->

        
        <d <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Beneficiary Bank Edit</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="post" action="/bank-edit/{{$bank->id}}">
                @csrf
                <div class="row">

                	<div class="col-md-4">

					   <div class="form-group">
                        <label class="form-control-label" for="input-address">Bank name</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Bank Name" value="{{$bank->bankname}}" type="text"  name="bankname">
                       </div>
                       
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Account No</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="" value="{{$bank->bankaccount}}" type="text"  name="bankaccount">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Branch/Address</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="" value="{{$bank->bankbranch}}" type="text"  name="bankbranch">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">SWIFT</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="" value="{{$bank->bankswift}}" type="text"  name="bankswift">
                       </div>

					</div>


                </div>	


        

<div class="row">
  <div class="col-md-8">
    <button  class="btn btn-primary btn-lg active"  name="submit">Submit</button>

  </div>
</div>


              </form>

              </div>
            </div>
          </div>
   
@endsection