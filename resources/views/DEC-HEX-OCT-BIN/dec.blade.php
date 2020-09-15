@extends('layout')

@section('content')


	<section class="section-banner">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Trang chủ</a></li>
                <li><a class="active">DEC TO HEX-OCT-BIN</a></li>
			</ul>
		</div>
	</section><!-- /section-banner -->

	<section class="section-compact">
		<div class="container">
			<header class="heading-3 page-heading">
				<h4>DEC TO HEX-OCT-BIN</h4>
			</header>
			
			<div class="form-main-container">
				<form class="checkout-form" method="post" action="{{asset('dec')}}">
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
								<label>Decimal</label>
								<input type="text" name="dec"value="@if(!empty(session('dec'))) {{session('dec')}} @endif" class="form-control" placeholder="(base 10)">
								<button type="submit" class="btn btn-primary" style="margin-top:30px;">Chuyển</button>
							</div>
						</div>
						<div class="col-sm-6 form-block">
							<div class="col-md-12"> 
								<p style="text-align: center;" >Kết quả mong đợi</p>
								<label>Hexadecimal</label>
								<input readonly type="text"  value="@if(!empty(session('hex'))) {{session('hex')}} @endif" class="form-control" placeholder="(base 16)"> <br><br>
								<label>Octal</label>
								<input readonly type="text" value="@if(!empty(session('oct'))) {{session('oct')}} @endif" class="form-control" placeholder="(base 8)"><br><br>
								<label>Binary</label>
								<input readonly type="text"  value="@if(!empty(session('bin'))) {{session('bin')}} @endif" class="form-control" placeholder="(base 2)">
								
							</div>
						</div>						
					</div>
					<hr>
				</form>	
			</div>
		</div>
	</section>

@endsection