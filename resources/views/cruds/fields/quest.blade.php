@if (!$campaign->enabled('quests'))
    <?php return ?>
@endif

@php
$preset = null;
if (isset($model) && $model->ability) {
    $preset = $model->ability;
} elseif (isset($isRandom) && $isRandom) {
    $preset = $random->generateForeign(\App\Models\Quest::class);
} else {
    $preset = FormCopy::field('quest')->select();
}

$data = [
    'preset' => $preset,
    'class' => App\Models\Quest::class,
];
if (isset($enableNew)) {
    $data['allowNew'] = $enableNew;
}
if (isset($parent) && $parent) {
    $data['labelKey'] = 'quests.fields.quest';
}
if (isset($dropdownParent)) {
    $data['dropdownParent'] = $dropdownParent;
}
if (isset($from)) {
    $data['from'] = $from;
}
@endphp
<div class="form-group">
    {!! Form::foreignSelect(
        'quest_id',
        $data
    ) !!}
</div>
