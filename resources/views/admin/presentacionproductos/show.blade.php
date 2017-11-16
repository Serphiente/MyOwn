@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.presentacionproducto.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.presentacionproducto.fields.nombre')</th>
                            <td field-key='nombre'>{{ $presentacionproducto->nombre }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.presentacionproducto.fields.nombrecorto')</th>
                            <td field-key='nombrecorto'>{{ $presentacionproducto->nombrecorto }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#producto" aria-controls="producto" role="tab" data-toggle="tab">Producto</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="producto">
<table class="table table-bordered table-striped {{ count($productos) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.producto.fields.nombre')</th>
                        <th>@lang('quickadmin.producto.fields.unidadescaja')</th>
                        <th>@lang('quickadmin.producto.fields.tipo-producto')</th>
                        <th>@lang('quickadmin.producto.fields.presentacion-producto')</th>
                        <th>@lang('quickadmin.producto.fields.principio-activo')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($productos) > 0)
            @foreach ($productos as $producto)
                <tr data-entry-id="{{ $producto->id }}">
                    <td field-key='nombre'>{{ $producto->nombre }}</td>
                                <td field-key='unidadescaja'>{{ $producto->unidadescaja }}</td>
                                <td field-key='tipo_producto'>{{ $producto->tipo_producto->nombre or '' }}</td>
                                <td field-key='presentacion_producto'>{{ $producto->presentacion_producto->nombre or '' }}</td>
                                <td field-key='principio_activo'>
                                    @foreach ($producto->principio_activo as $singlePrincipioActivo)
                                        <span class="label label-info label-many">{{ $singlePrincipioActivo->nombre }}</span>
                                    @endforeach
                                </td>
                                                                <td>
                                    @can('producto_view')
                                    <a href="{{ route('admin.productos.show',[$producto->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('producto_edit')
                                    <a href="{{ route('admin.productos.edit',[$producto->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('producto_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.productos.destroy', $producto->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.presentacionproductos.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
