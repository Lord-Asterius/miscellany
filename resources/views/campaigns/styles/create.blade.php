@extends('layouts.' . (request()->ajax() ? 'ajax' : 'app'), [
    'title' => __('campaigns/styles.create.title', ['name' => $campaign->name]),
    'breadcrumbs' => [
        ['url' => route('campaign_styles.index'), 'label' => __('campaigns.show.tabs.styles')]
    ]
])

@section('content')
    <div class="panel panel-default">
        {!! Form::open([
            'route' => ['campaign_styles.store'],
            'method' => 'POST',
        ]) !!}
        <div class="panel-body">
            @include('partials.errors')

            <div class="form-group required">
                <label>{{ trans('campaigns/styles.fields.name') }}</label>
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>


            <div class="form-group required">
                <label>{{ trans('campaigns/styles.fields.content') }}</label>
                {!! Form::textarea('content', null, ['class' => 'form-control', 'id' => 'css', 'spellcheck' => 'false']) !!}
                <p class="help-block">{{ __('campaigns.helpers.css') }}</p>
            </div>

            <div class="form-group">
                {!! Form::hidden('is_enabled', 0) !!}
                <div class="checkbox">
                    <label>{!! Form::checkbox('is_enabled', 1, !isset($style) ? true : $style->is_enabled) !!}
                        {{ __('campaigns/styles.fields.is_enabled') }}
                    </label>
                </div>
            </div>



        </div>
        <div class="panel-footer">
            <button class="btn btn-success">{{ __('crud.save') }}</button>
            @includeWhen(!request()->ajax(), 'partials.or_cancel')
        </div>
    </div>

    {{ csrf_field() }}
    {!! Form::close() !!}
@endsection
