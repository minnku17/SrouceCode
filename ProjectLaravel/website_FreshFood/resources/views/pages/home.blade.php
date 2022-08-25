@extends('layout')
@section('content') 

<div class="span9">
	<div class="well np">
		<div id="myCarousel" class="carousel slide homCar">
            <div class="carousel-inner">
			  <div class="item">
                <img style="width:100%" src="{{('public/frontend/img/banner1.jpg')}}" alt="bootstrap ecommerce templates">
                
              </div>
			  <div class="item">
                <img style="width:100%" src="{{('public/frontend/img/B2.jpg')}}" alt="bootstrap ecommerce templates">
                
              </div>
			  <div class="item active">
                <img style="width:100%" src="{{('public/frontend/img/B3.jpg')}}" alt="bootstrap ecommerce templates">
                
              </div>
              <div class="item">
                <img style="width:100%" src="{{('public/frontend/img/B4.jpg')}}" alt="bootstrap templates">
                
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
        </div>
<!--
New Products
-->
	<div class="well well-small">
	<h3>Thực phẩm mới!!! </h3>
	<hr class="soften"/>
		<div class="row-fluid">
		<div id="newProductCar" class="carousel slide">
            <div class="carousel-inner">
			<div class="item active">
			  <ul class="thumbnails">
				<li class="span3">
				<div class="thumbnail">
					<a class="zoomTool" href="{{URL::to('/ChitietSP')}}" title="add to cart"><span class="icon-search"></span> Xem Nhanh</a>
					<a href="#" class="tag"></a>
					<a href="{{URL::to('/ChitietSP')}}"><img src="{{('public/frontend/img/Thit1.jpg')}}" alt="bootstrap-ring"></a>
				</div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a class="zoomTool" href="{{URL::to('/ChitietSP')}}" title="add to cart"><span class="icon-search"></span> Xem Nhanh</a>
					<a href="#" class="tag"></a>
					<a  href="{{URL::to('/ChitietSP')}}"><img src="{{('public/frontend/img/ThitHeo.jpg')}}" alt=""></a>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a class="zoomTool" href="{{URL::to('/ChitietSP')}}" title="add to cart"><span class="icon-search"></span> Xem Nhanh</a>
					<a href="#" class="tag"></a>
					<a  href="{{URL::to('/ChitietSP')}}"><img src="{{('public/frontend/img/bo-1-1.jpg')}}" alt=""></a>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a class="zoomTool" href="{{URL::to('/ChitietSP')}}" title="add to cart"><span class="icon-search"></span> Xem Nhanh</a>
					<a  href="{{URL::to('/ChitietSP')}}"><img src="{{('public/frontend/img/rau-1.jpg')}}" alt=""></a>
				  </div>
				</li>
			  </ul>
			  </div>
		   
		<div class="row-fluid">
		  <ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				 
				<a class="zoomTool" href="{{URL::to('/ChitietSP')}}" title="add to cart"><span class="icon-search"></span> Xem Nhanh</a>
				<a href="{{URL::to('/ChitietSP')}}"><img src="{{('public/frontend/img/San_Pham/UcGa.jpg')}}" alt=""></a>
				<div class="caption cntr">
					<p>Ức gà tươi</p>
					<p><strong> 43.000₫</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Thêm vào giỏ </a></h4>
					
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				 
				<a class="zoomTool" href="{{URL::to('/ChitietSP')}}" title="add to cart"><span class="icon-search"></span> Xem Nhanh</a>
				<a href="{{URL::to('/ChitietSP')}}"><img src="{{('public/frontend/img/San_Pham/CaSapa.jpg')}}" alt=""></a>
				<div class="caption cntr">
					<p>Cá saba đông lạnh</p>
					<p><strong> 34.500₫</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Thêm vào giỏ </a></h4>
					
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				 
				<a class="zoomTool" href="{{URL::to('/ChitietSP')}}" title="add to cart"><span class="icon-search"></span> Xem Nhanh</a>
				<a href="{{URL::to('/ChitietSP')}}"><img src="{{('public/frontend/img/San_Pham/Khoaitay.jpg')}}" alt=""></a>
				<div class="caption cntr">
					<p>Khoai tây túi</p>
					<p><strong> 15.000₫</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Thêm vào giỏ </a></h4>
					
					<br class="clr">
				</div>
			  </div>
			</li>
		  </ul>
		</div>
	</div>
	<!--
	Featured Products
	-->
		<div class="well well-small">
		  <h3><a class="btn btn-mini pull-right" href="products.html" title="View more">Xem thêm <span class="icon-plus"></span></a>
		   Sản Phẩm Bán Chạy</h3>
		   <hr class="soften"/>
		  <div class="row-fluid">
		  <ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="{{URL::to('/ChitietSP')}}" title="add to cart"><span class="icon-search"></span> Xem Nhanh</a>
				<a  href="{{URL::to('/ChitietSP')}}"><img src="{{('public/frontend/img/San_Pham/XoaiKeo.jpg')}}" alt=""></a>
				<div class="caption">
				  <h5>Xoài keo túi 1kg (2-4 trái)</h5>
				  <h4>
					  <a class="defaultBtn" href="{{URL::to('/ChitietSP')}}" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
					  <span class="pull-right">30.000₫</span>
				  </h4>
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="{{URL::to('/ChitietSP')}}" title="add to cart"><span class="icon-search"></span> Xem Nhanh</a>
				<a  href="{{URL::to('/ChitietSP')}}"><img src="{{('public/frontend/img/San_Pham/MucLa.jpg')}}" alt=""></a>
				<div class="caption">
				  <h5>Mực lá đại dương túi</h5>
				  <h4>
					  <a class="defaultBtn" href="{{URL::to('/ChitietSP')}}" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
					  <span class="pull-right">77.000₫</span>
				  </h4>
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="{{URL::to('/ChitietSP')}}" title="add to cart"><span class="icon-search"></span> Xem Nhanh</a>
				<a  href="{{URL::to('/ChitietSP')}}"><img src="{{('public/frontend/img/San_Pham/BaChiBo.jpg')}}" alt=""></a>
				<div class="caption">
				  <h5>Ba chỉ bò Úc đông lạnh</h5>
				  <h4>
					  <a class="defaultBtn" href="{{URL::to('/ChitietSP')}}" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
					  <span class="pull-right">82.000₫</span>
				  </h4>
				</div>
			  </div>
			</li>
		  </ul>	
	</div>
	</div>
	
	<div class="well well-small">
	<a class="btn btn-mini pull-right" href="#">Xem thêm <span class="icon-plus"></span></a>
	Nước uống phổ biến giảm giá
	<hr class="soften"/>
		  <div class="row-fluid">
		  <ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="{{URL::to('/ChitietSP')}}" title="add to cart"><span class="icon-search"></span> Xem Nhanh</a>
				<a  href="{{URL::to('/ChitietSP')}}"><img src="{{('public/frontend/img/San_Pham/OLong.jpg')}}" alt=""></a>
				<div class="caption">
				  <h5>6 chai trà ô long Tea Plus</h5>
				  <h4>
					  <a class="defaultBtn" href="{{URL::to('/ChitietSP')}}" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
					  <span class="pull-right">25.000₫</span>
				  </h4>
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="{{URL::to('/ChitietSP')}}" title="add to cart"><span class="icon-search"></span> Xem Nhanh</a>
				<a  href="{{URL::to('/ChitietSP')}}"><img src="{{('public/frontend/img/San_Pham/Sprite.jpg')}}" alt=""></a>
				<div class="caption">
				  <h5>6 chai nước ngọt Sprite</h5>
				  <h4>
					  <a class="defaultBtn" href="{{URL::to('/ChitietSP')}}" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
					  <span class="pull-right">30.000₫</span>
				  </h4>
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="{{URL::to('/ChitietSP')}}" title="add to cart"><span class="icon-search"></span> Xem Nhanh</a>
				<a  href="{{URL::to('/ChitietSP')}}"><img src="{{('public/frontend/img/San_Pham/Coca.jpg')}}" alt=""></a>
				<div class="caption">
				  <h5>Nước ngọt Coca Cola</h5>
				  <h4>
					  <a class="defaultBtn" href="{{URL::to('/ChitietSP')}}" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
					  <span class="pull-right">22.000₫</span>
				  </h4>
				</div>
			  </div>
			</li>
		  </ul>	
	</div>
	</div>
	<hr>
	<div class="well well-small">
	<a class="btn btn-mini pull-right" href="#">Xem thêm <span class="icon-plus"></span></a>
	Mì, Cháo, Phở, Bún
	<hr class="soften"/>
		  <div class="row-fluid">
		  <ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="{{URL::to('/ChitietSP')}}" title="add to cart"><span class="icon-search"></span> Xem Nhanh</a>
				<a  href="{{URL::to('/ChitietSP')}}"><img src="{{('public/frontend/img/San_Pham/MiHao.jpg')}}" alt=""></a>
				<div class="caption">
				  <h5>Thùng 30 gói mì Hảo Hảo</h5>
				  <h4>
					  <a class="defaultBtn" href="{{URL::to('/ChitietSP')}}" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
					  <span class="pull-right">95.000₫</span>
				  </h4>
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="{{URL::to('/ChitietSP')}}" title="add to cart"><span class="icon-search"></span> Xem Nhanh</a>
				<a  href="{{URL::to('/ChitietSP')}}"><img src="{{('public/frontend/img/San_Pham/BanhGao.jpg')}}" alt=""></a>
				<div class="caption">
				  <h5>Bánh gạo topokki</h5>
				  <h4>
					  <a class="defaultBtn" href="{{URL::to('/ChitietSP')}}" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
					  <span class="pull-right">26.500₫</span>
				  </h4>
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="{{URL::to('/ChitietSP')}}" title="add to cart"><span class="icon-search"></span> Xem Nhanh</a>
				<a  href="{{URL::to('/ChitietSP')}}"><img src="{{('public/frontend/img/San_Pham/Mi3Mien.jpg')}}" alt=""></a>
				<div class="caption">
				  <h5>Thùng 30 gói mì bò</h5>
				  <h4>
					  <a class="defaultBtn" href="{{URL::to('/ChitietSP')}}" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
					  <span class="pull-right">86.500₫</span>
				  </h4>
				</div>
			  </div>
			</li>
		  </ul>	
	
	</div>
	</div>
@endsection
