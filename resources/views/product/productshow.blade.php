@extends('layouts.app')
@section('content')
<div class="content-wrapper">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Product table</h3>
            </div>
             @role('Admin')
            <button type="submit" name="search" id="search-btn" class="btn btn-flat btn-success" style="margin-left:200px;"> <a href="{{route('product.create')}}" class="text-info">Add product</a>  
                </button>
              @endrole 
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Product</th>
                  <th>Photo</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Availability</th>

                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                  @foreach($product as $products)
                  <td>{{$products->id}}</td>
                  <td>{{$products->product}}
                  </td>
                  <td><img src="{{asset('storage/'.$products->photo)}}" style="border:1px solid black; border-radius:30px;height:60px;width:60px;"></td>
                  <td>Rs.{{$products->price}}</td>
                  <td>{{$products->quantity}}</td>
                  <td>{{$products->availability}}</td>
                  
                  <td>
                    @role('Admin|Staff')
                    <a href="{{route('product.edit',$products->id)}}"><i class="fa fa-edit"></i></a>
                    @endrole
                  <form id='form-delete-{{$products->id}}'method="post" action="{{route('product.destroy',$products->id)}}" style="display:none;">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    </form>
                    @role('Admin|Staff')
                 <a href=""onclick="
                   if(confirm('Are you sure,You want to Delete?')){
                    event.preventDefault();
                    document.getElementById('form-delete-{{$products->id}}').submit();
                    } else{

                     event.preventDefault();
                    }" style="margin-left:40px; "><i class="fa fa-trash"></i></a>
                 @endrole
               </td>

                  
                </tr>
                
                
                
                
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Product</th>
                  <th>Photo</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Availability</th>

                  <th>Action</th>
                 
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>


@endsection