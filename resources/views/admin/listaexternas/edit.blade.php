@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.listaexterna.title')</h3>
    
    {!! Form::model($listaexterna, ['method' => 'PUT', 'route' => ['admin.listaexternas.update', $listaexterna->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('producto_id', trans('quickadmin.listaexterna.fields.producto').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('producto_id', $productos, old('producto_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('producto_id'))
                        <p class="help-block">
                            {{ $errors->first('producto_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('proveedor_id', trans('quickadmin.listaexterna.fields.proveedor').'', ['class' => 'control-label']) !!}
                    {!! Form::select('proveedor_id', $proveedors, old('proveedor_id'), ['class' => 'form-control select2']) !!}
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
                    {!! Form::label('marca_id', trans('quickadmin.listaexterna.fields.marca').'', ['class' => 'control-label']) !!}
                    {!! Form::select('marca_id', $marcas, old('marca_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('marca_id'))
                        <p class="help-block">
                            {{ $errors->first('marca_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('codigo', trans('quickadmin.listaexterna.fields.codigo').'', ['class' => 'control-label']) !!}
                    {!! Form::text('codigo', old('codigo'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('codigo'))
                        <p class="help-block">
                            {{ $errors->first('codigo') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('vencimiento', trans('quickadmin.listaexterna.fields.vencimiento').'', ['class' => 'control-label']) !!}
                    {!! Form::text('vencimiento', old('vencimiento'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vencimiento'))
                        <p class="help-block">
                            {{ $errors->first('vencimiento') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('regisp', trans('quickadmin.listaexterna.fields.regisp').'', ['class' => 'control-label']) !!}
                    {!! Form::text('regisp', old('regisp'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('regisp'))
                        <p class="help-block">
                            {{ $errors->first('regisp') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('preciounidad', trans('quickadmin.listaexterna.fields.preciounidad').'', ['class' => 'control-label']) !!}
                    {!! Form::text('preciounidad', old('preciounidad'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('preciounidad'))
                        <p class="help-block">
                            {{ $errors->first('preciounidad') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('precio_caja', trans('quickadmin.listaexterna.fields.precio-caja').'', ['class' => 'control-label']) !!}
                    {!! Form::text('precio_caja', old('precio_caja'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('precio_caja'))
                        <p class="help-block">
                            {{ $errors->first('precio_caja') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('margen', trans('quickadmin.listaexterna.fields.margen').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('margen', old('margen'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('margen'))
                        <p class="help-block">
                            {{ $errors->first('margen') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('stock', trans('quickadmin.listaexterna.fields.stock').'', ['class' => 'control-label']) !!}
                    {!! Form::text('stock', old('stock'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('stock'))
                        <p class="help-block">
                            {{ $errors->first('stock') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('observaciones', trans('quickadmin.listaexterna.fields.observaciones').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('observaciones', old('observaciones'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('observaciones'))
                        <p class="help-block">
                            {{ $errors->first('observaciones') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Item OC
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="item-oc">
                    @forelse(old('itemocs', []) as $index => $data)
                        @include('admin.listaexternas.itemocs_row', [
                            'index' => $index
                        ])
                    @empty
                        @foreach($listaexterna->itemoc as $item)
                            @include('admin.listaexternas.itemocs_row', [
                                'index' => 'id-' . $item->id,
                                'field' => $item
                            ])
                        @endforeach
                    @endforelse
                </tbody>
            </table>
            <a href="#" class="btn btn-success pull-right add-new">@lang('quickadmin.qa_add_new')</a>
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent

    <script type="text/html" id="item-oc-template">
        @include('admin.listaexternas.itemocs_row', [
            'index' => '_INDEX_'
        ])
    </script>
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}"
        });
    </script>

            <script>
        $('.add-new').click(function () {
            var tableBody = $(this).parent().find('tbody');
            var template = $('#' + tableBody.attr('id') + '-template').html();
            var lastIndex = parseInt(tableBody.find('tr').last().data('index'));
            if (isNaN(lastIndex)) {
                lastIndex = 0;
            }
            tableBody.append(template.replace(/_INDEX_/g, lastIndex + 1));
            return false;
        });
        $(document).on('click', '.remove', function () {
            var row = $(this).parentsUntil('tr').parent();
            row.remove();
            return false;
        });
        </script>
@stop