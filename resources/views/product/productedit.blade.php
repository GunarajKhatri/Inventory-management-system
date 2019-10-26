@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="overflow:hidden;">
<div class="col-md-12"style="margin-top:20px;">
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit product</h3>
            </div>
               <h3 class="bg-danger"> @if(count($errors)>0)
    @foreach($errors->all() as $error)
        {{$error}}
        @endforeach
    @endif </h3>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('product.update',$product->id)}}"enctype="multipart/form-data">
              {{csrf_field()}}
              {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label for="">Product</label>
                  <input type="text" class="form-control" id="exampleInput" placeholder="Enter product"name='product' value="{{$product->product}}">
                </div>
                 <div class="form-group">
                  <label for="exampleInputphoto">Product Photo</label>
                  <input type="file" class="form-control"name="photo">
                </div>
                <div class="form-group">
                  <label for="">Price</label>
                  <input type="number" class="form-control" id="exampleInput" placeholder="Enter price" name='price'value="{{$product->price}}">
                </div>
                <div class="form-group">
                  <label for="">Quantity</label>
                  <input type="text" class="form-control" id="exampleInput" placeholder="Enter quantity" name="quantity" value="{{$product->quantity}}">
                </div>
                <div class="form-group">
                  
                  <label>Select category</label>
                  <select class="form-control" name="category">
                    @foreach($category as $categorys)
                    <option>{{$categorys->category}}</option>
                   
                    @endforeach
                   
                    
                  </select>
                </div>
                <div class="form-group">
                  
                  <label>Select brand</label>
                  <select class="form-control" name="brand">
                    @foreach($brand as $brands)
                    <option>{{$brands->brand}}</option>
                   
                    @endforeach
                  </select>
                </div>
                <div class='form-group'>
                <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Write About Product
                <small>Add short discription about product</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                 <form>
                    <textarea id="editor1" name="discription" rows="10" cols="80" >
                             {!! $product->discription !!}               
                    </textarea>
             
            </div>
          </div>
          </div>
        
        <div class="form-group">
                  
                  <label>Availability</label>
                  <select class="form-control" name="availability">
                    <option>Active</option>
                    <option>Inactive</option>
                   
                    
                  </select>
                </div>

                </div>

                
                 
              

              <div class="box-footer form-group">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
</div>
</div>



</div>

@endsection