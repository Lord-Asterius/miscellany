<?php

return [
    'children'      => [
        'actions'   => [
            'add'   => 'Добавить объект',
        ],
        'create'    => [
            'success'   => 'Тэг ":name" добавлен к объекту.',
            'title'     => 'Добавление тэга :name к объекту',
        ],
        'title'     => 'Объекты тэга :name',
    ],
    'create'        => [
        'success'   => 'Тэг ":name" создан.',
        'title'     => 'Новый тэг',
    ],
    'destroy'       => [
        'success'   => 'Тэг ":name" удален.',
    ],
    'edit'          => [
        'success'   => 'Тэг ":name" обновлен.',
        'title'     => 'Редактирование тэга :name',
    ],
    'fields'        => [
        'characters'    => 'Персонажи',
        'children'      => 'Потомки',
        'name'          => 'Название',
        'tag'           => 'Родительский тэг',
        'tags'          => 'Подтэги',
        'type'          => 'Тип',
    ],
    'helpers'       => [
        'nested_parent' => 'Показаны тэги, входящие в :parent.',
        'nested_without'=> 'Показаны все тэги, у которых нет родительских тэгов. Нажмите на строку тэга, чтобы увидеть список его подтэгов.',
    ],
    'hints'         => [
        'children'  => 'Этот список содержит все объекты с этим тэгом или его подтэгами.',
        'tag'       => 'Это список всех непосредственных потомков этого тэга.',
    ],
    'index'         => [
        'actions'   => [
            'explore_view'  => 'Свернутый вид',
        ],
        'add'       => 'Новый тэг',
        'header'    => 'Тэги в :name',
        'title'     => 'Тэги',
    ],
    'new_tag'       => 'Новый тэг',
    'placeholders'  => [
        'name'  => 'Название тэга',
        'tag'   => 'Выберите родительский тэг',
        'type'  => 'Знания, войны, история, религия, флаги',
    ],
    'show'          => [
        'tabs'  => [
            'children'  => 'Потомки',
            'tags'      => 'Тэги',
        ],
        'title' => 'Тэг :name',
    ],
    'tags'          => [
        'title' => 'Подтэги тэга :name',
    ],
];
