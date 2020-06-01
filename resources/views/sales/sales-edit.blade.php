@extends('master')
@section('content')

            
 <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sales Contract Edit</h3>
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
              <form method="post" action="/sales-edit/{{$sales->id}}">
                  @csrf
                
                <h6 class="heading-small text-muted mb-4">Exporter information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Name</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Saadman Sayeed" value="Saadman Sayeed" name="name" disabled>
                      </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-username">Beneficiary Bank</label>
                         <select class="form-control select2" name="beneficiarybank">
                             
                             @foreach($bank as $b)
                              <option value="{{$b->bankname}}">{{$b->bankname}}</option>
                          @endforeach
                            </select>
                      
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Importer</label>
                        <select class="form-control select2" name="importer">
                                @foreach($customer as $c)
                              <option value="{{$c->companyname.' '.$c->contactperson}}">{{$c->companyname.' ('.$c->contactperson.') '}}</option>
                          @endforeach
                             
                            </select>
                        </div>
                          <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Date of contract Registration</label>
                        <input type="date" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="" name="dateofcontractregistration">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Sales Contract No</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="27" name="salescontractno">
                      </div>
                    
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Export information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Shipment from</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text" name="shipmentform">
                      </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Shipment Destination</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text" name="shipmentdestination">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Name of the product</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="product name" value="suger" name="nameoftheproduct">
                      </div>

                      <div class="form-group">
                        <label >Packing of bag</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Packing of bag" value="" name="packingofbags">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label >Last Date of Shipment</label>
                        <input type="date" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="United States" name="lastdateofshipment">
                      </div>

                    
                    </div>
                    <div class="col-lg-4">
                       <div class="form-group">
                        <label >Contract valid up to</label>
                        <input type="date" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="United States" name="contractvalidupto">
                      </div>
                   </div>
                  </div>



                  <div class="row">
                    <div class="col-lg-2">
                      <div class="form-group">
                        <label >Part Shipment</label>
                        <div >

                               <select class="form-control select2" style="width: 100%;" name="partshipment">
                  <option selected="selected" value="Allowed">Allowed</option>
                  <option value="Not Allowed">Not Allowed</option>
                  <option value="Other">Other</option>
                </select>
<!-- <input   checked="" type="radio" name="partshipment" value="Allowed">
<label  >Allowed</label>
</div>
  <div >
<input    type="radio" name="partshipment" value="Not Allowed">
<label  >Not Allowed</label>
</div>
  <div >
<input    type="radio" name="partshipment" value="Other">
<label  >Other</label> -->
</div>
                      </div>

                      </div>
  <div class="col-lg-2">
    
                      <div class="form-group">
                        <label >Mode of transport</label>
                         <div >
                          <select class="form-control select2" style="width: 100%;" name="modeoftransport">
                  <option selected="selected" value="By Road">By Road</option>
                  <option value="By Sea">By Sea</option>
                  <option value="By Air">By Air</option>
                  <option value="Other">Other</option>
                </select>
<!-- <input   checked="" type="radio" name="modeoftransport" value="By Road">
<label  >By Road</label>
</div>

  <div >
<input    type="radio" name="modeoftransport" value="By Sea">
<label  >By Sea</label>
</div>

  <div >
<input   type="radio" name="modeoftransport" value="By Air">
<label  >By Air</label>
</div>

  <div >
<input   type="radio" name="modeoftransport" value="Other">
<label    >Other</label> -->
</div>
                      </div>
  </div>

    <div class="col-lg-2">
    
                      <div class="form-group">
                        <label >Mode of Payment</label>
                         <div >
                          <select class="form-control select2" style="width: 100%;">
                  <option selected="selected" value="TT" name="modeofpayment" >TT</option>
                  <option value="LC">LC</option>
                 
                  <option value="Other">Other</option>
                </select>
<!-- <input   checked="" type="radio" name="modeofpayment"  value="TT">
<label  >TT</label>
</div>

  <div >
<input  type="radio" name="modeofpayment" value="LC">
<label  >LC</label>
</div>

  <div >
<input  type="radio" name="modeofpayment" value="Other"> 
<label  >Other</label> -->
</div>
                      </div>
  </div>

  <div class="col-lg-2">
    
                      <div class="form-group">
                        <label >Method of Payment</label>
                         <div >
                         <select class="form-control select2" style="width: 100%;" name="methodofpayment">
                  <option selected="selected" value="FOB">FOB</option>
                  <option value="CNF">CNF</option>
                  <option value="X-Factory">X-Factory</option>
                  <option value="CFR">CFR</option>
                 
                  <option value="Other">Other</option>
                </select>
<!-- <input   checked="" type="radio" name="methodofpayment" value="FOB">
<label  >FOB</label>
</div>

  <div >
<input   type="radio" name="methodofpayment" value="CNF">
<label  >CNF</label>
</div>

  <div >
<input   type="radio" name="methodofpayment" value="X-Factory">
<label  >X-Factory</label>
</div>

  <div >
<input   type="radio" name="methodofpayment" value="CFR">
<label   >CFR</label> -->
</div>
                      </div>
  </div>

  <div class="col-lg-2">
    
                      <div class="form-group">
                        <label >Currency</label>
                         <div >
                          <select class="form-control select2" style="width: 100%;" name="currency">
                  <option selected="selected" value="Doller">Doller</option>
                  <option value="Euro">Euro</option>
                  <option value="Taka">Taka</option>
                 
                  <option value="Other">Other</option>
                </select>
<!-- <input   checked="" type="radio" name="currency"  value"Doller">
<label  >Doller</label>
</div>

  <div >
<input  type="radio" name="currency" value"Euro">
<label  >Euro</label>
</div>

  <div >
<input  type="radio" name="currency" value"Taka">
<label  >Taka</label> -->
</div>

                      </div>
  </div>

 </div>

                <hr class="my-4" />


   <div class="row">
    <div class="col-lg-4">
      
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Advance Payment</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="In percentege" value="" type="number" name="advancepayment">
                      </div>
    </div>
    </div>
    <div class="row">

      <div class="col-lg-2">
      
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Part Advance Payment</label>
                         <div >
                          <select class="form-control select2" style="width: 100%;" name="partadvancepayment" >
                  <option selected="selected" value="Allowed">Allowed</option>
                  <option value="Not Allowed">Not Allowed</option>
                  <option value="Other">Other</option>
                </select>
<!-- <input   checked="" type="radio" name="partadvancepayment" value="Allowed">
<label  >Allowed</label>
</div>
  <div >
<input    type="radio" name="partadvancepayment" value="Not Allowed">
<label  >Not Allowed</label>
</div>
  <div >
<input    type="radio" name="partadvancepayment" value="Other">
<label  >Other</label> -->
</div>
                      </div>
    </div>
  <div class="col-lg-2">
      
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Transshipment</label>
                      <div >
 <select class="form-control select2" style="width: 100%;" name="transshipment" >
                  <option selected="selected" value="Allowed">Allowed</option>
                  <option value="Not Allowed">Not Allowed</option>
                  <option value="Other">Other</option>
                </select>

<!-- <input   checked="" type="radio" name="transshipment" value="Allowed">
<label  >Allowed</label>
</div>
  <div >
<input   type="radio" name="transshipment" value="Not Allowed">
<label  >Not Allowed</label>
</div>
  <div >
<input   type="radio" name="transshipment" value="Other">
<label  >Other</label> -->
</div>
                      </div>
    </div>


      <div class="col-lg-2">
      
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Product of Shipment</label>
                         <div >
                          <select class="form-control select2" style="width: 100%;" name="productofshipment" >
                  <option selected="selected" value="Allowed">Allowed</option>
                  <option value="Not Allowed">Not Allowed</option>
                  <option value="Other">Other</option>
                </select>
<!-- <input   checked="" type="radio" name="productofshipment"  value="Allowed">
<label  >Allowed</label>
</div>
  <div >
<input    type="radio" name="productofshipment" value="Not Allowed">
<label  >Not Allowed</label>
</div>
  <div >
<input    type="radio" name="productofshipment" value="Other">
<label  >Other</label> -->
</div>
                      </div>
    </div>



      <div class="col-lg-2">
      
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Percentege of Products of Shipment</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="In percentege" value="" type="number" name="percentegeofproductofshipment">
                      </div>
    </div>


  </div>

 <hr class="my-4" />
               
                <div class="row">
                  <div class="col-lg-8">
                    <div class="form-group">
                        <label class="form-control-label" for="input-address">iBAN</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="" value="" type="text" name="iban">
                      </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Exp No</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="" value="" type="text" name="expno">
                      </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">LCL/FCL</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="" value="" type="text" name="lcl">
                      </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">LC No/ LC Date</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="" value="" type="text" name="lcno">
                      </div>



                    
                  </div>
                </div>


                <hr class="my-4" />
                <!-- Description -->
                <!--
                <h6 class="heading-small text-muted mb-4">Product Details</h6>
                  
                  <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Product Code</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Product code" value="" type="text" name="productcode">
                      </div>
                    </div>
                  
                      <div class="col-md-4">

                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Quantity PCS</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="" value="" type="number" name="quantitypcs">
                      </div>
                      </div>



                    </div>
                    -->
                  </div>

                  <div class="row">
                   

                  <div class="col-md-12">
           <table  class="table table-bordered" id="dynamicTable">


            <tr>
                <th>Product Code</th>
                <th>Product Price</th>
                <th>CTND</th>
                <th>Quantity PCS</th>
                <th> Weight/CTN KGS</th>

        <td>Total Gross Weight CGS</td>
                <th>Action</th>
            </tr>
            <tr>  
                <td><input type="text" name="addmore[0][pro_code]" placeholder="Product Code" class="form-control" /></td>  
                <td><input type="text" name="addmore[0][sales_pro_price]" placeholder="Product Price" class="form-control" id="pro_price0"/></td>  
                <td><input type="text" name="addmore[0][sales_pro_ctns]" placeholder="CTND" class="form-control" /></td>  
                 <td><input type="text" name="addmore[0][sales_pro_net_weight]" placeholder="Quantity pcs" class="form-control" /></td>  
                   <td><input type="text" name="addmore[0][sales_pro_gross_weight]" placeholder=" Weight/CTN KGS" class="form-control" id="pro_amount0"/></td>  
                 <td id="">
                  
                    <input type="number" name="sum" id="mul0" class="form-control" readonly />

                 </td>
                <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
            </tr>  
          
        </table> 
    <table class="table table-bordered">
         <tr>  
                <td></td>  
                <td></td>  
                <td></td>  
                 <td>Sum of Total </td>  
                 <td id="">
                  
                    <input type="number" name="sum" id="sum" class="form-control" readonly />

                 </td>
                <td></td>  
            </tr> 
    </table>
       <!-- <button type="submit" class="btn btn-success" name="submit">Save</button> -->

                  </div>



                    <div class="col-md-2">
                      <!--  <div class="form-group">
                        <label class="form-control-label" for="input-address">CTNS</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="" value="" type="number" name="ctns">
                      </div>
                    </div>
                    <div class="col-md-2">
                         <div class="form-group">
                        <label class="form-control-label" for="input-address">Price</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="" value="" type="number" name="price">
                      </div>

                    </div>

                    <div class="col-md-2">
                           <div class="form-group">
                        <label class="form-control-label" for="input-address">Net Weight/CTN KGS</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="" value="" type="number" name="netweight">
                      </div>
                    </div>


                    <div class="col-md-2">
                        
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Total Net Weight CGS</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="" value="" type="number" name="totalnetweightcgs">
                      </div>


                    </div>

                    <div class="col-md-2">
                          
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Gross Weight/CTN KGS</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="" value="" type="number" name="grossweight">
                      </div>



                    </div>
                    <div class="col-md-2">
                      

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Total Gross Weight CGS</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="" value="" type="number" name="totalgrossweightcgs">
                      </div>
                  -->  </div>
                  </div>

                  <div class="row">
                      <div class="col-md-4">
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Product Description</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="productdescription"></textarea>
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
        

     

      @endsection