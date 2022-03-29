@include('admin.layout.header')
@include('admin.layout.aside')


<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Location</h3>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- /.box-header -->
                    <!-- form start -->
                    @foreach($editable_value as $editable_value)
                    <form role="form" action="{{url('/admin/location/update')}}" method="post" enctype="multipart/form-data">
                        {{@csrf_field()}}
                        <input type="hidden" name="id" value="{{$editable_value['id']}}">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categoryTitle">Title</label>
                                        <input type="text" class="form-control" name="title" value="{{$editable_value['title']}}" id="categoryTitle" placeholder="title">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sort_order">Sort Order</label>
                                        <input type="text" class="form-control" name="sort_order" value="{{$editable_value['sort_order']}}" id="sort_order" placeholder="sort order">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select id="status" name="status" class="form-control select2" style="width: 100%;">
                                            <option value="1" {{ $editable_value['status'] == "1" ? "selected" : "" }}>Active</option>
                                            <option value="2" {{ $editable_value['status'] == "2" ? "selected" : "" }}>Inactive</option>
                                        </select>
                                    </div>
                                </div>




                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                @endforeach
            </div>
            <!-- /.box -->
            </div>
        </div>
    </section>
</div>

@include('admin.layout.footer')
