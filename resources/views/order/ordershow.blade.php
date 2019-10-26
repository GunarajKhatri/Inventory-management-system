@extends('layouts.app')
@section('content')
<div class="content-wrapper">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Order table</h3>
            </div>
            @role('Admin')
            <button type="submit" name="search" id="search-btn" class="btn btn-flat btn-success" style="margin-left:200px;"> <a href="{{route('order.create')}}" class="text-info">Add order</a>  
                </button>
              @endrole
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Customer name</th>
                  <th>Customer Phone number</th>
                  <th>Product offered</th>
                  <th>Final price</th>
                  <th>Paid status</th>
                  <th>Ordered date</th>

                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                  @foreach($order as $orders)
                  <td>{{$orders->id}}</td>
                  <td>{{$orders->customername}}
                  </td>
                  
                  <td>{{$orders->customernumber}}</td>
                  <td>{{$orders->product}}</td>
                  <td>{{$orders->finalprice}}</td>
                  <td>{{$orders->status}}</td>
                  <td>{{$orders->created_at}}</td>
                  
                  
                  <td>
                    @role('Admin|Staff')
                    <a href="{{route('order.edit',$orders->id)}}"><i class="fa fa-edit"></i></a>
                    @endrole
                  <form id='form-delete-{{$orders->id}}'method="post" action="{{route('order.destroy',$orders->id)}}" style="display:none;">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    </form>
                  @role('Admin|Staff')
                 <a href=""onclick="
                   if(confirm('Are you sure,You want to Delete?')){
                    event.preventDefault();
                    document.getElementById('form-delete-{{$orders->id}}').submit();
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
                  <th>Customer name</th>
                  <th>Customer Phone number</th>
                  <th>Product offered</th>
                  <th>Final price</th>
                  <th>Paid status</th>
                  <th>Ordered date</th>

                  <th>Action</th>
                 
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>


@endsection