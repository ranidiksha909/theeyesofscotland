@include('admin.layout.header')
@include('admin.layout.aside')
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

<?php
use App\Models\Category;
use App\Models\Location;

$category = Category::where(['status'=>1])->get();
$location = Location::where(['status'=>1])->get();

?>

<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title">Create Product</h3>
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
                <form role="form" action="{{url('/admin/product/store')}}" method="post" enctype="multipart/form-data">
                    {{@csrf_field()}}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="categoryTitle">Category*</label>
                                    <select name="cat_id" id="cat_id" class="form-control select2" style="width: 100%;" required>
                                        @if(!empty($category))
                                        @foreach($category as $item)
                                            <option value="{{$item['id']}}">{{$item['title']}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="categoryTitle">Location*</label>
                                    <select name="location_id" id="location_id" class="form-control select2" style="width: 100%;" required>
                                        @if(!empty($location))
                                        @foreach($location as $item)
                                            <option value="{{$item['id']}}">{{$item['title']}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="categoryTitle">Title*</label>
                                    <input type="text" class="form-control" name="title" placeholder="sub title" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="categoryTitle">Sub-Title*</label>
                                    <input type="text" class="form-control" name="sub_title" placeholder="sub title" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="categoryTitle">Iframe*</label>
                                    <input type="text" class="form-control" name="iframe" placeholder="iframe Url from google maps" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Description*</label>
                                    <textarea name="description" id="description" required></textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sort_order">Sort Order</label>
                                    <input type="text" class="form-control" name="sort_order" placeholder="sort order">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control select2" style="width: 100%;">
                                        <option value="1" selected="selected">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">Images(Multiple)</label>
                                    <input type="file" id="image" name="image[]" required multiple>
                                </div>
                            </div>
                        </div>

                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script>
    CKEDITOR.replace( 'description' );
</script>
@include('admin.layout.footer')

