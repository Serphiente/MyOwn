@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.itemoc.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.itemocs.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('item_id', trans('quickadmin.itemoc.fields.item').'', ['class' => 'control-label']) !!}
                    {!! Form::select('item_id', $items, old('item_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('item_id'))
                        <p class="help-block">
                            {{ $errors->first('item_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

