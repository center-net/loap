@extends('layouts.app')

@section('title')
    {{__('Users')}}
@endsection

@section('breadcrumb')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
            <i class="fa fa-user-circle"></i>
            {{__('Users')}}
          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">{{__('Home')}}</a></li>
            <li class="breadcrumb-item active"><a href="#">{{__('Users')}}</a></li>
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
        {{__('Users Table')}}
      </h3>
      @can('create_user')
        <a href="#" class="btn btn-primary btn-sm float-right">
          <i class="fa fa-plus"></i> {{ __('Create') }}
        </a>
      @endcan
    </div>
    <!-- /.card-header -->
    <div class="card-body">
       <div class="col-lg-12 table-responsive">
          <table id="reports_table" class="table table-striped table-hover table-bordered"  width="100%">
            <thead>
            <tr>
              <th width="10px">#</th>
              <th>{{__('Name')}}</th>
              <th>{{__('Email')}}</th>
              <th>{{__('Roles')}}</th>
              <th width="150px">{{__('Action')}}</th>
            </tr>
            </thead>
            <tbody>
              <tr>
                <th width="10px">#</th>
                <th>{{__('Name')}}</th>
                <th>{{__('Email')}}</th>
                <th>{{__('Roles')}}</th>
                <th width="150px">{{__('Action')}}</th>
              </tr>
            </tbody>
          </table>
       </div>
    </div>
    <!-- /.card-body -->
  </div>

@endsection
