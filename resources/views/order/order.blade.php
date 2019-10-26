@extends('layouts.app')
@section('jqueryfile')
<script type="text/javascript" src="{{asset('jquery/jquery-3.3.1.min-1.js')}}"></script>
@show
@section('content')
<div class="content-wrapper mt-5">
<div class="col-md-12"style="margin-top:50px;">
          
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add order</h3>

            </div>
              <h3 class="bg-danger"> @if(count($errors)>0)
    @foreach($errors->all() as $error)
        {{$error}}
        @endforeach
    @endif </h3>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{route('order.store')}}">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <!-- <label for="inputEmail3" class="">Email</label> -->

                  <div class="col-sm-10">
                  	<label for="" class="">Customer Name</label>
                    <input type="text" class="form-control category" name="name" placeholder="Enter customer name"value="">
                  </div>
                  <div class="col-sm-10">
                    <label for="" class="">Customer Address</label>
                    <input type="text" class="form-control category" name="address" placeholder="Enter customer address"value="">
                  </div>
                  <div class="col-sm-10">
                    <label for="" class="">Customer phone number</label>
                    <input type="number" class="form-control category" name="number" placeholder="Enter customer phone number"value="">
                  </div>
                </div>
                <div class="form-group">
                	<div class="col-sm-10">
                  <label>Select product</label>
                  
                  <select class="form-control status" name="product_id" id='selc'>

                    <option class='disabled'>Select product</option>
                    @foreach($product as $products)
                    <option data-ids="{{$products->price}}"class="" data-quantity='{{$products->quantity}}' value="{{$products->id}}">{{$products->product}}</option>
                    
                    @endforeach
                  </select>
                </div>
                </div>
                <div class='form-group'>
                <div class="col-sm-10">
                    <label for="" class="">Quantity</label>
                    <input type="text" class="form-control category" name="quantity" placeholder=""id="quantity">
                  </div>
                  </div>
                  <div class='form-group'>
                <div class="col-sm-10">
                    <label for="" class="">Rate</label>
                    <input type="number" class="form-control category" name="rate" placeholder=""id='rate'>
                  </div>
                  </div>
                  <div class='form-group'>
                <div class="col-sm-10">
                    <label for="" class="">Total amount</label>
                    <input type="number" class="form-control category" name="totalamount" placeholder=""id="amount">
                  </div>
                  </div>
                  <div class='form-group'>
                <div class="col-sm-10">
                    <label for="" class="">VAT(10%)</label>
                    <input type="number" class="form-control vat" name="vat" placeholder=""value="10">
                  </div>
                  </div>
                  <div class='form-group'>
                <div class="col-sm-10">
                    <label for="" class="">Final price including VAT</label>
                    <input type="number" class="form-control category" name="finalprice" placeholder=""id='net'>
                  </div>
                  </div>
                  <div class="form-group">
                  <div class="col-sm-10">
                    <label for="" class="">Status</label>
                  <select class="form-control status" name="status">

                    
                    
                    <option>Paid</option>
                    <option>Unpaid</option>
                    
                   
                  </select>
                </div>
                </div>
                
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit" class="btn btn-info pull-right hello">Save order</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          </div>

          


@endsection
@section('jquerycontent')
<script type="text/javascript">
  $(document).ready(function(){
    //var select=$('#selc').val();


    
      
      $('#selc').change(function(){



          var id=parseInt($(this).children(":selected").data("ids"));
        
          var quan=parseInt($(this).children(":selected").data("quantity"));

          var rate=$("#rate").val(id);
          var quantity=$("#quantity").val(quan);
          
          var totalamount=id*quan;
          var grossam=$("#amount").val(totalamount);
          var vat=parseInt($('.vat').val());
          var per=vat/100;
          var netamount=totalamount+(per*totalamount);
          $("#net").val(Math.round(netamount)) ;

          
          
          


        });

     
    // }

  });
  
</script>
@endsection