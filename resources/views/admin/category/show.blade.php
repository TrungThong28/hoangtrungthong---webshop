@extends('admin.layouts.main')

@section('content')
<section class="content-header">
    <h1>
        Chi Tiết Danh Mục Sản Phẩm
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
                <div class="box-body">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td><b>Tên Danh Mục : </b></td>
                            <td>{{ $data->name }}</td>
                        </tr>
                        <tr>
                            <td><b>Hình ảnh : </b></td>
                            <td>{{ $data->image }}</td>
                        </tr>
                        <tr>
                            <td><b>Danh mục cha : </b></td>
                            <td>{{ $data->parent->name or NULL }}</td>
                        </tr>
                        <tr>
                            <td><b>Vị trí : </b></td>
                            <td>{{ $data->position }}</td>
                        </tr>
                        <tr>
                            <td><b>Trạng thái</b></td>
                            <td>{{ $data->is_active }}</td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (left) -->
    </div>
    <!-- /.row -->
</section>
@endsection
