@extends('layouts.app')
@section('content')
<div class="content-wrapper mt-5">
<div class="col-md-12"style="margin-top:50px;">
          
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add user</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{route('user.store')}}">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <!-- <label for="inputEmail3" class="">Email</label> -->

                  <div class="col-sm-10">
                  	<label for="" class="">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="username"value="">
                  </div>
                </div>
                <div class="form-group">
                  <!-- <label for="inputEmail3" class="">Email</label> -->

                  <div class="col-sm-10">
                    <label for="" class="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="email"value="">
                  </div>
                </div>
                <div class="form-group">
                  <!-- <label for="inputEmail3" class="">Email</label> -->

                  <div class="col-sm-10">
                    <label for="" class="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password"value="">
                  </div>
                </div>
                <div class="form-group">
                 
                  <div class="col-sm-10">
                    <label for="" class="">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="address"value="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                <label>Assign role</label>
                <select class="form-control"data-placeholder="Give a role"
                        style="width: 100%;" name="role">
                  <option>Admin</option>
                  <option>Staff</option>
                  
                
                </select>
              </div>
              </div>
                <div class="form-group">
                  <div class="col-sm-10">
                <label>Give a permission</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Give a permission"
                        style="width: 100%;" name="permission[]">
                  <option>View-things</option>
                  <option>Create-things</option>
                  <option>Edit-things</option>
                  <option>Delete-things</option>
                
                </select>
              </div>
              </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Save</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          </div>

          


@endsection