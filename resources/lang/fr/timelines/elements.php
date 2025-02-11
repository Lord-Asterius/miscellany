<?php

return [
    'create'        => [
        'success'   => 'Élément ajouté à la chronologie.',
        'title'     => 'Nouvel élément de chronologie',
    ],
    'delete'        => [
        'success'   => 'L\'élément :name a été supprimé.',
    ],
    'edit'          => [
        'success'   => 'L\'élément a été modifié.',
        'title'     => 'Modifier l\'élément de la chronologie',
    ],
    'fields'        => [
        'date'  => 'Date',
        'era'   => 'Ère',
        'icon'  => 'Icône',
    ],
    'helpers'       => [
        'entity_is_private' => 'L\'entité de cet élément est privé.',
        'icon'              => 'Copier le HTML d\'une icône depuis :fontawesome ou :rpgawesome.',
    ],
    'placeholders'  => [
        'date'      => 'ex. Le 42 Mars, ou 1332-1337',
        'name'      => 'Requis si pas d\'entité sélectionnée.',
        'position'  => 'Position dans la liste des éléments de l\'ère. Laisser vide pour ajouter à la fin.',
    ],
];
