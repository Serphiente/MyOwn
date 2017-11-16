@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.manufacturador.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.manufacturador.fields.nombre')</th>
                            <td field-key='nombre'>{{ $manufacturador->nombre }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#listaexterna" aria-controls="listaexterna" role="tab" data-toggle="tab">Lista Externa</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="listaexterna">
<table class="table table-bordered table-striped {{ count($listaexternas) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.listaexterna.fields.producto')</th>
                        <th>@lang('quickadmin.listaexterna.fields.proveedor')</th>
                        <th>@lang('quickadmin.listaexterna.fields.marca')</th>
                        <th>@lang('quickadmin.listaexterna.fields.codigo')</th>
                        <th>@lang('quickadmin.listaexterna.fields.vencimiento')</th>
                        <th>@lang('quickadmin.listaexterna.fields.regisp')</th>
                        <th>@lang('quickadmin.listaexterna.fields.preciounidad')</th>
                        <th>@lang('quickadmin.listaexterna.fields.precio-caja')</th>
                        <th>@lang('quickadmin.listaexterna.fields.margen')</th>
                        <th>@lang('quickadmin.listaexterna.fields.stock')</th>
                        <th>@lang('quickadmin.listaexterna.fields.observaciones')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($listaexternas) > 0)
            @foreach ($listaexternas as $listaexterna)
                <tr data-entry-id="{{ $listaexterna->id }}">
                    <td field-key='producto'>{{ $listaexterna->producto->nombre or '' }}</td>
                                <td field-key='proveedor'>{{ $listaexterna->proveedor->name or '' }}</td>
                                <td field-key='marca'>{{ $listaexterna->marca->nombre or '' }}</td>
                                <td field-key='codigo'>{{ $listaexterna->codigo }}</td>
                                <td field-key='vencimiento'>{{ $listaexterna->vencimiento }}</td>
                                <td field-key='regisp'>{{ $listaexterna->regisp }}</td>
                                <td field-key='preciounidad'>{{ $listaexterna->preciounidad }}</td>
                                <td field-key='precio_caja'>{{ $listaexterna->precio_caja }}</td>
                                <td field-key='margen'>{{ $listaexterna->margen }}</td>
                                <td field-key='stock'>{{ $listaexterna->stock }}</td>
                                <td field-key='observaciones'>{!! $listaexterna->observaciones !!}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('listaexterna_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.listaexternas.restore', $listaexterna->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('listaexterna_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.listaexternas.perma_del', $listaexterna->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('listaexterna_view')
                                    <a href="{{ route('admin.listaexternas.show',[$listaexterna->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('listaexterna_edit')
                                    <a href="{{ route('admin.listaexternas.edit',[$listaexterna->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('listaexterna_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.listaexternas.destroy', $listaexterna->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="16">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.manufacturadors.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
