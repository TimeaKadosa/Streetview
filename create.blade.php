@extends('layouts.master')

@section('content-header')
    <h1>
        {{ trans('webshop::webshops.title.create webshop') }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ URL::route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li><a href="{{ URL::route('admin.webshop.webshop.index') }}">{{ trans('webshop::webshops.title.webshops') }}</a></li>
        <li class="active">{{ trans('webshop::webshops.title.create webshop') }}</li>
    </ol>
@stop

@section('styles')
    {!! Theme::style('css/vendor/iCheck/flat/blue.css') !!}
    {!! Theme::style('css/vendor/bootstrap-slider/slider.css') !!}
@stop

@section('content')
    {!! Form::open(['route' => ['admin.webshop.webshop.store'], 'method' => 'post']) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                @include('partials.form-tab-headers')
                <div class="tab-content">
                    <?php $i = 0; ?>
                    <?php foreach (LaravelLocalization::getSupportedLocales() as $locale => $language): ?>
                    <?php $i++; ?>
                    <div class="tab-pane {{ App::getLocale() == $locale ? 'active' : '' }}" id="tab_{{ $i }}">
                        @include('webshop::admin.webshops.partials.create-fields', ['lang' => $locale])
                    </div>
                    <?php endforeach; ?>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-flat">{{ trans('core::core.button.create') }}</button>
                        <a class="btn btn-danger pull-right btn-flat" href="{{ URL::route('admin.webshop.webshop.index')}}"><i class="fa fa-times"></i> {{ trans('core::core.button.cancel') }}</a>
                    </div>
                </div>
            </div> {{-- end nav-tabs-custom --}}
        </div>
    {!! Form::close() !!}
    </div>
@stop

@section('footer')
    <a data-toggle="modal" data-target="#keyboardShortcutsModal"><i class="fa fa-keyboard-o"></i></a> &nbsp;
@stop
@section('shortcuts')
    <dl class="dl-horizontal">
        <dt><code>b</code></dt>
        <dd>{{ trans('core::core.back to index') }}</dd>
    </dl>
@stop

@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9pYRU7vlW4-uSwKH9KzlZatUfRfjR5SM"></script>
    {!! Theme::script('js/vendor/ckeditor/ckeditor.js') !!}
    {!! Theme::script('js/vendor/bootstrap-slider/bootstrap-slider.js') !!}

    @include('webshop::admin.webshops.partials.scripts')
@stop
