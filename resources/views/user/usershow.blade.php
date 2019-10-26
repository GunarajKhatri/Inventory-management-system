@extends('layouts.app')
@section('content')
<div class="content-wrapper">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">User table</h3>
            </div>
              @role('Admin')
                 <button type="submit" name="search" id="search-btn" class="btn btn-flat btn-success" style="margin-left:200px;"> 
                  <a href="{{route('user.create')}}" class="text-info">Add user</a>   
                  </button>
             @endrole
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                   <th>ID</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Role</th>
                  <th>Action</th>
                 
                  
                </tr>
                </thead>
                
                  
                <tbody>
                 
                <tr>

                 @foreach($user as $users)
                 
                   
                  <td>{{$loop->index+1}}</td>
                  <td>{{$users->username}}
                  </td>
                  <td>{{$users->email}}</td>
                  <td>{{$users->address}}</td>
                
                   <td>
                    
                    {{$users->role}}
                    
                  </td>

                 
                  
                 
                  <td>
               @role('Admin')
                  <a href="{{route('user.edit',$users->id)}}"><i class="fa fa-edit"></i></a>
               @endrole
                  <form id='form-delete-{{$users->id}}'method="post" action="{{route('user.destroy',$users->id)}}" style="display:none;">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    </form>
                  @role('Admin')
                 <a href=""onclick="
                   if(confirm('Are you sure,You want to Delete?')){
                    event.preventDefault();
                    document.getElementById('form-delete-{{$users->id}}').submit();
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
                  <th>Username</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Role</th>
                  <th>Action</th>
                 
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>


@endsection