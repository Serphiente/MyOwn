@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.contact-companies.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.contact-companies.fields.name')</th>
                            <td field-key='name'>{{ $contact_company->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contact-companies.fields.rut')</th>
                            <td field-key='rut'>{{ $contact_company->rut }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contact-companies.fields.address')</th>
                            <td field-key='address'>{{ $contact_company->address }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contact-companies.fields.website')</th>
                            <td field-key='website'>{{ $contact_company->website }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contact-companies.fields.email')</th>
                            <td field-key='email'>{{ $contact_company->email }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#contacts" aria-controls="contacts" role="tab" data-toggle="tab">Contactos</a></li>
<li role="presentation" class=""><a href="#ordendecompra" aria-controls="ordendecompra" role="tab" data-toggle="tab">Orden de compra</a></li>
<li role="presentation" class=""><a href="#listaexterna" aria-controls="listaexterna" role="tab" data-toggle="tab">Lista Externa</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="contacts">
<table class="table table-bordered table-striped {{ count($contacts) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.contacts.fields.company')</th>
                        <th>@lang('quickadmin.contacts.fields.first-name')</th>
                        <th>@lang('quickadmin.contacts.fields.last-name')</th>
                        <th>@lang('quickadmin.contacts.fields.phone1')</th>
                        <th>@lang('quickadmin.contacts.fields.email')</th>
                        <th>@lang('quickadmin.contacts.fields.observaciones')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($contacts) > 0)
            @foreach ($contacts as $contact)
                <tr data-entry-id="{{ $contact->id }}">
                    <td field-key='company'>{{ $contact->company->name or '' }}</td>
                                <td field-key='first_name'>{{ $contact->first_name }}</td>
                                <td field-key='last_name'>{{ $contact->last_name }}</td>
                                <td field-key='phone1'>{{ $contact->phone1 }}</td>
                                <td field-key='email'>{{ $contact->email }}</td>
                                <td field-key='observaciones'>{!! $contact->observaciones !!}</td>
                                                                <td>
                                    @can('contact_view')
                                    <a href="{{ route('admin.contacts.show',[$contact->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('contact_edit')
                                    <a href="{{ route('admin.contacts.edit',[$contact->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('contact_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contacts.destroy', $contact->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="11">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="ordendecompra">
<table class="table table-bordered table-striped {{ count($ordendecompras) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.ordendecompra.fields.proveedor')</th>
                        <th>@lang('quickadmin.ordendecompra.fields.contacto')</th>
                        <th>@lang('quickadmin.ordendecompra.fields.fecha')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($ordendecompras) > 0)
            @foreach ($ordendecompras as $ordendecompra)
                <tr data-entry-id="{{ $ordendecompra->id }}">
                    <td field-key='proveedor'>{{ $ordendecompra->proveedor->name or '' }}</td>
                                <td field-key='contacto'>{{ $ordendecompra->contacto->first_name or '' }}</td>
                                <td field-key='fecha'>{{ $ordendecompra->fecha }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('ordendecompra_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.ordendecompras.restore', $ordendecompra->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('ordendecompra_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.ordendecompras.perma_del', $ordendecompra->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('ordendecompra_view')
                                    <a href="{{ route('admin.ordendecompras.show',[$ordendecompra->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('ordendecompra_edit')
                                    <a href="{{ route('admin.ordendecompras.edit',[$ordendecompra->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('ordendecompra_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.ordendecompras.destroy', $ordendecompra->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="8">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="listaexterna">
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

            <a href="{{ route('admin.contact_companies.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
