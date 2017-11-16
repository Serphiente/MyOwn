@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.listaexterna.title')</h3>
    @can('listaexterna_create')
    <p>
        <a href="{{ route('admin.listaexternas.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('listaexterna_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.listaexternas.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.listaexternas.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($listaexternas) > 0 ? 'datatable' : '' }} @can('listaexterna_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('listaexterna_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

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
                                @can('listaexterna_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='producto'>{{ $listaexterna->producto->nombre or '' }}</td>
                                <td field-key='proveedor'>{{ $listaexterna->proveedor->name or '' }}</td>
                                <td field-key='marca'>{{ $listaexterna->marca->nombre or '' }}</td>
                                <td field-key='codigo'>{{ $listaexterna->codigo }}</td>
                                <td field-key='vencimiento'>{{ $listaexterna->vencimiento }}</td>
                                <td field-key='regisp'><a href="http://registrosanitario.ispch.gob.cl/Ficha.aspx?RegistroISP={{ $listaexterna->regisp }}" target="_blank">{{ $listaexterna->regisp }}</a></td>
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
@stop

@section('javascript') 
    <script>
        @can('listaexterna_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.listaexternas.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection