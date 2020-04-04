@extends('layouts.app', [
    'title' => trans('campaigns.show.title', ['name' => $campaign->name]),
    'breadcrumbs' => [
        ['url' => route('campaigns.index'), 'label' => trans('campaigns.index.title')]
    ],
    'canonical' => true,
    'mainTitle' => false,
])

@section('og')
    <meta property="og:description" content="{{ $campaign->tooltip() }}" />
    @if ($campaign->image)<meta property="og:image" content="{{ Storage::url($campaign->image)  }}" />@endif

    <meta property="og:url" content="{{ route('campaigns.show', $campaign)  }}" />
@endsection

@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-md-3 col-lg-2">
            @include('campaigns._menu')
        </div>
        <div class="col-md-9 col-lg-10">
            <div class="box box-solid">
                <div class="box-body">
                    <h2 class="page-header with-border">
                        {{ trans('crud.fields.entry') }}
                    </h2>
                    <div class="post">
                        <p>{!! $campaign->entry() !!}</p>
                    </div>
                </div>
            </div>

            <div class="entity-modification-history">
                <div class="help-block text-right">
                    {!! __('crud.history.created_date', [
                        'date' => $campaign->created_at->diffForHumans(),
                        'realdate' => $campaign->created_at . ' UTC',
                    ]) !!}. {!! __('crud.history.updated_date', [
                        'date' => $campaign->updated_at->diffForHumans(),
                        'realdate' => $campaign->updated_at . ' UTC',
                    ]) !!}
                </div>
            </div>
        </div>
    </div>
@endsection
