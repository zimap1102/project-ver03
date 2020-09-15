@extends('layout')

@section('content')


	<section class="section-banner">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Trang chủ</a></li>
                <li><a href="#">BASE64</a></li>
				<li class="active">Encode</li>
			</ul>
		</div>
	</section><!-- /section-banner -->

	<section class="section-compact">
		<div class="container">
			<header class="heading-3 page-heading">
				<h4>ENCODE</h4>
			</header>
			
			<div class="form-main-container">
				<form class="checkout-form" method="post" action="{{asset('barcode/DNS2D/PDF417/encode')}}">
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
							<!-- <input type="text" name="aha"> -->
							<div class="col-md-12"> 
								<p style="text-align: center;" >Nhập thông tin cần mã hóa</p>
								<textarea name="string_en"  id="" cols="30" rows="10" class="form-control " style="resize: none;background-color:#f5f5f5;">@if(!empty(session('value_en'))){{session('value_en')}} @endif</textarea>
								<button type="submit" class="btn btn-primary" style="margin-top:30px;">Mã hóa</button>
							</div>
						</div>

                        <div class="col-sm-6 form-block">
							<div class="form-group row">
								<label class="col-md-1 label-md"> </label>
								<div class="col-md-11">
	                                <p style="text-align: center;">Kết quả mong đợi</p>
	                                <div align="center">
		                              		@if(!empty(session('value_en')))
		                                    	{!! DNS2D::getBarcodeHTML(session('value_en'),'PDF417', $w = 3, $h = 2, $color = 'black') !!}   
		                                    @endif
										<p align="center">{{session('value_en')}}</p>
									</div>
							    </div>
							</div>	
						</div>
						<div class="col-sm-6 form-block">
							<!-- <button type="submit" class="btn btn-primary">Mã hóa</button> -->
						</div>
					</div>
					
					<hr>
				</form>
			</div>
		</div>
	</section>

@endsection