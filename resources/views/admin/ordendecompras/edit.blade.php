@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.ordendecompra.title')</h3>
    
    {!! Form::model($ordendecompra, ['method' => 'PUT', 'route' => ['admin.ordendecompras.update', $ordendecompra->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('proveedor_id', trans('quickadmin.ordendecompra.fields.proveedor').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('proveedor_id', $proveedors, old('proveedor_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('proveedor_id'))
                        <p class="help-block">
                            {{ $errors->first('proveedor_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('contacto_id', trans('quickadmin.ordendecompra.fields.contacto').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('contacto_id', $contactos, old('contacto_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('contacto_id'))
                        <p class="help-block">
                            {{ $errors->first('contacto_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('fecha', trans('quickadmin.ordendecompra.fields.fecha').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('fecha', old('fecha'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('fecha'))
                        <p class="help-block">
                            {{ $errors->first('fecha') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}"
        });
    </script>

@stop