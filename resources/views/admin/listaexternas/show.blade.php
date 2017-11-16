@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.listaexterna.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.listaexterna.fields.producto')</th>
                            <td field-key='producto'>{{ $listaexterna->producto->nombre or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.listaexterna.fields.proveedor')</th>
                            <td field-key='proveedor'>{{ $listaexterna->proveedor->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.listaexterna.fields.marca')</th>
                            <td field-key='marca'>{{ $listaexterna->marca->nombre or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.listaexterna.fields.codigo')</th>
                            <td field-key='codigo'>{{ $listaexterna->codigo }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.listaexterna.fields.vencimiento')</th>
                            <td field-key='vencimiento'>{{ $listaexterna->vencimiento }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.listaexterna.fields.regisp')</th>
                            <td field-key='regisp'>{{ $listaexterna->regisp }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.listaexterna.fields.preciounidad')</th>
                            <td field-key='preciounidad'>{{ $listaexterna->preciounidad }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.listaexterna.fields.precio-caja')</th>
                            <td field-key='precio_caja'>{{ $listaexterna->precio_caja }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.listaexterna.fields.margen')</th>
                            <td field-key='margen'>{{ $listaexterna->margen }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.listaexterna.fields.stock')</th>
                            <td field-key='stock'>{{ $listaexterna->stock }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.listaexterna.fields.observaciones')</th>
                            <td field-key='observaciones'>{!! $listaexterna->observaciones !!}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#itemoc" aria-controls="itemoc" role="tab" data-toggle="tab">Item OC</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="itemoc">
<table class="table table-bordered table-striped {{ count($itemocs) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($itemocs) > 0)
            @foreach ($itemocs as $itemoc)
                <tr data-entry-id="{{ $itemoc->id }}">
                    @if( request('show_deleted') == 1 )
                                <td>
                                    @can('itemoc_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.itemocs.restore', $itemoc->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('itemoc_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.itemocs.perma_del', $itemoc->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('itemoc_view')
                                    <a href="{{ route('admin.itemocs.show',[$itemoc->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('itemoc_edit')
                                    <a href="{{ route('admin.itemocs.edit',[$itemoc->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('itemoc_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.itemocs.destroy', $itemoc->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="6">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.listaexternas.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
