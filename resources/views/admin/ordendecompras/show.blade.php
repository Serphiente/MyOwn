@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.ordendecompra.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.ordendecompra.fields.proveedor')</th>
                            <td field-key='proveedor'>{{ $ordendecompra->proveedor->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.ordendecompra.fields.contacto')</th>
                            <td field-key='contacto'>{{ $ordendecompra->contacto->first_name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.ordendecompra.fields.fecha')</th>
                            <td field-key='fecha'>{{ $ordendecompra->fecha }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.ordendecompras.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
