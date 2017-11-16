@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.producto.title')</h3>
    
    {!! Form::model($producto, ['method' => 'PUT', 'route' => ['admin.productos.update', $producto->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nombre', trans('quickadmin.producto.fields.nombre').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('nombre', old('nombre'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('nombre'))
                        <p class="help-block">
                            {{ $errors->first('nombre') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('unidadescaja', trans('quickadmin.producto.fields.unidadescaja').'', ['class' => 'control-label']) !!}
                    {!! Form::number('unidadescaja', old('unidadescaja'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('unidadescaja'))
                        <p class="help-block">
                            {{ $errors->first('unidadescaja') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tipo_producto_id', trans('quickadmin.producto.fields.tipo-producto').'', ['class' => 'control-label']) !!}
                    {!! Form::select('tipo_producto_id', $tipo_productos, old('tipo_producto_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tipo_producto_id'))
                        <p class="help-block">
                            {{ $errors->first('tipo_producto_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('presentacion_producto_id', trans('quickadmin.producto.fields.presentacion-producto').'', ['class' => 'control-label']) !!}
                    {!! Form::select('presentacion_producto_id', $presentacion_productos, old('presentacion_producto_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('presentacion_producto_id'))
                        <p class="help-block">
                            {{ $errors->first('presentacion_producto_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('principio_activo', trans('quickadmin.producto.fields.principio-activo').'', ['class' => 'control-label']) !!}
                    {!! Form::select('principio_activo[]', $principio_activos, old('principio_activo') ? old('principio_activo') : $producto->principio_activo->pluck('id')->toArray(), ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('principio_activo'))
                        <p class="help-block">
                            {{ $errors->first('principio_activo') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

