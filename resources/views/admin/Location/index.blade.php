
<style>
    .banner_img_blk img {
    width: 80px;
    position: relative;
    left: 50%;
    transform: translate(-50%,0);
}
</style>

@include('admin.layout.header')
@include('admin.layout.aside')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">LOcation</li>
      </ol>
    </section>

    <section class="content">
    <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-10 hidden-xs-down"></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
                <button onclick="location.href='{{url('/admin/location/create')}}'" type="button" class="btn btn-block btn-success">Create</button>
            </div>
        </div>
        <br>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Location</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Sort Order</th>
                  <th>Status</th>
                  <th>Edit</th>
                 </tr>
                </thead>
                <tbody>
                    @if($location->isNotEmpty())
                    @foreach($location as $key => $value)
                    <tr>
                        <td>{{ $value['id'] }}</td>
                        <td>{{ $value['title'] }}</td>
                        <td>{{ $value['sort_order'] }}</td>
                        <td>
                            @if($value['status'] == 1)
                            <span class="label label-success">
                                Active
                            </span>
                            @else
                            <span class="label label-warning">
                                Inactive
                            </span>
                            @endif
                        </td>
                        <td>
                        <a href="{{ Url('/admin/location/edit/'.'?id='.strtolower($value['id'])) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        </td>

                    </tr>
                    @endforeach
                    @endif

                </tbody>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

    <!-- /.content -->
  </div>

@include('admin.layout.footer')
