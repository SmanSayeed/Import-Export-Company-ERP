@extends('master')
@section('content')

 <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sales Contract Page</h3>
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
  <?php $i=1; ?>
      @foreach($data as $b)
    <tr>

      <td scope="row">{{$i++}}</td>
      <td>{{$b->salescontractno}}</td>
      <td>{{$b->importer}}</td>
      <td>{{$b->dateofcontractregistration}}</td>
      <td>{{$b->beneficiarybank}}</td>
      <td>

          <div class="btn-group">
                  <button type="button" class="btn btn-info">Generate Invoice PDF</button>
                  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">


                    <li>
                      <a href="/sales-contract-view/{{$b->id}}" class="btn btn-primary" style="color:#fff;">View Sales Contract</a>
                      <a href="/sales-contract-download/{{$b->id}}" class="btn btn-sm btn-danger"  style="color:#fff;">Download sales contract</a>
                    </li>

                        <li class="divider"></li>

                    <li> 
                      <a href="/commercial-invoice-view/{{$b->id}}" class="btn btn-primary" style="color:#fff;"  >View Commercial Invoice</a>
                      <a href="/commercial-invoice-download/{{$b->id}}" class="btn btn-danger" style="color:#fff;">Download Commercial Invoice</a></a>
                    </li>
                   
                       <li class="divider"></li>

                    <li> 
                        <a href="/packing-invoice-view/{{$b->id}}" class="btn btn-primary" style="color:#fff;" >View Packing & Weight List</a>
                        <a href="/packing-invoice-download/{{$b->id}}" class="btn btn-danger" style="color:#fff;" >Download Packing & Weight List</a></a>
                  </li>
                         <li class="divider"></li>
                   <li> 
                        <a href="/expform-view/{{$b->id}}" class="btn btn-primary" style="color:#fff;" >Exp Form View</a>
                        <a href="/expform-download/{{$b->id}}" class="btn btn-danger" style="color:#fff;" >Exp Form Download</a></a>
                  </li>

                    <li class="divider"></li>
                   <li> 
                        <a href="/cashhub-view/{{$b->id}}" class="btn btn-primary" style="color:#fff;" >Cash Hub View</a>
                        <a href="/cashhub-download/{{$b->id}}" class="btn btn-danger" style="color:#fff;" >Cash Hub Download</a></a>
                  </li>
                    <li class="divider"></li>
                   <li> 
                    <br><br>
                  </li>




                  </ul>
                </div>

       
        <a href="/commercial-invoice-manage/{{$b->id}}" class="btn btn-danger" style="color:#fff;" >Manage Commercial Invoice</a>&nbsp;
    


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
        </div>
      </div>

      
@endsection