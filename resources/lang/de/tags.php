<?php

return [
    'children'      => [
        'actions'       => [
            'add'   => 'Füge neue Kategorie hinzu',
        ],
        'create'        => [
            'success'   => 'Der Tag :name wurde dem Objekt hinzugefügt.',
            'title'     => 'Füge Kategorie zu :name hinzu',
        ],
        'description'   => 'Objekte mit diesem Tag',
        'title'         => 'Kategorie :name Unterkategorien',
    ],
    'create'        => [
        'description'   => 'Erstelle eine neue Kategorie',
        'success'       => 'Kategorie \':name\' erstellt.',
        'title'         => 'Neue Kategorie',
    ],
    'destroy'       => [
        'success'   => 'Kategorie \':name\' entfernt.',
    ],
    'edit'          => [
        'success'   => 'Kategorie \':name\' aktualisiert.',
        'title'     => 'Bearbeite Kategorie :name',
    ],
    'fields'        => [
        'characters'    => 'Charaktere',
        'children'      => 'Kinder',
        'name'          => 'Name',
        'tag'           => 'Übergeordnete Kategorie',
        'tags'          => 'Unterkategorien',
        'type'          => 'Typ',
    ],
    'helpers'       => [
        'nested_parent' => 'Anzeigen der Tags von :parent.',
        'nested_without'=> 'Anzeigen aller Tags, die kein übergeordnetes Tag haben. Klicken Sie auf eine Zeile, um die untergeordneten Tags anzuzeigen.',
    ],
    'hints'         => [
        'children'  => 'Diese Liste enthält alle Objekte, die direkt in dieser Kategorie und allen Unterkategorien sind.',
        'tag'       => 'Unten dargestellt sind alle Kategorien, die direkt unter dieser eingeordnet sind.',
    ],
    'index'         => [
        'actions'       => [
            'explore_view'  => 'Erkundungsansicht',
        ],
        'add'           => 'Neue Kategorie',
        'description'   => 'Verwalte die Kategorie von :name.',
        'header'        => 'Kategorien von :name',
        'title'         => 'Kategorien',
    ],
    'new_tag'       => 'Neue Kategorie',
    'placeholders'  => [
        'name'  => 'Name der Kategorie',
        'tag'   => 'Wähle eine Elternkategorie',
        'type'  => 'Überlieferung, Geschichte, Kriege, Religion, Flaggenkunde',
    ],
    'show'          => [
        'description'   => 'Eine Detailansicht einer Kategorie',
        'tabs'          => [
            'children'      => 'Kinder',
            'information'   => 'Informationen',
            'tags'          => 'Kategorien',
        ],
        'title'         => 'Kategorie :name',
    ],
    'tags'          => [
        'description'   => 'Unterkategorien',
        'title'         => 'Kategorie :name Unterkategorien',
    ],
];
