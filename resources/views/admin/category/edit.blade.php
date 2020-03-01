@extends('admin.layouts.main')

@section('content')
<section class="content-header">
    <h1>
        Thêm Danh Mục Sản Phẩm
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thông tin danh mục</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label>Danh mục Cha</label>
                            <select class="form-control" name="parent_id">
                                <option value="">-- chọn --</option>
                                @foreach($category as $item)

                                <option value="{{($item->parent_id == $item->id)? 'seclected': ''}}">{{$item->name}}</option>

                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Danh Mục</label>
                            <input type="text" class="form-control" id="name" placeholder="Nhập tên danh mục" name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File</label>
                            <input type="file" id="image" name="image">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="1" name="is_active"> Trạng thái
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Vị trí</label>
                            <input type="text" class="form-control" id="position" placeholder="Nhập vị trí" name="position">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (left) -->
    </div>
    <!-- /.row -->
</section>
@endsection
