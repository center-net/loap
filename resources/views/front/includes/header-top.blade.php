<div class="header-top hidden-sm-down">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="header-top-left col-lg-6 col-md-6 d-flex justify-content-start align-items-center">
                    <div class="detail-email d-flex align-items-center justify-content-center">
                        <div class="data-contact d-flex align-items-center">
                            <div class="title-icon"><img src="{{asset($setting->logo)}}" width="70"></div>
                            <div class="content-data-contact">
                                <div class="support title_block">{{$setting->translate(app()->getLocale())->title}}</div>
                                <div class="phone-support">
                                    {{$setting->translate(app()->getLocale())->phone}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex justify-content-end align-items-center header-top-right">
                    <div class="register-out">
                        <i class="zmdi zmdi-account"></i>
                        <a class="register" href="#" data-link-action="display-register-form">
                            {{__(app()->getLocale().'.Register')}}
                        </a>
                        <span class="or-text">or</span>
                        <a class="login" href="#" rel="nofollow" title="{{__(app()->getLocale().'.Login')}}">{{__(app()->getLocale().'.Login')}}</a>
                    </div>
                  




                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_currencyselector/ps_currencyselector.tpl -->
                    <!-- end module:ps_currencyselector/ps_currencyselector.tpl -->

                    <!-- begin module:ps_languageselector/ps_languageselector.tpl -->
                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_languageselector/ps_languageselector.tpl --><div id="_desktop_language_selector" class="language-selector groups-selector hidden-sm-down language-selector-dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="main">
                            <span class="expand-more"><i class="fa fa-globe"></i>	{{ LaravelLocalization::getCurrentLocaleNative()}}</span>
                        </div>
                        <div class="language-list dropdown-menu">
                            <div class="language-list-content text-left">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    @if(LaravelLocalization::setLocale()!=$localeCode) 
                                        <div class="language-item current flex-first">
                                            <div  class="current"  >
                                                <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" hreflang="{{ $localeCode }}">
                                                    <i class="fa fa-globe"></i>
                                                    <span>{{ $properties['native'] }}</span>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_languageselector/ps_languageselector.tpl -->
                    <!-- end module:ps_languageselector/ps_languageselector.tpl -->

                </div>
            </div>
        </div>
    </div>
</div>
