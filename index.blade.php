@extends('layouts.master')

@section('content-header')
    <h1>
        {{ trans('webshop::webshops.title.webshops') }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ URL::route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li class="active">{{ trans('webshop::webshops.title.webshops') }}</li>
    </ol>
@stop

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="btn-group pull-right" style="margin: 0 15px 15px 0;">
                    <a href="{{ URL::route('admin.webshop.webshop.create') }}" class="btn btn-primary btn-flat" style="padding: 4px 10px;">
                        <i class="fa fa-pencil"></i> {{ trans('webshop::webshops.button.create webshop') }}
                    </a>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="data-table table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>{{ trans('Webshop name') }}</th>
                            <th>{{ trans('Webshop URL') }}</th>
                            <th>{{ trans('Slug') }}</th>
                            <th>{{ trans('core::core.table.created at') }}</th>
                            <th>{{ trans('core::core.table.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (isset($webshops)): ?>
                        <?php foreach ($webshops as $webshop): ?>
                        <tr>

                            <td>
                                <a href="{{ URL::route('admin.webshop.webshop.edit', [$webshop->id]) }}">
                                    {{ $webshop->title }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ URL::route('admin.webshop.webshop.edit', [$webshop->id]) }}">
                                    {{ $webshop->webshopUrl }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ URL::route('admin.webshop.webshop.edit', [$webshop->id]) }}">
                                    {{ $webshop->slug }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ URL::route('admin.webshop.webshop.edit', [$webshop->id]) }}">
                                    {{ $webshop->created_at }}
                                </a>
                            </td>

                            <td>
                                <div class="btn-group">
                                    <a href="{{ URL::route('admin.webshop.webshop.edit', [$webshop->id]) }}" class="btn btn-default btn-flat"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <button class="btn btn-danger btn-flat" data-toggle="modal" data-target="#confirmation-{{ $webshop->id }}"><i class="glyphicon glyphicon-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>{{ trans('Webshop name') }}</th>
                            <th>{{ trans('Webshop URL') }}</th>
                            <th>{{ trans('Slug') }}</th>
                            <th>{{ trans('core::core.table.created at') }}</th>
                            <th>{{ trans('core::core.table.actions') }}</th>
                        </tr>
                        </tfoot>
                    </table>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
    <?php if (isset($webshops)): ?>
    <?php foreach ($webshops as $webshop): ?>
    <!-- Modal -->
    <div class="modal fade modal-danger" id="confirmation-{{ $webshop->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{ trans('core::core.modal.title') }}</h4>
                </div>
                <div class="modal-body">
                    {{ trans('core::core.modal.confirmation-message') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline btn-flat" data-dismiss="modal">{{ trans('core::core.button.cancel') }}</button>
                    {!! Form::open(['route' => ['admin.webshop.webshop.destroy', $webshop->id], 'method' => 'delete', 'class' => 'pull-left']) !!}
                    <button type="submit" class="btn btn-outline btn-flat"><i class="glyphicon glyphicon-trash"></i> {{ trans('core::core.button.delete') }}</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
@stop

@section('footer')
    <a data-toggle="modal" data-target="#keyboardShortcutsModal"><i class="fa fa-keyboard-o"></i></a> &nbsp;
@stop
@section('shortcuts')
    <dl class="dl-horizontal">
        <dt><code>c</code></dt>
        <dd>{{ trans('webshop::webshops.title.create webshop') }}</dd>
    </dl>
@stop

@section('scripts')
    <script type="text/javascript">
        $( document ).ready(function() {
            $(document).keypressAction({
                actions: [
                    { key: 'c', route: "<?= route('admin.webshop.webshop.create') ?>" }
                ]
            });
        });
    </script>
    <?php $locale = App::getLocale(); ?>
    <script type="text/javascript">
        $(function () {
            $('.data-table').dataTable({
                "paginate": true,
                "lengthChange": true,
                "filter": true,
                "sort": true,
                "info": true,
                "autoWidth": true,
                "order": [[ 0, "desc" ]],
                "language": {
                    "url": '<?php echo Module::asset("core:js/vendor/datatables/{$locale}.json") ?>'
                },
                "columns": [
                    null,
                    null,
                    { "sortable": false }
                ]
            });
        });
    </script>
@stop
