@extends('layouts.admin')

@section('title')
    {{__(app()->getLocale().'.Settings')}}
@endsection

@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-user-circle"></i>
                        {{__(app()->getLocale().'.Settings')}}
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{__(app()->getLocale().'.Home')}}</a></li>
                        <li class="breadcrumb-item active"><a href="#">{{__(app()->getLocale().'.Settings')}}</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection


@section('content')

    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">
                {{__(app()->getLocale().'.Settings')}}
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="col-lg-12 table-responsive">

                <form action="{{Route('admin.settings.update' , $setting)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-md-6">
                        <label>{{__(app()->getLocale().'.Logo') }}</label>
                        <img src="{{asset($setting->logo)}}" alt="" style="height: 50px">
                    </div>
                    <div class="form-group col-md-6">
                        <label>{{__(app()->getLocale().'.Favicon') }}</label>
                        <img src="{{asset($setting->favicon)}}" alt="" style="height: 50px">
                    </div>
                    <div class="form-group col-md-6">
                        <label>{{__(app()->getLocale().'.Logo') }}</label>
                        <input type="file" name="logo" class="form-control" placeholder="Enter Email..">
                    </div>
                    <div class="form-group col-md-6">
                        <label>{{__(app()->getLocale().'.favicon') }}</label>
                        <input type="file" name="favicon" class="form-control"
                               placeholder="{{__(app()->getLocale().'.Favicon') }}" >
                    </div>
                    <div class="form-group col-md-6">
                        <label>{{__(app()->getLocale().'.Facebook') }}</label>
                        <input  type="text" name="facebook" class="form-control"
                                placeholder="{{__(app()->getLocale().'.Facebook') }}" value="{{$setting->facebook}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>{{__(app()->getLocale().'.Instagram') }}</label>
                        <input  type="text" name="instagram" class="form-control"
                                placeholder="{{__(app()->getLocale().'.Instagram') }}" value="{{$setting->instagram}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>{{__(app()->getLocale().'.Phone') }}</label>
                        <input type="text" name="phone" class="form-control"
                               placeholder="{{__(app()->getLocale().'.Phone') }}" value="{{$setting->phone}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>{{__(app()->getLocale().'.Email') }}</label>
                        <input type="text" name="email" class="form-control"
                               placeholder="{{__(app()->getLocale().'.Email') }}" value="{{$setting->email}}">
                    </div>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li class="nav-item">
                                <a class="nav-link @if ($loop->index == 0) active @endif"
                                   id="home-tab" data-toggle="tab" href="#{{ $properties['native'] }}" role="tab"
                                   aria-controls="home" aria-selected="true">{{ $properties['native'] }}</a>
                            </li>


                        @endforeach

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <div class="tab-pane mt-3 fade @if ($loop->index == 0) show active in @endif"
                                 id="{{ $properties['native'] }}" role="tabpanel" aria-labelledby="home-tab">
                                <br>
                                <div class="form-group mt-3 col-md-12">
                                    <label>{{__(app()->getLocale().'.Title') }} - {{ $properties['native'] }}</label>
                                    <input type="text" name="{{$localeCode}}[title]" class="form-control"
                                           placeholder="{{__(app()->getLocale().'.Title') }}"   value="{{$setting->translate($localeCode)->title}}">
                                </div>

                                <div class="form-group col-md-12">
                                    <label>{{__(app()->getLocale().'.Content') }} - {{ $properties['native'] }}</label>
                                    <textarea name="{{$localeCode}}[content]" class="form-control" cols="30" rows="10">{{$setting->translate($localeCode)->content}}</textarea>
                                </div>


                                <div class="form-group col-md-12">
                                    <label>{{__(app()->getLocale().'.Address') }} - {{ $properties['native'] }}</label>
                                    <input type="text"name="{{$localeCode}}[address]" class="form-control"   value="{{$setting->translate($localeCode)->address}}">
                                </div>
                            </div>
                        @endforeach

                    </div>



            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>
                Submit</button>
            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i>
                Reset</button>
        </div>
        <!-- /.card-body -->
    </div>
    </form>
@endsection
