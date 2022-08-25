@extends('layout-2')
@section('content-2') 
<div class="row">
	<div class="span12">
    <ul class="breadcrumb">
		<li><a href="index.html">Trang chủ</a> <span class="divider">/</span></li>
		<li class="active">Thanh toán</li>
    </ul>
	<div class="well well-small">
		<h1>Thanh Toán <small class="pull-right"> Có 2 sản phẩm trong giỏ hàng </small></h1>
	<hr class="soften"/>	

	<table class="table table-bordered table-condensed">
              <thead>
                <tr>
                  <th>Sản phẩm</th>
                  <th>Thông tin</th>
				  <th>	Ref. </th>
                  <th>Có sẵn</th>
                  <th>Đơn giá</th>
                  <th>Số lượng </th>
                  <th>Tổng cộng</th>
				</tr>
              </thead>
              <tbody>
                <tr>
                  <td><img width="100" src="{{('public/frontend/img/San_Pham/BaChiBo.jpg')}}" alt=""></td>
                  <td>Ba chỉ bò Úc đông lạnh</td>
                  <td> - </td>
                  <td><span class="shopBtn"><span class="icon-ok"></span></span> </td>
                  <td>82.000₫</td>
                  <td>
					<input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text" value="2">
				  <div class="input-append">
					<button class="btn btn-mini" type="button">-</button><button class="btn btn-mini" type="button"> + </button><button class="btn btn-mini btn-danger" type="button"><span class="icon-remove"></span></button>
				</div>
				</td>
                  <td>164.000₫</td>
                </tr>
				<tr>
                  <td><img width="100" src="{{('public/frontend/img/San_Pham/BongCai.jpg')}}" alt=""></td>
                  <td>Bông cải xanh</td>
                  <td> - </td>
                  <td><span class="shopBtn"><span class="icon-ok"></span></span> </td>
                  <td>21.000₫</td>
                  <td>
				  <input class="span1" style="max-width:34px" placeholder="1" size="16" type="text">
				  <div class="input-append">
					<button class="btn btn-mini" type="button">-</button><button class="btn btn-mini" type="button">+</button><button class="btn btn-mini btn-danger" type="button"><span class="icon-remove"></span></button>
				</div>
				  </td>
                  <td>21.000₫</td>
                </tr>
                
				 <tr>
                  <td colspan="6" class="alignR">Tổng số sản phẩm:	</td>
                  <td class="label label-primary"> 185.000₫</td>
                </tr>
				</tbody>
            </table><br/>
		
		
            <table class="table table-bordered">
			<tbody>
				 <tr>
                  <td> 
				<form class="form-inline">
				  <label style="min-width:159px"> MÃ GIẢM GIÁ: </label> 
				<input type="text" class="input-medium" placeholder="Mã">
				<button type="submit" class="shopBtn"> Xác nhận</button>
				</form>
				</td>
                </tr>
				
			</tbody>
				</table>
			
	<a href="products.html" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>
	<a href="login.html" class="shopBtn btn-large pull-right">Next <span class="icon-arrow-right"></span></a>

</div>
</div>
</div>
@endsection