<?php

return [
    'index' => [
        'title' => 'Notes',
        'description' => 'Manage the notes of your campaign.',
        'add' => 'New Note',
        'header' => 'Notes of :name',
    ],
    'create' => [
        'title' => 'Create a new note',
        'description' => '',
        'success' => 'Note created.',
    ],
    'show' => [
        'title' => 'Note :note',
        'description' => 'A detailed view of a note',
        'tabs' => [
            'description' => 'Description'
        ]
    ],
    'edit' => [
        'title' => 'Edit Note :note',
        'description' => '',
        'success' => 'Note updated.',
    ],
    'destroy' => [
        'success' => 'Note removed.',
    ],

    'fields' => [
        'name' => 'Name',
        'type' => 'Type',
        'image' => 'Image',
        'description' => 'Description',
        'is_private' => 'Private',
    ],
    'placeholders' => [
        'name' => 'Name of the note',
        'type' => 'Religion, Race, Political system',
    ],
    'hints' => [
        'is_private' => 'Hide from "Viewers"',
    ],
];
