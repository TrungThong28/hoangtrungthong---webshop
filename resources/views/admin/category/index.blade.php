@extends ('admin.layouts.main')

@section ('content')
<section class="content-header">
    <h1>
        Chuyên Mục Sản Phẩm
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">

                    <div class="box-tools">
                        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>STT</th>
                            <th>Tên danh mục</th>
                            <th>Hình ảnh</th>
                            <th>Danh mục cha</th>
                            <th>Ví trí</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>

                        @foreach($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->image }}</td>
                            <td>{{ $item->parent->name or '(Trong)' }}</td>
                            <td>{{ $item->is_active }}</td>
                            <td>{{ $item->position }}</td>
                            <td>
                            <td>
                                <a href="{{ route('admin.category.show',['id'=>$item->id]) }}" class="btn btn-primary">Xem</a>
                                <a href="{{ route('admin.category.edit' ,['id'=>$item->id]) }}" class="btn btn-primary">Sua</a>
                            </td>
                        </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>


@endsection
