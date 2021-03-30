<?php

return [
    'characters'    => [
        'description'   => 'Personages op de locatie.',
        'title'         => 'Locatie :name Personages',
    ],
    'create'        => [
        'description'   => 'Maak een nieuwe locatie',
        'success'       => 'Locatie \':name\' gemaakt.',
        'title'         => 'Nieuwe Locatie',
    ],
    'destroy'       => [
        'success'   => 'Locatie \':name\' verwijderd.',
    ],
    'edit'          => [
        'success'   => 'Locatie \':name\' bijgewerkt.',
        'title'     => 'Wijzig Locatie :name',
    ],
    'events'        => [
        'description'   => 'Gebeurtenissen die op de locatie hebben plaatsgevonden.',
        'title'         => 'Locatie :name Gebeurtenissen',
    ],
    'families'      => [
        'title' => 'Locatie :name Families',
    ],
    'fields'        => [
        'characters'        => 'Personages',
        'image'             => 'Afbeelding',
        'is_map_private'    => 'Privé Kaart',
        'location'          => 'Bovenliggende Locatie',
        'locations'         => 'Locaties',
        'map'               => 'Kaart',
        'name'              => 'Naam',
        'relation'          => 'Relatie',
        'type'              => 'Type',
    ],
    'helpers'       => [
        'characters'        => 'Bekijk alle personages op deze locatie en de gerelateerde locaties, of alleen degenen die zich hier direct bevinden.',
        'descendants'       => 'This list contains all locations which are descendants of this location, not only those directly under it.',
        'families'          => 'Locaties kunnen de zetel zijn van machtige families.',
        'map'               => 'Door een kaart aan een locatie toe te voegen, kan je "Punten" op de kaart plaatsen, zodat je kunt linken naar andere entiteiten in de campaign.',
        'map_deprecated_2'  => 'Kaarten zijn nu hun eigen module! Oude kaarten kunnen nog steeds worden bijgewerkt, maar alle nieuwe kaarten gaan naar de nieuwe Kaarten module.',
        'nested'            => 'In geneste weergave kun je jouw locaties op een geneste manier bekijken. Locaties zonder bovenliggende locatie worden standaard weergegeven. Locaties met gerelateerden kan op geklikt worden om die gerelateerden te bekijken. Je kunt blijven klikken totdat er geen gerelateerden meer te zien zijn.',
        'organisations'     => 'Bekijk alle organisaties op deze locatie en de bijbehorende gerelateerde locaties, of alleen die direct hier zijn gevestigd.',
    ],
    'hints'         => [
        'is_map_private'    => 'Een privékaart is alleen zichtbaar voor leden van de campaign\'s \'Beheerder\'.',
    ],
    'index'         => [
        'actions'       => [
            'explore_view'  => 'Geneste Weergave',
        ],
        'add'           => 'Nieuwe Locatie',
        'description'   => 'Beheer de locaties van :name',
        'header'        => 'Locaties in :name',
        'title'         => 'Locaties',
    ],
    'items'         => [
        'description'   => 'Voorwerpen die zich op of vanaf de locatie bevinden.',
        'title'         => 'Locatie :name Voorwerpen',
    ],
    'journals'      => [
        'description'   => 'Logboeken die op de locatie zijn geschreven.',
        'title'         => 'Locatie :name Logboeken',
    ],
    'locations'     => [
        'description'   => 'Locaties op de locatie.',
        'title'         => 'Locatie :name Locaties',
    ],
    'map'           => [
        'actions'   => [
            'admin_mode'        => 'Schakel de Bewerking Modus in',
            'big'               => 'Volledige Weergave',
            'confirm_delete'    => 'Weet je zeker dat je dit kaartpunt wilt verwijderen?',
            'download'          => 'Download',
            'points'            => 'Wijzig Punten',
            'toggle_hide'       => 'Verberg Punten',
            'toggle_show'       => 'Toon Punten',
            'view_mode'         => 'Terug naar Kijk Modus',
            'zoom_in'           => 'Zoom in',
            'zoom_out'          => 'Zoom Uit',
            'zoom_reset'        => 'Zoom Reset',
        ],
        'helper'    => 'Klik op de kaart om een nieuw punt aan een locatie toe te voegen, of klik op een bestaand punt om het te wijzigen of te verwijderen.',
        'helpers'   => [
            'admin' => 'Activeer deze optie om ergens op de kaart te kunnen klikken om nieuwe punten toe te voegen, op punten te klikken om ze te bewerken of ze te verplaatsen.',
            'info'  => 'Meer info over kaarten.',
            'label' => 'Dit punt is een label. Niets meer niets minder.',
            'view'  => 'Klik op een kaart punt om de details ervan te bekijken. Gebruik Ctrl+Zoom om in en uit te zoomen op de kaart.',
        ],
        'legend'    => 'Legenda',
        'modal'     => [
            'submit'    => 'Toevoegen',
            'title'     => 'Doelwit van nieuw punt',
        ],
        'no_map'    => 'Je kunt een kaart naar deze locatie uploaden tijdens het bewerken. Zodra een kaart is verstrekt, wordt deze hier weergegeven.',
        'points'    => [
            'empty_label'   => 'Naamloos Punt',
            'fields'        => [
                'axis_x'    => 'X-as',
                'axis_y'    => 'Y-as',
                'colour'    => 'Achtergrond kleur',
                'icon'      => 'Pictogram',
                'name'      => 'Label',
                'shape'     => 'Vorm',
                'size'      => 'Grootte',
            ],
            'helpers'       => [
                'location_or_name'  => 'Een kaart punt kan naar een bestaande entiteit verwijzen of alleen een label hebben.',
            ],
            'icons'         => [
                'anchor'        => 'Anker',
                'anvil'         => 'Aambeeld',
                'apple'         => 'Appel',
                'aura'          => 'Aura',
                'axe'           => 'Bijl',
                'beer'          => 'Bier',
                'biohazard'     => 'Biohazard',
                'book'          => 'Boek',
                'bridge'        => 'Brug',
                'campfire'      => 'Kampvuur',
                'candle'        => 'Kaars',
                'capitol'       => 'Hoofdstad',
                'castle-emblem' => 'Kasteel',
                'cat'           => 'Kat',
                'cheese'        => 'Kaas',
                'cog'           => 'Tandwiel',
                'crown'         => 'Kroon',
                'dead-tree'     => 'Dode Boom',
                'diamond'       => 'Diamant',
                'dragon'        => 'Draak',
                'emerald'       => 'Smaragd',
                'entity'        => 'Doel Entiteit Afbeelding',
                'fire'          => 'Vuur',
                'flask'         => 'Flacon',
                'flower'        => 'Bloem',
                'horseshoe'     => 'Hoefijzer',
                'hourglass'     => 'Zandloper',
                'hydra'         => 'Hydra',
                'kaleidoscope'  => 'Caleidoscoop',
                'key'           => 'Sleutel',
                'lever'         => 'Hendel',
                'meat'          => 'Vlees',
                'octopus'       => 'Octopus',
                'palm-tree'     => 'Palmboom',
                'pin'           => 'Pin',
                'pine-tree'     => 'Dennenboom',
                'player'        => 'Personage',
                'potion'        => 'Potion',
                'reactor'       => 'Reactor',
                'repair'        => 'Repareren',
                'sheep'         => 'Schaap',
                'shield'        => 'Schild',
                'skull'         => 'Schedel',
                'snake'         => 'Slang',
                'spades-card'   => 'Schoppen kaart',
                'sprout'        => 'Spruit',
                'sun'           => 'Zon',
                'tentacle'      => 'Tentakel',
                'toast'         => 'Toast',
                'tombstone'     => 'Grafsteen',
                'torch'         => 'Fakkel',
                'tower'         => 'Toren',
                'vase'          => 'Vaas',
                'water-drop'    => 'Water',
                'wooden-sign'   => 'Quest',
                'wrench'        => 'Moersleutel',
            ],
            'modal'         => 'Maak of bewerk een kaart punt',
            'placeholders'  => [
                'axis_x'    => 'Linker positie',
                'axis_y'    => 'Top positie',
                'name'      => 'Label van het punt als er geen locatie is opgegeven.',
            ],
            'return'        => 'Terug naar :name',
            'shapes'        => [
                'circle'    => 'Cirkel',
                'custom'    => 'Aangepast',
                'square'    => 'Vierkant',
            ],
            'sizes'         => [
                'custom'    => 'Custom',
                'huge'      => 'Heel Groot',
                'large'     => 'Groot',
                'small'     => 'Klein',
                'standard'  => 'Standaard',
                'tiny'      => 'Mini',
            ],
            'success'       => [
                'create'    => 'Locatie Kaart Punt gemaakt.',
                'delete'    => 'Locatie Kaart Punt verwijderd.',
                'update'    => 'Locatie Kaart Punt bijgewerkt.',
            ],
            'title'         => 'Locatie :name Kaart Punten',
        ],
        'success'   => 'Kaart Punten opgeslagen.',
    ],
    'maps'          => [
        'title' => 'Locatie :name Kaarten',
    ],
    'organisations' => [
        'title' => 'Locatie :name Organisaties',
    ],
    'panels'        => [
        'map'   => 'Kaart',
    ],
    'placeholders'  => [
        'location'  => 'Kies een bovenliggende locatie',
        'name'      => 'Naam van de locatie',
        'type'      => 'Stad, Koninkrijk, Ruïne',
    ],
    'quests'        => [
        'description'   => 'Quests waarvan de locatie deel uitmaakt.',
        'title'         => 'Locatie :name Quests',
    ],
    'show'          => [
        'description'   => 'Een gedetailleerd overzicht van een locatie',
        'tabs'          => [
            'characters'    => 'Personages',
            'events'        => 'Gebeurtenissen',
            'families'      => 'Families',
            'information'   => 'Informatie',
            'items'         => 'Voorwerpen',
            'journals'      => 'Logboeken',
            'locations'     => 'Locaties',
            'map'           => 'Kaart',
            'maps'          => 'Kaarten',
            'menu'          => 'Menu',
            'organisations' => 'Organisaties',
            'quests'        => 'Quests',
        ],
        'title'         => 'Locatie :name',
    ],
];
