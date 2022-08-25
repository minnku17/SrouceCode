@extends('layout-2')
@section('content-2')
<hr class="soften">
	<div class="well well-small">
	<h1>Liên hệ với chúng tôi</h1>
	<hr class="soften"/>	
	<div class="row-fluid">
		<div class="span8 relative">

            <iframe style="width:100%; height:350px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1003454.1752305852!2d106.13468746428408!3d10.754289324231207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1639916955198!5m2!1svi!2s" ></iframe>
		<div class="absoluteBlk">
		<div class="well wellsmall">
		<h4>Chi Tiết Liên Hệ</h4>
		<h5>
			A12 Huyện Bình Chánh.<br/>
			TP Hồ Chính Minh<br/><br/>
			 
			1900006131@nttu.edu.vn<br/>
			﻿Tel 0794-755-206<br/>
			Fax 123-456-5679<br/>
			web:thucphamtuoisach.com
		</h5>
		</div>
		</div>
		</div>
		
		<div class="span4">
		<h4>Gửi mail cho chúng tôi</h4>
		<form class="form-horizontal">
        <fieldset>
          <div class="control-group">
           
              <input type="text" placeholder="Tên" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="Email" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="Chủ đề" class="input-xlarge"/>
          
          </div>
          <div class="control-group">
              <textarea rows="3" id="textarea" class="input-xlarge"></textarea>
           
          </div>

            <button class="shopBtn" type="submit">Gửi đi</button>

        </fieldset>
      </form>
		</div>
	</div>

	
</div>
@endsection