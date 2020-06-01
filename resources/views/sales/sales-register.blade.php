@extends('master')
@section('content')

       
 <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sales Contract Registration</h3>
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
              <form method="post" action="/sales-store">
                  @csrf
                <h6 class="heading-small text-muted mb-4">Exporter information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Name</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Saadman Sayeed" value="Saadman Sayeed" name="name" readonly>
                      </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-username">Beneficiary Bank</label>
                         <select class="form-control select2" name="beneficiarybank" required>
                             <option selected disabled>Please select one option</option>
                             @foreach($bank as $b)
                              <option value="{{$b->bankname}}-{{$b->id}}">{{$b->bankname}}</option>
                          @endforeach
                            </select>
                               @error('beneficiarybank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $message }}</strong>
                                    </span>
                                @enderror
                      
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Importer</label>
                        <select class="form-control select2" name="importer" id="importer_name_to_notify_party">
                        <option selected disabled>Please select one option</option>
                                @foreach($customer as $c)
                              <option value="{{$c->contactperson}}-{{$c->id}}  " >

                              {{$c->companyname.' ('.$c->contactperson.') '}}

                              </option>
                          @endforeach
                             
                            </select>
                              @error('importer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red"> {{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                          <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Date of contract Registration</label>
                        <input type="date" id="input-last-name" class="form-control form-control-alternative" placeholder="Date of contract Registration"  name="dateofcontractregistration">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Sales Contract No</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="sales contract"  name="salescontractno">
                      </div>
                    
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name" id="textTwo">Notify Party</label>
                        <input type="text" id="get_importer_name" class="form-control form-control-alternative" placeholder="Notify Party"  name="notifyparty" readonly=""><br>
                          <select class="form-control" name="notifypartycheck" onchange="yesnoCheckn(this);" required="" >
                              <option selected disabled>Please select one option</option>
                              <option value="1">As Above</option>
                              <option value="other">Other</option>
                          </select>
                           @error('notifypartycheck')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $message }}</strong>
                                    </span>
                                @enderror
                           <div id="ifYesnotifyparty" style="display: none;">
                        <label >Other Notify party</label> <input type="text" class="form-control"  name="othernotifyparty"  placeholder="other Part" /><br />
                    </div>
                        <br>
                       
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
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Shipment from Address"  type="text" name="shipmentform">
                      </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Shipment Destination</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Shipment Destination Address"  type="text" name="shipmentdestination">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                    

                      <div class="form-group">
                        <label >Packing of bag</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Packing of bag"  name="packingofbags">
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

                               <select  onchange="yesnoCheck1(this);" class="form-control select2" style="width: 100%;" name="partshipment">
                  <option selected disabled>Please select one option</option>
                  <option  value="Allowed">Allowed</option>
                  <option value="Not Allowed">Not Allowed</option>
                  <option value="other">other</option>

                  
                </select>
                <div id="ifYes1" style="display: none;">
                        <label >other</label> <input type="text" class="form-control"  name="partshipmentother"  placeholder="other Part" /><br />
                    </div>
<!-- <input   checked="" type="radio" name="partshipment" value="Allowed">
<label  >Allowed</label>
</div>
  <div >
<input    type="radio" name="partshipment" value="Not Allowed">
<label  >Not Allowed</label>
</div>
  <div >
<input    type="radio" name="partshipment" value="other">
<label  >other</label> -->
</div>
                      </div>

                      </div>
  <div class="col-lg-2">
    
                      <div class="form-group">
                        <label >Mode of transport</label>
                         <div >
                          <select onchange="yesnoCheck2(this);" class="form-control select2" style="width: 100%;" name="modeoftransport">
                          <option selected disabled>Please select one option</option>
                  <option  value="By Road">By Road</option>
                  <option value="By Sea">By Sea</option>
                  <option value="By Air">By Air</option>
                  <option value="other">other</option>
                </select>
                 <div id="ifYes2" style="display: none;">
                        <label >other</label> <input type="text" class="form-control"  name="modeoftransportother"  placeholder="other Part" /><br />
                    </div>
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
<input   type="radio" name="modeoftransport" value="other">
<label    >other</label> -->
</div>
                      </div>
  </div>

    <div class="col-lg-2">
    
                      <div class="form-group">
                        <label >Mode of Payment</label>
                         <div >
                          <select onchange="yesnoCheck3(this);" class="form-control select2 lcortt" style="width: 100%;" name="modeofpayment">
                          <option selected disabled>Please select one option</option>
                  <option  value="TT">TT</option>
                  <option value="LC">LC</option>
                 
                  <option value="other">other</option>
                </select>
                 <div id="ifYes3" style="display: none;">
                        <label >other</label> <input type="text" class="form-control"  name="modeofpaymentother"  placeholder="other Part" /><br />
                    </div>
<!-- <input   checked="" type="radio" name="modeofpayment"  value="TT">
<label  >TT</label>
</div>

  <div >
<input  type="radio" name="modeofpayment" value="LC">
<label  >LC</label>
</div>

  <div >
<input  type="radio" name="modeofpayment" value="other"> 
<label  >other</label> -->
</div>
                      </div>
  </div>

  <div class="col-lg-2">
    
                      <div class="form-group">
                        <label >Sales Term <!-- Method of Payment --></label>
                         <div >
                         <select onchange="yesnoCheck4(this);" class="form-control select2" style="width: 100%;" name="methodofpayment">
                         <option selected disabled>Please select one option</option>
                  <option  value="FOB">FOB</option>
                  <option value="CNF">CNF</option>
                  <option value="X-Factory">X-Factory</option>
                  <option value="CFR">CFR</option>
                 
                  <option value="other">other</option>
                </select>
                  <div id="ifYes4" style="display: none;">
                        <label >other</label> <input type="text" class="form-control"  name="methodofpaymentother"  placeholder="other Part" /><br />
                    </div>
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
                          <select onchange="yesnoCheck5(this);" class="form-control select2 currency_name" style="width: 100%;" name="currency" id="currency_name">
                          <option selected disabled>Please select one option</option>
                  <option  value="Doller">Doller</option>
                  <option value="Euro">Euro</option>
                  <option value="Taka">Taka</option>
                 
                  <option value="other">other</option>
                </select>
                  <div id="ifYes5" style="display: none;">
                        <label >other</label> <input type="text" class="form-control"  name="currencyother"  placeholder="other Part" /><br />
                    </div>
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
    <div class="col-lg-2">
    
                      <div class="form-group">
                        <label >Currency Rate</label>
                         <div >
                          <input type="number" step="0.01" class="form-control select2 currency_rate" style="width: 100%;" name="currency_rate" id="currency_rate">
           

</div>

                      </div>
  </div>

 </div>

                <hr class="my-4" />


   <div class="row">
    <div class="col-lg-4">
      
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Advance Payment</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="In percentege"  type="number" name="advancepayment">
                      </div>
    </div>
    </div>
    <div class="row">

      <div class="col-lg-2">
      
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Partial Payment</label>
                         <div >
                          <select onchange="yesnoCheck6(this);" class="form-control select2" style="width: 100%;" name="partadvancepayment" >
                          <option selected disabled>Please select one option</option>
                  <option  value="Allowed">Allowed</option>
                  <option value="Not Allowed">Not Allowed</option>
                  <option value="other">other</option>
                </select>
                <div id="ifYes6" style="display: none;">
                        <label >other</label> <input type="text" class="form-control"  name="partadvancepaymentother"  placeholder="other Part" /><br />
                    </div>
<!-- <input   checked="" type="radio" name="partadvancepayment" value="Allowed">
<label  >Allowed</label>
</div>
  <div >
<input    type="radio" name="partadvancepayment" value="Not Allowed">
<label  >Not Allowed</label>
</div>
  <div >
<input    type="radio" name="partadvancepayment" value="other">
<label  >other</label> -->
</div>
                      </div>
    </div>
  <div class="col-lg-2">
      
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Transshipment</label>
                      <div >
 <select onchange="yesnoCheck7(this);" class="form-control select2" style="width: 100%;" name="transshipment" >
 <option selected disabled>Please select one option</option>
                  <option  value="Allowed">Allowed</option>
                  <option value="Not Allowed">Not Allowed</option>
                  <option value="other">other</option>
                </select>
                 <div id="ifYes7" style="display: none;">
                        <label >other</label> <input type="text" class="form-control"  name="transshipmentother"  placeholder="other Part" /><br />
                    </div>

<!-- <input   checked="" type="radio" name="transshipment" value="Allowed">
<label  >Allowed</label>
</div>
  <div >
<input   type="radio" name="transshipment" value="Not Allowed">
<label  >Not Allowed</label>
</div>
  <div >
<input   type="radio" name="transshipment" value="other">
<label  >other</label> -->
</div>
                      </div>
    </div>


      <div class="col-lg-2">
      
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Partial Shipment</label>
                         <div >
                          <select onchange="yesnoCheck8(this);" class="form-control select2" style="width: 100%;" name="productofshipment" >
                          <option selected disabled>Please select one option</option>
                  <option  value="Allowed">Allowed</option>
                  <option value="Not Allowed">Not Allowed</option>
                  <option value="other">other</option>
                </select>
                  <div id="ifYes8" style="display: none;">
                        <label >other</label> <input type="text" class="form-control"  name="productofshipmentother"  placeholder="other Part" /><br />
                    </div>
<!-- <input   checked="" type="radio" name="productofshipment"  value="Allowed">
<label  >Allowed</label>
</div>
  <div >
<input    type="radio" name="productofshipment" value="Not Allowed">
<label  >Not Allowed</label>
</div>
  <div >
<input    type="radio" name="productofshipment" value="other">
<label  >other</label> -->
</div>
                      </div>
    </div>



      <div class="col-lg-2">
      
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Percentege of Partial Shipment</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="In percentege"  type="number" name="percentegeofproductofshipment">
                      </div>
    </div>


  </div>

 <hr class="my-4" />
               
                <div class="row">
                  <div class="col-lg-8">
                    <div class="form-group">
                        <label class="form-control-label" for="input-address">BIN No<!-- iBAN --></label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder=""  type="text" name="iban">
                      </div>

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Exp No</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder=""  type="text" name="expno">
                      </div>

                       <div class="form-group lcl" >
                        <label class="form-control-label" for="input-address">LCL/FCL</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="For LC Payment"  type="text" name="lcl">
                      </div>

                       <div class="form-group lcno">
                        <label class="form-control-label" for="input-address">LC No/ LC Date</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="For LC Payment"  type="text" name="lcno">
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
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Product code"  type="text" name="productcode">
                      </div>
                    </div>
                  
                      <div class="col-md-4">

                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Quantity PCS</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder=""  type="number" name="quantitypcs">
                      </div>
                      </div>



                    </div>
                    -->
                  </div>

                  <div class="row">
                   

                  <div class="col-md-12">
           <table  class="table table-bordered" id="dynamicTable">


            <tr>

                <th>Shipping Mark<br><input type="checkbox" name="allsm" id="allsm" onchange=""><small>Fill all</small></th>
                <th  width="20px">Product Name</th>
                <th>HS Code</th>
                <th>Product Price</th>
                <th>Product Unit</th>
                 <th>Product Weight</th>
                <th>PCS/CTN</th>
        
            <!--     <th>Product Height</th>
                <th>Product Width</th>
                <th>Product Length</th> -->
                <th>Product CBM</th>

                <th>Total Carton</th>
                <th>Total NET Weight</th>
                <th>FOB VALUE IN US $/ CTN</th>
                <th>TOTAL FOB VALUE IN US $/ CTN</th>
                <th>Action</th>
            </tr>
<tr>  
    <td>
      <input type="text" name="addmore[0][sales_pro_shippingmark]"  placeholder="Shipping Mark" class="form-control shipping_mark" />
    </td>  

   
    <td  width="20px">
  <div class="form-group">
  <!-- <input type="text" name="addmore[0][sales_pro_name]" required="true" placeholder="Product Name" class="form-control" /> -->
  
      <select  name="addmore[0][sales_pro_name]"  class="product_name" data-id="0" data-dependent="pro_price" id="pro_name">
      <option selected disabled>Please select one option</option>
       @foreach($pro as $p)
        <option value="{{$p->pro_name}}">{{$p->pro_name}}-{{$p->pro_weight}}-{{$p->pro_unit}}</option>
        @endforeach()
      </select>
      
    </div>
      <!-- <input type="text" name="addmore[0][sales_pro_name]" required="true" placeholder="Product Name" class="form-control" /> -->
    </td>
  

    <td>

      <input type="text" name="addmore[0][sales_pro_hscode]"  placeholder="HS Code" class="form-control"  id="pro_hs0" required/>
    </td>


    <td>
      <input type="number" step='0.01' name="addmore[0][sales_pro_price]"  placeholder="Product Price" class="form-control pro_price product_price" class="product_price pro_price" data-id="0" id="pro_price0" required/>
    </td>

    <td>
      <input type="text" name="addmore[0][sales_pro_unit]"  placeholder="Ex:Kg/Gm/Litter" class="form-control" id="pro_unit0" required/>
    </td>

    <td>
      <input type="text" name="addmore[0][sales_pro_weight]"  placeholder="Product Weight" class="form-control pro_weight" id="pro_weight0" required="" />
    </td>

    <td>
      <input type="text" name="addmore[0][sales_pro_ctn]"  placeholder="PCS/CTN" class="form-control pro_ctn" id="pro_ctn0" required/>
    </td>

 

    <!-- <td> -->
      <input type="hidden" name="addmore[0][sales_pro_height]" placeholder="Product Height" class="form-control pro_height" id="pro_height0"/>
    <!-- </td> -->

    <!-- <td> -->
      <input type="hidden" name="addmore[0][sales_pro_width]" placeholder="Product Width" class="form-control pro_width" id="pro_width0" />
    <!-- </td> -->

    <!-- <td> -->
      <input type="hidden" name="addmore[0][sales_pro_length]" placeholder="Product Length" class="form-control pro_length" id="pro_length0" />
    <!-- </td> -->


    <td>
      <input style="border:2px solid blue" type="text" name="addmore[0][sales_pro_cbm]" placeholder="Product CBM" class="form-control pro_cbm" id="pro_cbm0" required="" />
    </td>


    <td>
      <input  type="text" name="addmore[0][sales_total_carton]" placeholder="Total Carton" class="form-control pro_total_carton" required="" />
    </td>

    <td>
      <input style="border:2px solid blue" type="text" name="addmore[0][sales_total_net_weight]" placeholder="Total NET Weight" class="form-control pro_total_net_weight" />
    </td>

    <td>
      <input  style="border:2px solid blue" type="text" name="addmore[0][sales_fob_value]" placeholder="FOB VALUE IN US $/ CTN" class="form-control pro_total_value_in_ctn" />
    </td>

    <td>
      <input style="border:2px solid blue" type="text" name="addmore[0][sales_total_fob_value]" placeholder="TOTAL FOB VALUE IN US $/ CTN" class="form-control pro_total_fob_value_in_ctn" />
    </td>
                
<td>
  <button type="button" name="add" id="add" class="btn btn-success">+</button>
</td>  
</tr>  
          
        </table> 
    <table class="table table-bordered">
         <tr>  
                <td></td>  
                <td><input type="text" name="count" class="count" value="count" style="background-color:orange;border:none;text-align:center;border-radius:30px;" readonly></td>  
                <td></td>  
                 <td>TOTAL CFR/FOB VALUE IN US $   </td>  
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
                        <input id="input-address" class="form-control form-control-alternative" placeholder=""  type="number" name="ctns">
                      </div>
                    </div>
                    <div class="col-md-2">
                         <div class="form-group">
                        <label class="form-control-label" for="input-address">Price</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder=""  type="number" name="price">
                      </div>

                    </div>

                    <div class="col-md-2">
                           <div class="form-group">
                        <label class="form-control-label" for="input-address">Net Weight/CTN KGS</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder=""  type="number" name="netweight">
                      </div>
                    </div>


                    <div class="col-md-2">
                        
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Total Net Weight CGS</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder=""  type="number" name="totalnetweightcgs">
                      </div>


                    </div>

                    <div class="col-md-2">
                          
                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Gross Weight/CTN KGS</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder=""  type="number" name="grossweight">
                      </div>



                    </div>
                    <div class="col-md-2">
                      

                       <div class="form-group">
                        <label class="form-control-label" for="input-address">Total Gross Weight CGS</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder=""  type="number" name="totalgrossweightcgs">
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
        

     
<script type="text/javascript">

// var textOne = document.getElementById("textOne");
// var textTwo = document.getElementById("textTwo");
// //Get the value of textOne textbox input
// var textOneValue = textOne.value;
 
// var textTwoValue = textOneValue;
// //Assign the value of textOne textbox to textTwo textbox
// textTwo.value = textTwoValue;

  $("input[type='checkbox']").change(function () {
        // var min = $('input:checkbox:checked').map(function () { return $(this).data('min') }).get().sort(function (a, b) { return a - b });
        // var max = $('input:checkbox:checked').map(function () { return $(this).data('max') }).get().sort(function (a, b) { return b - a });

        // if (min.length) {
        //     $("#price-min").val(min[0]);
        //     $("#price-max").val(max[0]);
        // } else {
        //     $("#price-min").val(1);
        //     $("#price-max").val(150000);
        // }
        var v;
        if('input:checkbox:checked'){
          v = $('.shipping_mark').val();
          $('.shipping_mark').val(v);
        }
        console.log($('input:checkbox:checked').val());
    });


$(document).ready(function(){




   $('.lcl').hide(); 
   $('.lcno').hide(); 
$(document).on('click','.lcortt',function(){

   console.log('TT or LC val = '+$('.lcortt').val());
   
  if($('.lcortt').val()=='TT'){
    $('.lcl').hide();
      $('.lcno').hide();
  }else if($('.lcortt').val()=='LC'){
     $('.lcl').show();
     $('.lcno').show();
  }
});
});

  function yesnoCheck1(that) {
    if (that.value == "other") {
  alert("check");
        document.getElementById("ifYes").style.display = "block";
    } else {
        document.getElementById("ifYes").style.display = "none";
    }
}

 function yesnoCheck1(that) {
    if (that.value == "other") {
  alert("check");
        document.getElementById("ifYes1").style.display = "block";
    } else {
        document.getElementById("ifYes1").style.display = "none";
    }
}

 function yesnoCheck2(that) {
    if (that.value == "other") {
  alert("check");
        document.getElementById("ifYes2").style.display = "block";
    } else {
        document.getElementById("ifYes2").style.display = "none";
    }
}

 function yesnoCheck3(that) {
    if (that.value == "other") {
  alert("check");
        document.getElementById("ifYes3").style.display = "block";
    } else {
        document.getElementById("ifYes3").style.display = "none";
    }
}

 function yesnoCheck4(that) {
    if (that.value == "other") {
  alert("check");
        document.getElementById("ifYes4").style.display = "block";
    } else {
        document.getElementById("ifYes4").style.display = "none";
    }
}

 function yesnoCheck5(that) {
    if (that.value == "other") {
  alert("check");
        document.getElementById("ifYes5").style.display = "block";
    } else {
        document.getElementById("ifYes5").style.display = "none";
    }
}

 function yesnoCheck6(that) {
    if (that.value == "other") {
  alert("check");
        document.getElementById("ifYes6").style.display = "block";
    } else {
        document.getElementById("ifYes6").style.display = "none";
    }
}

 function yesnoCheck7(that) {
    if (that.value == "other") {
  alert("check");
        document.getElementById("ifYes7").style.display = "block";
    } else {
        document.getElementById("ifYes7").style.display = "none";
    }
}

 function yesnoCheck8(that) {
    if (that.value == "other") {
  alert("check");
        document.getElementById("ifYes8").style.display = "block";
    } else {
        document.getElementById("ifYes8").style.display = "none";
    }
  }

     function yesnoCheckn(that) {
    if (that.value == "other") {
  alert("check");
        document.getElementById("ifYesnotifyparty").style.display = "block";
    } else {
        document.getElementById("ifYesnotifyparty").style.display = "none";
    }

   
}

</script>

<script type="text/javascript">
  
  $(document).ready(function(){


    var i = 0;
  var j = 0;
  var key=0;
  var tval=Array();
  var sum;
    $("#add").click(function(){

        j=i; 
        ++i;

   
        $("#dynamicTable").append('<tr>'+

          '<td><input type="text" name="addmore['+i+'][sales_pro_shippingmark]" placeholder="Shipping Mark" class="form-control shipping_mark" /></td>'+

          '<td><select data-dependent="pro_price"  name="addmore['+i+'][sales_pro_name]" class="product_name" data-id="'+i+'" id="pro_name"><option selected disabled>Please select one option</option>@foreach($pro as $p)<option value="{{$p->pro_name}}">{{$p->pro_name}}-{{$p->pro_weight}}-{{$p->pro_unit}}</option>@endforeach</select></td>'+

          '<td><input type="text" name="addmore['+i+'][sales_pro_hscode]" placeholder="HS Code" class="form-control" id="pro_hs'+i+'" required/></td>'+

          '<td><input type="text" name="addmore['+i+'][sales_pro_price]" placeholder="Product Price" class="form-control pro_price" id="pro_price'+i+'" class="product_price"  data-id="'+i+'" required/></td>'+


           '<td><input type="text" name="addmore['+i+'][sales_pro_unit]"  placeholder="Product Unit" class="form-control" id="pro_unit'+i+'"/></td>'+

           '<td><input type="text" name="addmore['+i+'][sales_pro_weight]"  placeholder="Product Weight" class="form-control pro_weight" id="pro_weight'+i+'" required/></td>'+

          '<td><input type="text" name="addmore['+i+'][sales_pro_ctn]"  placeholder="PCS/CTN" class="form-control pro_ctn"  id="pro_ctn'+i+'" required/></td>'+

 

          // '<td>'+
          '<input type="hidden" name="addmore['+i+'][sales_pro_height]" placeholder="Product Height" class="form-control pro_height" id="pro_height'+i+'" />'+
          // '</td>'+

          // '<td>'+
          '<input type="hidden" name="addmore['+i+'][sales_pro_width]" placeholder="Product Width" class="form-control pro_width" id="pro_width'+i+'" />'+
          // '</td>'+

          // '<td>'+
          '<input type="hidden" name="addmore['+i+'][sales_pro_length]" placeholder="Product Length" class="form-control pro_length" id="pro_length'+i+'" />'+
          // '</td>'+

          '<td><input style="border:2px solid blue" type="text" name="addmore['+i+'][sales_pro_cbm]" required="true" placeholder="Product CBM" class="form-control pro_cbm" id="pro_cbm'+i+'" required /></td>'+

          '<td><input type="text" name="addmore['+i+'][sales_total_carton]" placeholder="Total Carton" class="form-control pro_total_carton" required /></td>'+



          '<td><input style="border:2px solid blue" type="text" name="addmore['+i+'][sales_total_net_weight]" placeholder="Total Net Weight" class="form-control pro_total_net_weight" id="pro_amount'+i+'" required/></td>'+

          '<td><input style="border:2px solid blue" type="text" name="addmore['+i+'][sales_fob_value]" placeholder="FOB VALUE" class="form-control pro_total_value_in_ctn" id="pro_amount'+i+'" required/></td>'+

          '<td><input style="border:2px solid blue" type="text" name="addmore['+i+'][sales_total_fob_value]" placeholder="Total FOB VALUE" class="form-control pro_total_fob_value_in_ctn" id="pro_amount'+i+'" required/></td>'+

          
          '<td><button type="button" class="btn btn-danger remove-tr">-</button></td>'+
          '</tr>');
    
     // $(function(){
     //            var value1 = parseFloat($('#pro_amount'+j).val()||0);
     //           var value2 = parseFloat($('#pro_price'+j).val()||0);
     //           $('#mul'+j).val(value1*value2);

     //           v = value1*value2;
     //           tval[j]=v;
     //             console.log("#pro_amount"+j+" "+"#pro_amount"+j+" val-1= "+value1+" val = -2"+value2+" I= "+i+" v= "+v+" J= "+j+" tval["+j+"]= "+tval[j]);
     //             ++j;

     //              sum = tval.reduce((a, b) => a + b, 0);
     //          console.log("sum = "+sum+" tval = "+tval);
     //          $('#sum').val(sum);

     //    });



      
     console.log(i+" j= "+j+" tval["+"]= "+tval[j]);
    });




    $(document).on('click keyup', '.product_name', function(){

        $('#dynamicTable').find('tr').each(function(index, element){


            // var id = $(element).find(".pro_price").attr("data-id");

            var product_name_class = $(element).find(".product_name").attr('class');
            // var amount = $(element).find(".pro_amount").val();
            // var total = parseFloat(price*amount);
            // console.log(product_name_class);
            // if (!isNaN(total)) {
            //     // $("#mul"+id).val(total);
            //     $(element).find(".pro_total").val(total);
            //     grand_total += total;
            // }

        });
        // $("#sum").val(grand_total);
    });
   
    $(document).on('click', '.remove-tr', function(){ 
        
        
      $(this).parents('tr').remove();
      
        // a=tval.pop();
        
    //    $(function(){
    //      key=i;
        // a=sum;
        // tval.pop();
        //   sum = tval.reduce((a, b) => a + b, 0);
     //            console.log("sum = "+sum);
     //            $('#sum').val(sum);
        // console.log("inside remove key= "+key+' pop = '+a+' j = '+j+" remove tval="+tval);
        // key--;
    //    });

    });  
        // $(document).on('click keyup', '.remove-tr, .pro_price, .pro_amount, .pro_height, .pro_width, .pro_length, .pro_ctn, .pro_total_carton, .pro_weight', function(){

               $(document).on('click keyup','.currency_name',function(){
            
         
                var currency = $('#currency_name').val();
                if(currency=='Euro'){ 
                  $('#currency_rate').val('99.99');
          
              }
                else if(currency=='Doller'){
                 $('#currency_rate').val('84.48');
 
             }
                else if(currency=='Taka'){
                 $('#currency_rate').val('1');

             }
                else {
                 $('#currency_rate').val('1');
                
               }
            
               
      
     });

       $(document).on('click', '.remove-tr,.count', function(){


      
      


      var grand_total = 0;
      var total_cbm = 0;
      var fob=0;
      var total_fob=0;
       var net_weight=0;
       var grand_fob_total=0;
      $('#dynamicTable').find('tr').each(function(index, element){
            
//             var height = $(element).find(".pro_height").val();

//             var width = $(element).find(".pro_width").val();
//             var length = $(element).find(".pro_length").val();


//             var ccc = 1728*35.3145;
//                   var total_cbm = parseFloat(height*width*length/ccc); 
//                             if (!isNaN(total_cbm)) {
//                             // $("#mul"+id).val(total);
//                             $(element).find(".pro_cbm").val(total_cbm);
//                             //grand_total += total;
//                           }
// console.log('total_cbm = '+total_cbm);

        var ctn = $(element).find(".pro_ctn").val();
        var prc = $(element).find(".pro_price").val();
        var total_carton = $(element).find(".pro_total_carton").val();
        var fob = parseFloat(ctn*prc); 
        var total_fob =parseFloat(fob*total_carton);
                           if (!isNaN(fob)&& !isNaN(total_fob)) {
                            // $("#mul"+id).val(total);
                            $(element).find(".pro_total_value_in_ctn").val(fob);
                            $(element).find(".pro_total_fob_value_in_ctn").val(total_fob);
                            grand_fob_total += total_fob;
                            //grand_total += total;
                          }
console.log('total_fob = '+total_fob);
        var weight = $(element).find(".pro_weight").val();
     
        var net_weight = parseFloat(ctn*weight); 

                           if (!isNaN(net_weight)) {
                            // $("#mul"+id).val(total);
                            $(element).find(".pro_total_net_weight").val(net_weight);

                            //grand_total += total;
                          }
console.log('net_weight = '+net_weight);

        // var id = $(element).find(".pro_price").attr("data-id");
        // var price = $(element).find(".pro_price").val();
        // var amount = $(element).find(".pro_amount").val();
        // var total = parseFloat(price*amount);             
        // // console.log('totla = '+total);
        //                     if (!isNaN(total)) {
        //                       // $("#mul"+id).val(total);
        //                       $(element).find(".pro_total").val(total);
        //                       grand_total += total;
        //                     }

      });
      // $("#sum").val(grand_total);
       $("#sum").val(grand_fob_total);
    });


   });
</script>

<script type="text/javascript">
  


$(document).ready(function(){
  $('#importer_name_to_notify_party').change(function() {
    $('#get_importer_name').val($(this).val());
    console.log($(this).val());
});

});




/*Ajax*/

$(document).ready(function(){
    $(document).on('change','.product_name',function(){
        if($(this).val() != '') {
           

            var id = $(this).attr("data-id");
            var select = $(this).attr("id");
            var product_id = $(this).val();
            var dependent = $(this).data('dependent');
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var _token = $('input[name="_token"]').val();
            console.log('select = '+select+' value= '+product_id+' dependent= '+dependent+" _token= "+_token+' id = '+id);
            $.ajax({

                dataType: 'json',
                url:"{{ route('fetch') }}",
                method:"POST",
                data:{select:select, value:product_id, _token:_token, dependent:dependent},
                success:function(result)
                {
                    console.log(result);
                    // getval=result;
                    // dep = dependent;
                    // console.log('input[name="addmore['+i+']['+dependent+']"');
                    // $('input[name="addmore['+i+']['+dependent+']"').val(result);
             
                  
        var currency_amount;
        var pro_price;
          if($('#currency_rate').val()!=0)
          {
            pro_price = parseFloat(result.pro_price);
            currency_amount = parseFloat($('#currency_rate').val());

            console.log(  'cAAAAAAAAAA '+currency_amount);
          }
          else {
            pro_price = parseFloat(result.pro_price);
            // currency_amount = parseFloat($('#currency_rate').val());
            currency_amount=1;
          }
                   

                    $('#pro_price'+  id).val(pro_price*currency_amount);
                     $('#pro_hs'+  id).val(result.pro_hscode);
                      $('#pro_unit'+  id).val(result.pro_unit);
                       $('#pro_weight'+  id).val(result.pro_weight);
                        $('#pro_width'+  id).val(result.pro_width);
                         $('#pro_height'+  id).val(result.pro_height);
                          $('#pro_length'+  id).val(result.pro_length);
                            $('#pro_cbm'+  id).val(result.pro_cbm);
                           $('#pro_ctn'+  id).val(result.pro_ctn);
                }

            })

        }
            // console.log('2 success dependent = '+dep+' result= '+getval);
            //    $('#'+dep).val(getval);
    });
});


</script>

      @endsection