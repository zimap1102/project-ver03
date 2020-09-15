@extends('layout')

@section('content')


	<section class="section-banner">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Trang chủ</a></li>
                <li><a href="#">Base-64-URL</a></li>
				<li class="active">Decode</li>
			</ul>
		</div>
	</section><!-- /section-banner -->

	<section class="section-compact">
		<div class="container">
			<header class="heading-3 page-heading">
				<h4>DECODE</h4>
			</header>
			
			<div class="form-main-container">
				<form class="checkout-form" method="post" action="{{asset('base64-url/decode')}}">
				{{ csrf_field() }}  
					<div class="row">
					@if(!empty(session('mess')))
						<div class="alert alert-success" style=" text-align:center;" role="alert">
								{{session('mess')}}
						</div>
					@endif
					@if(!empty(session('bug')))
						<div class="alert alert-danger" style=" text-align:center;" role="alert">
								{{session('bug')}}
						</div>
					@endif
						<div class="col-sm-6 form-block">
							<div class="col-md-12"> 
								<p style="text-align: center;" >Nhập thông tin cần giải mã</p>
								<textarea spellcheck="false" name="string_encode" id="" cols="30" rows="10" class="form-control"  style="resize: none; background-color:#f5f5f5;">@if(!empty(session('value_encode'))){{session('value_encode')}} @endif</textarea>
								<button type="submit" class="btn btn-primary" style="margin-top:30px;">Giải mã</button>
							</div>
						</div>
						<div class="col-sm-6 form-block">
							<div class="col-md-12"> 
								<p style="text-align: center;" >Kết quả mong đợi</p>
								<textarea name="" id="" cols="30" rows="10" class="form-control" readonly style="resize: none;background-color:#f5f5f5;">@if(!empty(session('value_decode'))){{session('value_decode')}}@endif</textarea>
							</div>
						</div>						
					</div>
					<hr>
				</form>	
			</div>
		</div>
	</section>

@endsection