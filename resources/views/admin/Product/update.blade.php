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
                        <h3 class="box-title">Update Product</h3>
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
                    <form role="form" action="{{url('/admin/product/update')}}" method="post" enctype="multipart/form-data">
                        {{@csrf_field()}}
                        <input type="hidden" name="product_id" value="{{$editable_value['id']}}">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categoryTitle">Category*</label>
                                        <select name="cat_id" id="cat_id" class="form-control select2" style="width: 100%;" required>
                                            @if(!empty($category))
                                            @foreach($category as $item)
                                                <option value="{{$item['id']}}" {{ $editable_value['cat_id'] == $item['id'] ? "selected" : "" }}>{{$item['title']}}</option>
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
                                                <option value="{{$item['id']}}" {{ $editable_value['location_id'] == $item['id'] ? "selected" : "" }}>{{$item['title']}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categoryTitle">Title*</label>
                                        <input type="text" class="form-control" name="title" value="{{$editable_value['title']}}" id="categoryTitle" placeholder="title">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categoryTitle">Sub-Title*</label>
                                        <input type="text" class="form-control" name="sub_title" value="{{$editable_value['sub_title']}}" placeholder="sub title" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="categoryTitle">Iframe*</label>
                                        <input type="text" class="form-control" name="iframe" value="{{$editable_value['iframe']}}" placeholder="iframe from google maps" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Description*</label>
                                        <textarea name="description" id="description" required>{!! $editable_value['description'] !!}</textarea>
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="image">Image (243 X 222px)</label>
                                            <input type="hidden" id="old_images" name="old_images" value="{{$editable_value['img_url']}}">
                                            <?php
                                                $old_images = explode(',',$editable_value['img_url']);
                                            ?>
                                            @if(!empty($old_images))
                                                @foreach($old_images as $old_image)
                                                    <img src="{{asset($old_image)}}" alt="" width="50px">
                                                @endforeach
                                            @endif
                                            <input type="file" id="image" name="image[]" multiple>
                                        </div>
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
<script>
    CKEDITOR.replace( 'description' );
</script>
@include('admin.layout.footer')

