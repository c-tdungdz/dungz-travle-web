@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            CẬP NHẬT ĐỊA ĐIỂM
                        </header>
                        
                            <?php
                                $message = Session::get('message');
                                if ($message) {
                                    echo $message;
                                    Session::put('message',null);
                                }
                            ?>
                            <div class="panel-body">
                            <div class="position-center">
                                <form role="form"  method="post">
                                    {{csrf_field() }}
                                    @if(isset($diemden))
                                    @foreach ($diemden as $item)
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên địa điểm</label>
                                        <input type="text" name="txt_diadiem" value="{{ $item->ten }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vị trí </label>
                                        <input type="text" name="txt_vitri" value="{{ $item ->vitri }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hình ảnh</label>
                                        <input type="text" name="txt_hinhanh"  value="{{ $item ->hinhanh }}"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Thông tin</label>
                                        <input type="text" name="txt_thongtin"  value="{{ $item ->thongtin }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Đánh giá</label>
                                        <input type="text" name="txt_danhgia"  value="{{ $item ->danhgia }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    @endforeach
                                    @endif
                                <button type="submit" name="update_category_product" class="btn btn-info">Cập nhật thể loại</button>
                            </form>
                            </div>
                        </div>
                    </section>

            </div>
@endsection