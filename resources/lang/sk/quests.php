<?php

return [
    'characters'    => [
        'create'    => [
            'description'   => 'Pridať postave úlohu',
            'success'       => 'Postava pridaná k :name.',
            'title'         => 'Nová postava k :name',
        ],
        'destroy'   => [
            'success'   => 'Postava z úlohy :name odstránená.',
        ],
        'edit'      => [
            'description'   => 'Upraviť postavy úlohy',
            'success'       => 'Postava k úlohe :name upravená.',
            'title'         => 'Upraviť postavu k :name',
        ],
        'fields'    => [
            'character'     => 'Postava',
            'description'   => 'Popis',
        ],
        'title'     => 'Postavy v :name',
    ],
    'create'        => [
        'description'   => 'Vytvoriť novú úlohu',
        'success'       => 'Úloha :name vytvorená.',
        'title'         => 'Nová úloha',
    ],
    'destroy'       => [
        'success'   => 'Úloha :name odstránená.',
    ],
    'edit'          => [
        'description'   => 'Upraviť úlohu',
        'success'       => 'Úloha :name upravená.',
        'title'         => 'Upraviť úlohu :name',
    ],
    'elements'      => [
        'create'    => [
            'success'   => 'Objekt :entity pridaný k úlohe.',
            'title'     => 'Nový prvok pre :name',
        ],
        'destroy'   => [
            'success'   => 'Prvok úlohy :entity odstránený.',
        ],
        'edit'      => [
            'success'   => 'Prvok úlohy :entity aktualizovaný.',
            'title'     => 'Aktualizovať prvok úlohy pre :name',
        ],
        'fields'    => [
            'description'       => 'Popis',
            'entity_or_name'    => 'Zvoľ buď objekt kampane, alebo pomenuj tento prvok.',
            'name'              => 'Názov',
            'quest'             => 'Úloha',
        ],
        'title'     => 'Prvky úlohy :name',
    ],
    'fields'        => [
        'character'     => 'Zadávateľ/ka',
        'characters'    => 'Postavy',
        'copy_elements' => 'Kopírovať objekty priradené úlohám',
        'date'          => 'Dátum',
        'description'   => 'Popis',
        'image'         => 'Obrázok',
        'is_completed'  => 'Splnená',
        'items'         => 'Predmety',
        'locations'     => 'Miesta',
        'name'          => 'Názov',
        'organisations' => 'Organizácie',
        'quest'         => 'Nadradená úloha',
        'quests'        => 'Podradená úloha',
        'role'          => 'Rola',
        'type'          => 'Typ',
    ],
    'helpers'       => [
        'nested'        => 'Úlohy vieš usporiadať vnoreným zobrazením. Úlohy bez nadradenej úlohy sa zobrazia štandardným spôsobom. Úlohy s podradenými úlohami je možné rozkliknúť, dokiaľ nebudú existovať už žiadne ďalšie podradené úlohy.',
        'nested_parent' => 'Zobraziť úlohy :parent.',
        'nested_without'=> 'Zobraziť všetky úlohy, ktoré nemajú nadradenú úlohu. Kliknutím na riadok zobrazíš podradené úlohy.',
    ],
    'hints'         => [
        'quests'    => 'Sieť prepojených úloh je možné vytvoriť cez nadradenú úlohu.',
    ],
    'index'         => [
        'add'           => 'Nová úloha',
        'description'   => 'Spravuj podradené úlohy :name',
        'header'        => 'Úlohy podradené :name',
        'title'         => 'Úlohy',
    ],
    'items'         => [
        'create'    => [
            'description'   => 'Pridaj úlohe predmet.',
            'success'       => 'Predmet pridaný k :name.',
            'title'         => 'Nový predmet k :name',
        ],
        'destroy'   => [
            'success'   => 'Predmet z :name odstránený.',
        ],
        'edit'      => [
            'description'   => 'Upraviť predmet úlohy',
            'success'       => 'Predmet v :name upravený.',
            'title'         => 'Uprav predmet v :name',
        ],
        'fields'    => [
            'description'   => 'Popis',
            'item'          => 'Predmet',
        ],
        'title'     => 'Predmet v :name',
    ],
    'locations'     => [
        'create'    => [
            'description'   => 'Pridaj miesto k úlohe',
            'success'       => 'Miesto pridané k :name.',
            'title'         => 'Nové miesto k :name',
        ],
        'destroy'   => [
            'success'   => 'Miesto z :name odstránené.',
        ],
        'edit'      => [
            'description'   => 'Uprav miesto úlohy',
            'success'       => 'Miesto v :name upravené.',
            'title'         => 'Uprav miesto v :name',
        ],
        'fields'    => [
            'description'   => 'Popis',
            'location'      => 'Miesto',
        ],
        'title'     => 'Miesta v :name',
    ],
    'organisations' => [
        'create'    => [
            'description'   => 'Pridaj organizáciu k úlohe',
            'success'       => 'Organizácia pridaná k :name.',
            'title'         => 'Nová organizácia k :name',
        ],
        'destroy'   => [
            'success'   => 'Organizácia z :name odstránená.',
        ],
        'edit'      => [
            'description'   => 'Uprav organizáciu úlohy',
            'success'       => 'Organizácia v :name upravená.',
            'title'         => 'Uprav organizáciu v :name',
        ],
        'fields'    => [
            'description'   => 'Popis',
            'organisation'  => 'Organizácia',
        ],
        'title'     => 'Organizácie v :name',
    ],
    'placeholders'  => [
        'date'  => 'Reálny dátum zadania úlohy',
        'name'  => 'Názov úlohy',
        'quest' => 'Nadradená úloha',
        'role'  => 'Rola objektu v úlohe',
        'type'  => 'príbeh postavy, bočná úloha, hlavný dej',
    ],
    'show'          => [
        'actions'       => [
            'add_character'     => 'Pridať postavu',
            'add_element'       => 'Pridať prvok',
            'add_item'          => 'Pridať predmet',
            'add_location'      => 'Pridať miesto',
            'add_organisation'  => 'Pridať organizáciu',
        ],
        'description'   => 'Detailný náhľad na úlohu',
        'tabs'          => [
            'characters'    => 'Postavy',
            'elements'      => 'Prvky',
            'information'   => 'Informácie',
            'items'         => 'Predmety',
            'locations'     => 'Miesta',
            'organisations' => 'Organizácie',
            'quests'        => 'Úlohy',
        ],
        'title'         => 'Úloha :name',
    ],
];
