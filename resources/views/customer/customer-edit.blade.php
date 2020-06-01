@extends('master')
@section('content')

        
         <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Customer Edit</h3>
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
            <div class="card-body">
              <form method="post" action="/customer-edit/{{$customer->id}}">
                     @csrf
                <div class="row">

                  <div class="col-md-4">

             <div class="form-group">
                        <label class="form-control-label" for="input-address">Company name</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Company name" value="{{$customer->companyname}}" type="text" name="companyname">
                       </div>
                       
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Company name" value="{{$customer->address}}" type="text" name="address">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Email</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Company name" value="{{$customer->email}}" type="text" name="email">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Phone</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Company name" value="{{$customer->phone}}" type="text" name="phone">
                       </div>

          </div>

          <div class="col-md-4">

             <div class="form-group">
                        <label class="form-control-label" for="input-address">Contact Person</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Company name" value="{{$customer->contactperson}}" type="text" name="contactperson">
                       </div>
                       
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Contact No</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Company name" value="{{$customer->contactno}}" type="text" name="contactno">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Contact Email</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Company name" value="{{$customer->contactemail}}" type="text" name="contactemail">
                       </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Importer bank</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Company name" value="{{$customer->importerbank}}" type="text" name="importerbank">
                       </div>
                       
          </div>

          <div class="col-md-4">

             <div class="form-group">
                        <label class="form-control-label" for="input-address">Branch/Address</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Company name" value="{{$customer->branch}}" type="text" name="branch">
                       </div>
                       
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Swift/iBAN</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Company name" value="{{$customer->swift}}" type="text" name="swift">
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
          </div>

@endsection