<?php

return [
    'create'        => [
        'description'   => 'Stwórz nową organizację',
        'success'       => 'Stworzono organizację \':name\'.',
        'title'         => 'Nowa organizacja',
    ],
    'destroy'       => [
        'success'   => 'Usunięto organizację \':name\'.',
    ],
    'edit'          => [
        'success'   => 'Zmieniono organizację \':name\'.',
        'title'     => 'Edycja organizacji :name',
    ],
    'fields'        => [
        'image'         => 'Obraz',
        'location'      => 'Miejsce',
        'members'       => 'Członkowie',
        'name'          => 'Nazwa',
        'organisation'  => 'Organizacja źródłowa',
        'organisations' => 'Organizacje pochodne',
        'relation'      => 'Relacja',
        'type'          => 'Rodzaj',
    ],
    'helpers'       => [
        'descendants'   => 'Na liście znajdują się wszystkie organizacje wywodzące się od tej, nie tylko bezpośrednio.',
        'nested'        => 'W widoku hierarchii najpierw wyświetlane są organizacje, które nie mają źródła. Po kliknięciu na wiersz organizacji zobaczysz jej pochodne. Możesz schodzić niżej, póki nie skończą się poziomy hierarchii.',
        'nested_parent' => 'Wyświetlono organizacje pochodzące od :parent.',
        'nested_without'=> 'Wyświetlono wszystkie organizacje nie posiadające źródła. Kliknij na rząd, by wyświetlić organizacje pochodne.',
    ],
    'index'         => [
        'add'           => 'Nowa organizacja',
        'description'   => 'Zarządzaj organizacjami elementu :name',
        'header'        => 'Organizacje elementu :name',
        'title'         => 'Organizacje',
    ],
    'members'       => [
        'actions'       => [
            'add'   => 'Dodaj członka',
        ],
        'create'        => [
            'description'   => 'Dodaj członka organizacji',
            'success'       => 'Dodano członka organizacji.',
            'title'         => 'Nowy członek organizacji :name',
        ],
        'destroy'       => [
            'success'   => 'Usunięto członka organizacji.',
        ],
        'edit'          => [
            'success'   => 'Zmieniono członka organizacji.',
            'title'     => 'Edycja członka :name',
        ],
        'fields'        => [
            'character'     => 'Postać',
            'organisation'  => 'Organiacja',
            'parent'        => 'Zwierzchnik',
            'pinned'        => 'Przypnij',
            'role'          => 'Rola',
            'status'        => 'Rodzaj członkostwa',
        ],
        'helpers'       => [
            'all_members'   => 'Wszystkie postaci należące do tej organizacji i organizacji pochodnych.',
            'members'       => 'Wszystkie postaci należące do tej organizacji.',
            'pinned'        => 'Wybierz czy członkostwo ma być wyświetlane w sekcji "przypięte" wskazanych elementów.',
        ],
        'pinned'        => [
            'both'          => 'Do obu',
            'character'     => 'Do postaci',
            'none'          => 'Do żadnego',
            'organisation'  => 'Do organizacji',
        ],
        'placeholders'  => [
            'character' => 'Wybierz postać',
            'parent'    => 'Zwierzchnik tego członka',
            'role'      => 'Przywódca, członek, Wielki Septon, mistrz szpiegów',
        ],
        'status'        => [
            'active'    => 'Aktywna działalność',
            'inactive'  => 'Była działalność',
            'unknown'   => 'Nieznany',
        ],
        'title'         => 'Członkowie organizacji :name',
    ],
    'organisations' => [
        'title' => 'Organizacje organizacji :name',
    ],
    'placeholders'  => [
        'location'  => 'Wybierz miejsce',
        'name'      => 'Nazwa organizacji',
        'type'      => 'Kult, gang, podziemie niepodległościowe, fandom',
    ],
    'quests'        => [
        'description'   => 'Misje, których częścią jest ta organizacja.',
        'title'         => 'Misje organizacji :name',
    ],
    'show'          => [
        'description'   => 'Szczegółowy widok organizacji',
        'tabs'          => [
            'organisations' => 'Organizacje',
            'quests'        => 'Misje',
            'relations'     => 'Relacje',
        ],
        'title'         => 'Organizacja :name',
    ],
];
