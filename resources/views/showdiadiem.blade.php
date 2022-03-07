@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh mục điểm đến
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        
        </select>            
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
        </div>
      </div>
    </div>
    <div class="table-responsive">
        <?php
                                $message = Session::get('message');
                                if ($message) {
                                    echo $message;
                                    Session::put('message',null);
                                }
                            ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
              </label>
            </th>
            <th>Tên điểm đến</th>
            <th>Vị trí</th>
            <th>Hình ảnh </th>
            <th>Thông tin </th>
            <th>Đánh giá </th>
            <th>Tùy chọn </th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        @foreach ($getdiadiem as $item)
        <tbody>
          <tr>
            <td><label class="i-checks m-b-none"><i> {{ $item ->ten }}</i></label></td>
            <td></td>
            <td><span class="text-ellipsis">{{ $item ->vitri }}</span></td>
            <td><span class="text-ellipsis"> <img src="{{$item->hinhanh }}" width="350px" height="200px"></span></td>
            <td><span class="text-ellipsis">{{ $item ->thongtin }}</span></td>
            <td><span class="text-ellipsis">{{ $item ->danhgia }}</span></td>
            <td>
              <a href="{{ URL::to('/editdiadiem'.'/'.$item->id)}}" class="active styling-edit" ui-toggle-class="">
              <i class="fa fa-pencil-square-o text-active"></i>
              <a onclick="return confirm('Xác nhận xóa!')" href="{{ URL::to('/delete'.'/'.$item->id)}}"  class="active styling-edit" ui-toggle-class="">
              <i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection