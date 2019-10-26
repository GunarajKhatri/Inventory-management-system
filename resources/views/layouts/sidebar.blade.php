<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Gunaraj Cooperation</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="{{url('/home')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         
        </li>
       
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i>
            <span>Brand</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('brand.create')}}"><i class="fa fa-circle-o"></i>Add Brand</a></li>
            <li><a href="{{route('brand.index')}}"><i class="fa fa-circle-o"></i>Manage Brand</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i>
            <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('category.create')}}"><i class="fa fa-circle-o"></i>Add Category</a></li>
            <li><a href="{{route('category.index')}}"><i class="fa fa-circle-o"></i>Manage Brand</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i>
            <span>Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('product.create')}}"><i class="fa fa-circle-o"></i>Add Product</a></li>
            <li><a href="{{route('product.index')}}"><i class="fa fa-circle-o"></i>Manage product</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i>
            <span>Order</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('order.create')}}"><i class="fa fa-circle-o"></i>Add Order</a></li>
            <li><a href="{{route('order.index')}}"><i class="fa fa-circle-o"></i>Manage Order</a></li>
            
          </ul>
        </li>
       
         <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i>
            <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('user.create')}}"><i class="fa fa-circle-o"></i>Add User</a></li>
            <li><a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i>Manage User</a></li>
            
          </ul>
        </li>
       
        <li class="">
          <a href="{{url('/home/profile')}}">
            <i class="fa fa-circle-o"></i>
            <span>Admin profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         
        </li>


        
        
       
       
       
       
        
      </ul>
</section>
    <!-- /.sidebar -->
</aside>