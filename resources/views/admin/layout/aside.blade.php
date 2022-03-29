<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Welcome Admin</p>
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
        <li class="active"><a href="{{url('admin/index')}}"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a></li>
        <li><a href="{{url('admin/category/index')}}"><i class="fa fa-th" aria-hidden="true"></i> Category</a></li>
        <li><a href="{{url('admin/location/index')}}"><i class="fa fa-map-marker" aria-hidden="true"></i> Location</a></li>
        <li><a href="{{url('admin/product/index')}}"><i class="fa fa-sitemap" aria-hidden="true"></i> Product</a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
