@extends('layout')
@section('content') 
<div class="span9">
    <ul class="breadcrumb">
    <li><a href="index.html">Trang chính</a> <span class="divider">/</span></li>
    <li><a href="products.html">Sản phẩm</a> <span class="divider">/</span></li>
    <li class="active">Chi tiết sản phẩm</li>
    </ul>	
	<div class="well well-small">
	<div class="row-fluid">
			<div class="span5">
			<div id="myCarousel" class="carousel slide cntr">
                <div class="carousel-inner">
                  <div class="item active">
                   <a href="#"> <img src="{{('public/frontend/img/San_Pham/UcGa.jpg')}}" alt="" style="width:100%"></a>
                  </div>
                  <div class="item">
                     <a href="#"> <img src="{{('public/frontend/img/San_Pham/UcGa2.jpg')}}" alt="" style="width:100%"></a>
                  </div>
                  <div class="item">
                    <a href="#"> <img src="{{('public/frontend/img/San_Pham/UcGa3.jpg')}}" alt="" style="width:100%"></a>
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
            </div>
			</div>
			<div class="span7">
				<h3>NỨc gà tươi phi lê khay 500g (1-3 miếng) 43.500₫</h3>
				<hr class="soft"/>
				
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label"><span>43.000₫</span></label>
					<div class="controls">
					<input type="number" class="span6" placeholder="SL.">
					</div>
				
				  
				  </div>
				  <h4>Số lượng còn: 178</h4>
				  <p>Ức gà tươi phi lê CP đạt các tiêu chuẩn về an toàn thực phẩm, đảm bảo về chất lượng, 
                      độ tươi và ngon, xuất xứ rõ ràng, được 
                      dùng...
				  <p>
				  <button type="submit" class="shopBtn"><span class=" icon-shopping-cart"></span>Thêm vào giỏ hàng</button>
				</form>
			</div>
			</div>
				<hr class="softn clr"/>


            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Thông Tin Sản Phẩm</a></li>
              <li class=""><a href="#profile" data-toggle="tab">Sản Phẩm Liên Quan </a></li>
            </ul>
            <div id="myTabContent" class="tab-content tabWrapper">
            <div class="tab-pane fade active in" id="home">
			  <h4>Thông Tin</h4>
                <table class="table table-striped">
				<tbody>
				<tr class="techSpecRow"><td class="techSpecTD1">Thương hiệu:</td><td class="techSpecTD2">CP</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Loại sản phẩm:</td><td class="techSpecTD2">Ức gà tươi phi lê</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Nơi sản xuất:</td><td class="techSpecTD2">Việt Nam</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Hướng dẫn sử dụng:</td><td class="techSpecTD2">Nấu chính trước khi sử dụng</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Bảo quản:</td><td class="techSpecTD2">Thời hạn sử dụng 4 ngày kể từ ngày sản xuất
                    , bảo quản ở nhiệt độ 0 - 4 độ C</td></tr>
		
				</tbody>
				</table>
				<p>Thịt gà là một trong những thực phẩm được tiêu thụ thường xuyên trong đời sống hằng ngày. Trong đó, phần thịt được sử dụng nhiều trong chế độ ăn uống khoa học đó là ức gà. Ức gà phi lê CP là sản phẩm được sản xuất chọn lọc từ những con gà khoẻ mạnh trên dây chuyền nuôi hiện đại, được kiểm soát chặt chẽ theo nguyên tắc chuỗi khép kín “Thức ăn chăn nuôi - Trang trại chăn nuôi – Nhà máy chế biến thực phẩm”.</p>
				<p>Thịt gà CP Thịt gà CP đạt các tiêu chuẩn về an toàn thực phẩm:</p>
				<p>- GMP</p>
				<p>- HACCP</p>
                <p>- ISO 22000</p>
                <p>- ISO 9001</p>
                <p>- ISO 14001</p>
                <p>Thịt gà CP cam kết</p>
                <p>- Không chất tăng trọng.</p>
                <p>- Hệ thống chăn nuôi khép kín.</p>
                <p>- Sử dụng thức ăn chất lượng cao.</p>
                <p>- Truy xuất được nguồn gốc.</p>

			</div>
			<div class="tab-pane fade" id="profile">
			<div class="row-fluid">	  
			<div class="span2">
				<img src="{{('public/frontend/img/San_Pham/UcGa4.jpg')}}" alt="">
			</div>
			<div class="span6">
				<h5>Ức gà có xương túi 500g (1-2 miếng) </h5>
				<p>
				Ức gà có xương của Bách Hóa Xanh được đóng gói và bảo quản theo những tiêu chuẩn nghiêm ngặt 
                về vệ sinh và an toàn thực phẩm, đảm bảo về chất lượng, độ tươi và ngon của thực phẩm, xuất xứ rõ ràng...
				</p>
			</div>
			<div class="span4 alignR">
			<form class="form-horizontal qtyFrm">
			<h3> 30.000₫</h3>
			<br>
			<div class="btn-group">
			  <a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Thêm vào</a>
			  <a href="product_details.html" class="shopBtn"> Xem </a>
			 </div>
				</form>
			</div>
		</div>
			<hr class="soft">
			<div class="row-fluid">	  
			<div class="span2">
				<img src="{{('public/frontend/img/San_Pham/UcGa5.jpg')}}" alt="">
			</div>
			<div class="span6">
				<h5>Ức gà xông khói Angst Trường Vinh gói 200g </h5>
				<p>
				Là loại thịt nguội được yêu thích bởi hương vị đậm đà, thơm 
                ngon đến từ thương hiệu thịt nguội Angst Trường Vinh. Ức gà xông khói...
			</div>
			<div class="span4 alignR">
			<form class="form-horizontal qtyFrm">
			<h3> 75.000₫</h3>
			<br>
			<div class="btn-group">
			  <a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Thêm vào</a>
			  <a href="product_details.html" class="shopBtn"> Xem </a>
			 </div>
				</form>
			</div>
	</div>
			<hr class="soft"/>
			<div class="row-fluid">	  
			<div class="span2">
				<img src="{{('public/frontend/img/San_Pham/UcGa6.jpg')}}" alt="">
			</div>
			<div class="span6">
				<h5>Ức gà phi lê có da túi 500g (1-3 miếng) </h5>
				<p>
				Ức gà phi lê có da của Bách Hóa Xanh được đóng gói
                 và bảo quản theo những tiêu chuẩn nghiêm ngặt về vệ sinh và an toàn thực phẩm, đảm bảo...
				</p>
			</div>
			<div class="span4 alignR">
			<form class="form-horizontal qtyFrm">
			<h3> 40.000₫</h3>
			<br>
			<div class="btn-group">
			  <a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Thêm vào</a>
			  <a href="product_details.html" class="shopBtn"> Xem </a>
			 </div>
				</form>
			</div>
	</div>
			<hr class="soft"/>
			<div class="row-fluid">	  
					<div class="span2">
						<img src="{{('public/frontend/img/San_Pham/UcGa7.jpg')}}" alt="">
					</div>
					<div class="span6">
				<h5>Ức gà có xương nhập khẩu túi 500g (1-3 miếng) </h5>
				<p>
				Ức gà có xương của Bách Hóa Xanh được đóng gói và bảo quản theo những 
                tiêu chuẩn nghiêm ngặt về vệ sinh và an toàn thực phẩm, đảm bảo ...
				</p>
			</div>
			<div class="span4 alignR">
			<form class="form-horizontal qtyFrm">
			<h3> TẠM HẾT HÀNG</h3>
			<br>
			<div class="btn-group">
			  <a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Thêm vào</a>
			  <a href="product_details.html" class="shopBtn"> Xem </a>
					 </div>
						</form>
					</div>
			</div>
			<hr class="soften"/>
</div>
@endsection