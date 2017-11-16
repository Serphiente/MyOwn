@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.producto.title')</h3>
    @can('producto_create')
    <p>
        <a href="{{ route('admin.productos.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($productos) > 0 ? 'datatable' : '' }} @can('producto_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('producto_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

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
                                @can('producto_delete')
                                    <td></td>
                                @endcan

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
@stop

@section('javascript') 
    <script>
        @can('producto_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.productos.mass_destroy') }}';
        @endcan

    </script>
@endsection