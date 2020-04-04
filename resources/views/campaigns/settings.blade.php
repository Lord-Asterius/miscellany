@extends('layouts.app', [
    'title' => trans('campaigns.settings.title', ['name' => $campaign->name]),
    'description' => trans('campaigns.settings.description'),
    'breadcrumbs' => [
        ['url' => route('campaign'), 'label' => $campaign->name],
        trans('campaigns.show.tabs.settings')
    ],
    'canonical' => true,
    'mainTitle' => false,
])

@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-md-3 col-lg-2">
            @include('campaigns._menu', ['active' => 'settings'])
        </div>
        <div class="col-md-9 col-lg-10 campaign-settings">
            @include('campaigns._settings')
        </div>
    </div>
@endsection


@section('scripts')
    @parent
    <script src="{{ mix('js/campaign.js') }}" defer></script>
@endsection
