@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            THÊM ĐỊA ĐIỂM
                        </header>
                        <div class="panel-body">
                            <?php
                                $message = Session::get('message');
                                if ($message) {
                                    echo $message;
                                    Session::put('message',null);
                                }
                            ?>
                            <div class="position-center">
                                <form role="form" action="{{ route('postdata') }}" method="post">
                                    {{csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên địa điểm</label>
                                    <input type="text" name="txt_diadiem" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Vị trí </label>
                                    <input type="text" name="txt_vitri" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh</label>
                                    <input type="text" name="txt_hinhanh" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thông tin</label>
                                    <input type="text" name="txt_thongtin" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Đánh giá</label>
                                    <textarea style="resize: none" rows="7" type="text" name="txt_danhgia" class="form-control" id="exampleInputPassword1" placeholder="Mô tả thể loại"></textarea>
                                </div>

                                <button type="submit" name="add_category_product" class="btn btn-info">Thêm địa điểm</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection