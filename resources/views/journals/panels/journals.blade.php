<?php
/**
 * @var \App\Models\Journal $model
 * @var \App\Models\Journal $journal
 */
$filters = [];
if (request()->has('journal_id')) {
    $filters['journal_id'] = request()->get('journal_id');
}
$r = $model->allJournals()
        ->filter($filters)
        ->simpleSort($datagridSorter)
        ->with(['character', 'entity', 'entity.tags'])
        ->paginate();
?>
<div class="box box-solid" id="journal-journals">
    <div class="box-header">
        <h3 class="box-title">
            {{ __('journals.show.tabs.journals') }}
        </h3>
        <div class="box-tools">
            @if (request()->has('journal_id'))
                <a href="{{ route('journals.journals', [$model, '#journal-journals']) }}" class="btn btn-default btn-box-tool">
                    <i class="fa fa-filter"></i> {{ __('crud.filters.all') }} ({{ $model->allJournals()->count() }})
                </a>
            @else
                <a href="{{ route('journals.journals', [$model, 'journal_id' => $model->id, '#journal-journals']) }}" class="btn btn-default btn-box-tool">
                    <i class="fa fa-filter"></i> {{ __('crud.filters.direct') }} ({{ $model->journals()->count() }})
                </a>
            @endif
        </div>
    </div>
    <div class="box-body">


        <p class="help-block">
            {{ __('journals.helpers.journals') }}
        </p>

        <div class="row">
            <div class="col-md-6">
                @include('cruds.datagrids.sorters.simple-sorter', ['target' => '#journal-journals'])
            </div>
            <div class="col-md-6 text-right">


            </div>
        </div>

        <table id="journals" class="table table-hover ">
            <tbody><tr>
                <th class="avatar"><br /></th>
                <th>{{ __('journals.fields.name') }}</th>
                @if ($campaign->enabled('characters'))
                    <th>{{ __('journals.fields.author') }}</th>
                @endif
            </tr>
            @foreach ($r as $journal)
                <tr>
                    <td>
                        <a class="entity-image" style="background-image: url('{{ $journal->getImageUrl(40) }}');" title="{{ $journal->name }}" href="{{ route('journals.show', $journal->id) }}"></a>
                    </td>
                    <td>
                        {!! $journal->tooltipedLink() !!}<br />
                        <i>{{ $journal->type }}</i>
                    </td>
                    @if ($campaign->enabled('characters'))
                        <td>
                            @if ($journal->character)
                                {!! $journal->character->tooltipedLink() !!}
                            @endif
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @if ($r->hasPages())
        <div class="box-footer text-right">
            {{ $r->fragment('journal-journals')->appends($filters)->links() }}
        </div>
    @endif
</div>
