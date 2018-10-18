<td class="{{ $day['isToday'] ? 'today' : null}} text-center">
    @if ($day['day'])
        <h5 class="pull-left{{ $day['isToday'] ? "label label-primary" : null}}">{{ $day['day'] }}</h5>
        @if (Auth::check() && Auth::user()->can('update', $model))
            <a href="{{ route('calendars.event.create', [$model, 'date' => $day['date']]) }}" data-toggle="ajax-modal"
               data-target="#entity-modal" data-url="{{ route('calendars.event.create', [$model, 'date' => $day['date']]) }}"
               class="add btn btn-xs btn-default pull-right" data-date="{{ $day['date'] }}">
                <i class="fa fa-plus"></i>
            </a>
        @endif
        @if ($day['day'] == 1 && !empty($showMonth))
            <span class="hidden-xs hidden-sm">{{ $day['month'] }}</span>
        @endif
        <p class="text-left">
            @if (!empty($day['events']))
                @foreach ($day['events'] as $event)
                    <?php /** @var \App\Models\EntityEvent $event */?>
                    <div class="label calendar-event-block {{ $event->getLabelColour() }}" data-toggle="ajax-modal"
                       data-target="#entity-modal" data-url="{{ route('entities.entity_events.edit', [$event->entity->id, $event->id]) }}">
                        <a href="{{ $event->entity->url() }}" class="entity-image" style="background-image: url('{{ $event->entity->child->getImageUrl(true) }}');"></a>
                        <span data-toggle="tooltip" title="{{ $event->entity->tooltip() }}">{{ $event->entity->name }}</span>
                        {!! $event->getLabel() !!}
                    </div>
                @endforeach
            @endif
        </p>
    @endif
</td>