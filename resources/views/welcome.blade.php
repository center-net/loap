@extends('layouts.site')

@section('content')
    

					<span class="data-contact d-flex align-items-center  " style="justify-content: center;">
						<img src="{{asset($setting->logo)}}" width="25%">

					</span>
                    <span class="data-contact d-flex align-items-center title_block"style="justify-content: center;">
                        {{$setting->translate(app()->getLocale())->title}}
					</span>
                    <span class="data-contact d-flex align-items-center"style="justify-content: center;">
                        {{$setting->translate(app()->getLocale())->content}}
					</span>
					@include('partials.admin.validation_errors')

					@yield('content')

					<div class="container-login100-form-btn">

					</div>

					@endsection
