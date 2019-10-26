@extends('layouts.app')
@section('content')
<div class="content-wrapper">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Brand table</h3>
            </div>
            @role('Admin')
            <button type="submit" name="search" id="search-btn" class="btn btn-flat btn-success" style="margin-left:200px;"> <a href="{{route('brand.create')}}" class="text-info">Add brand</a>  
                </button>
              @endrole
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Brand</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                  @foreach($brand as $brands)
                  <td>{{$brands->id}}</td>
                  <td>{{$brands->brand}}
                  </td>
                  <td>{{$brands->status}}</td>
                  <td>
                  @role('Admin|Staff')
                    <a href="{{route('brand.edit',$brands->id)}}"><i class="fa fa-edit"></i></a>
                    @endrole
                  <form id='form-delete-{{$brands->id}}'method="post" action="{{route('brand.destroy',$brands->id)}}" style="display:none;">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    </form>
                    @role('Admin|Staff')
                 <a href=""onclick="
                   if(confirm('Are you sure,You want to Delete?')){
                    event.preventDefault();
                    document.getElementById('form-delete-{{$brands->id}}').submit();
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
                  <th>Id</th>
                  <th>Brand</th>
                  <th>Status</th>
                  <th>ACtion</th>
                 
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>


@endsection