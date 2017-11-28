@extends('main_layout')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('base::breadcrumb.dashboard')</div>
                <div class="panel-body">
                    @include('base::alert_error_success')
                    Bienvenido!
                </div>
            </div>
        </div>
    </div>
@endsection
