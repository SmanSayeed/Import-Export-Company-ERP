@extends('master')
@section('content')

 <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Packing & Weight List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             
 <!-- ====================================================== -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Sales Contract No</th>
      <th scope="col">Importer Name</th>
      <th scope="col">Import Address</th>
      <th scope="col">Import Date</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
      
    <tr>

      <td scope="row">b->id</td>
      <td>bankname</td>
      <td>bankaccount</td>
      <td>bankbranch</td>
      <td>test</td>
      <td>
        <a href="/packing-invoice-view" class="btn btn-primary">View</a>&nbsp;&nbsp;<a href="/packing-invoice-download" class="btn btn-danger" >Download</a>
      </td>
   
    </tr>
     
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
        </div>
      </div>
@endsection