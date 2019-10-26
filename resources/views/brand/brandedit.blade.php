@extends('layouts.app')
@section('content')
<div class="content-wrapper mt-5">
<div class="col-md-12"style="margin-top:80px;">
          
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit brand</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{route('brand.update',$brands->id)}}">
            	{{csrf_field()}}
              {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <!-- <label for="inputEmail3" class="">Email</label> -->

                  <div class="col-sm-10">
                  	<label for="inputEmail3" class="">brand</label>
                    <input type="text" class="form-control brand" name="brand" placeholder="brand" value="{{$brands->brand}}">
                  </div>
                </div>
                <div class="form-group">
                	<div class="col-sm-10">
                  <label>Select</label>
                  <select class="form-control status" name="status" value="">
                    <option>Active</option>
                    <option>Inactive</option>
                    
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