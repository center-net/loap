
<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{$setting->translate(app()->getLocale())->title}} | @yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset($setting->favicon)}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/main.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{ url('css/toastr.min.css')}}">
<!--===============================================================================================-->
@if(app()->getLocale() == 'ar')
	<link rel="stylesheet" href="{{ url('css/auth-rtl.css')}}">
@endif
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{url('plugins/jquery-ui/jquery-ui.min.css')}}">
<link rel="apple-touch-icon" sizes="57x57" href="{{asset($setting->favicon)}}">
<link rel="apple-touch-icon" sizes="60x60" href="{{asset($setting->favicon)}}">
<link rel="apple-touch-icon" sizes="72x72" href="{{asset($setting->favicon)}}">
<link rel="apple-touch-icon" sizes="76x76" href="{{asset($setting->favicon)}}">
<link rel="apple-touch-icon" sizes="114x114" href="{{asset($setting->favicon)}}>
<link rel="apple-touch-icon" sizes="120x120" href="{{asset($setting->favicon)}}">
<link rel="apple-touch-icon" sizes="144x144" href="{{asset($setting->favicon)}}">
<link rel="apple-touch-icon" sizes="152x152" href="{{asset($setting->favicon)}}">
<link rel="apple-touch-icon" sizes="180x180" href="{{asset($setting->favicon)}}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{asset($setting->favicon)}}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset($setting->favicon)}}">
<link rel="icon" type="image/png" sizes="96x96" href="{{asset($setting->favicon)}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset($setting->favicon)}}">
<link rel="manifest" href="{{url('img/manifest.json')}}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{asset($setting->logo)}}">
	<meta name="theme-color" content="#ffffff">
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-more" style="background-image: url('{{asset($setting->logo)}}');">
				</div>

				<div class="login100-form">

					<div class="container-login100-form-btn mb-4">
						<div class="dropdown text-uppercase">
							<button class="btn btn-default dropdown-toggle text-uppercase" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-globe"></i>	{{ LaravelLocalization::getCurrentLocaleNative()}}
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    @if(LaravelLocalization::setLocale()!=$localeCode) <a class="dropdown-item"   hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a> @endif
                                @endforeach
							</div>
						</div>
					</div>


					<span class="login100-form-title p-b-30">
						<img src="{{asset($setting->logo)}}" height="100">
					</span>

					@include('partials.admin.validation_errors')

					@yield('content')

					<div class="container-login100-form-btn">

{{--						@include('partials.socials')--}}
					</div>

				</div>

			</div>
		</div>
	</div>

	<!-- jQuery -->
    <script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
	<script src="{{url('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
	<script src="{{url('assets/vendor/bootstrap/js/popper.min.js')}}"></script>
	<script src="{{url('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

	@yield('scripts')

</body>
</html>
