@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh Sách Truyện Tranh
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Mã Sản Phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Nội Dung</th>
            <th>Quản Lý</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach( $view_category_product as $key => $cate_pro)
          <tr>
            <td>{{$cate_pro -> category_id}}</td>
            <td>{{$cate_pro -> category_name}}</td>
            <td>{{$cate_pro -> category_describe}}</td>
            <td>
              <a href="{{URL::to('/SuaSP/'.$cate_pro->category_id)}}">Sửa</a>
              <a href="{{URL::to('/XoaSP/'.$cate_pro->category_id)}}">Xóa</a>
            </td>
          </tr>
          @endforeach
          <?php
          $message = Session::get('message');
          if ($message) {
            echo '<span style="width: 100%;
					                margin-left: 135px;padding-bottom: 30px;">' . $message . '</span>';
            Session::put('message', null);
          }
          ?>
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">

        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection