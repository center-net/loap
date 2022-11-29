@extends('layouts.app')

@section('title')
    {{__(app()->getLocale().'.Users')}}
@endsection

@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-user-circle"></i>
                        {{__(app()->getLocale().'.Users')}}
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{__(app()->getLocale().'.Home')}}</a></li>
                        <li class="breadcrumb-item active"><a href="#">{{__(app()->getLocale().'.Users')}}</a></li>
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
                {{__(app()->getLocale().'.Users Table')}}
            </h3>
            <a href="#" class="btn btn-primary btn-sm float-right">
                <i class="fa fa-plus"></i> {{__(app()->getLocale().'.Create') }}
            </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="col-lg-12 table-responsive">
                <table id="reports_table" class="table table-striped table-hover table-bordered"  width="100%">
                    <thead>
                    <tr>
                        <th width="10px">#</th>
                        <th>{{__(app()->getLocale().'.Name')}}</th>
                        <th>{{__(app()->getLocale().'.Email')}}</th>
                        <th>{{__(app()->getLocale().'.Roles')}}</th>
                        <th width="150px">{{__(app()->getLocale().'.Action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th width="10px">#</th>
                        <th>{{__(app()->getLocale().'.Name')}}</th>
                        <th>{{__(app()->getLocale().'.Email')}}</th>
                        <th>{{__(app()->getLocale().'.Roles')}}</th>
                        <th width="150px">
{{--                            @can('edit_user')--}}
                                <a href="#" class="btn btn-primary btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
{{--                            @endcan--}}

{{--                            @can('delete_user')--}}
                                <form method="POST" action="#"  class="d-inline">
                                    <input type="hidden" name="_method" value="delete">
                                    <button type="submit" class="btn btn-danger btn-sm delete_user">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
{{--                            @endcan--}}
                        </th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
    </div>

@endsection
