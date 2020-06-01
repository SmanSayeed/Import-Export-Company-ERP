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
    
              <form method="post" action="/customer-store">
                     @csrf
                <div class="row">

                  <div class="col-md-4">

             <div class="form-group">
                        <label class="form-control-label" for="input-address">Company name</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Company name" value="" type="text" name="companyname">
                       </div>
                       
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Address" value="" type="text" name="address">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Email</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Email" value="" type="text" name="email">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Phone</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Phone" value="" type="text" name="phone">
                       </div>

          </div>

          <div class="col-md-4">

             <div class="form-group">
                        <label class="form-control-label" for="input-address">Contact Person</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Contact Person" value="" type="text" name="contactperson">
                       </div>
                       
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Contact No</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Contact No" value="" type="text" name="contactno">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Contact Email</label>
                        <input id="input-address" class="form-control form-control-alternative"  value="" type="text" name="contactemail">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Importer bank</label>
                        <input id="input-address" class="form-control form-control-alternative"  value="" type="text" name="importerbank">
                       </div>
                       
          </div>

          <div class="col-md-4">

             <div class="form-group">
                        <label class="form-control-label" for="input-address">Bank Branch/Address</label>
                        <input id="input-address" class="form-control form-control-alternative"  value="" type="text" name="branch">
                       </div>
                       
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Swift/iBAN</label>
                        <input id="input-address" class="form-control form-control-alternative"  value="" type="text" name="swift">
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
                  <h3 class="mb-0">Customer/Importer Registration</h3>
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
    
              <form method="post" action="/customer-store">
                     @csrf
                <div class="row">

                  <div class="col-md-4">

             <div class="form-group">
                        <label class="form-control-label" for="input-address">Company name</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Company name" value="" type="text" name="companyname">
                       </div>
                       
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Company name" value="" type="text" name="address">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Email</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Company name" value="" type="text" name="email">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Phone</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Company name" value="" type="text" name="phone">
                       </div>

          </div>

          <div class="col-md-4">

             <div class="form-group">
                        <label class="form-control-label" for="input-address">Contact Person</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Company name" value="" type="text" name="contactperson">
                       </div>
                       
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Contact No</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Company name" value="" type="text" name="contactno">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Contact Email</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Company name" value="" type="text" name="contactemail">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Importer bank</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Company name" value="" type="text" name="importerbank">
                       </div>
                       
          </div>

          <div class="col-md-4">

             <div class="form-group">
                        <label class="form-control-label" for="input-address">Branch/Address</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Company name" value="" type="text" name="branch">
                       </div>
                       
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Swift/iBAN</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Company name" value="" type="text" name="swift">
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