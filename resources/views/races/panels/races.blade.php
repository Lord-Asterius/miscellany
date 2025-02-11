<div class="box box-solid" id="race-races">
    <div class="box-header">
        <h3 class="box-title">
            {{ __('races.show.tabs.races') }}
        </h3>
    </div>
    <div class="box-body">

        <?php  $r = $model->races()->simpleSort($datagridSorter)->with(['characters'])->paginate(); ?>

        @include('cruds.datagrids.sorters.simple-sorter', ['target' => '#race-races'])

        <table id="races" class="table table-hover ">
            <tbody><tr>
                <th class="avatar"><br /></th>
                <th>{{ __('races.fields.name') }}</th>
                <th>{{ __('races.fields.type') }}</th>
                @if ($campaign->enabled('characters'))
                    <th>{{ __('races.fields.characters') }}</th>
                @endif
            </tr>
            @foreach ($r as $race)
                <tr>
                    <td>
                        <a class="entity-image" style="background-image: url('{{ $race->getImageUrl(40) }}');" title="{{ $race->name }}" href="{{ route('races.show', $race->id) }}"></a>
                    </td>
                    <td>
                        {!! $race->tooltipedLink() !!}
                    </td>
                    <td>
                        {{ $race->type }}
                    </td>
                    @if ($campaign->enabled('characters'))
                    <td>
                        {{ $race->characters()->count() }}
                    </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $r->fragment('race-races')->links() }}
    </div>
</div>
