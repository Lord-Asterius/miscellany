<?php

return [
    'actions'           => [
        'back'          => 'Indietro',
        'copy'          => 'Copia',
        'explore_view'  => 'Vista annidata',
        'export'        => 'Esporta',
        'find_out_more' => 'Scopri di più',
        'go_to'         => 'Vai a :name',
        'more'          => 'Più Azioni',
        'move'          => 'Muovi',
        'new'           => 'Nuovo',
        'next'          => 'Prossimo',
        'private'       => 'Privato',
        'public'        => 'Pubblico',
    ],
    'add'               => 'Aggiungi',
    'attributes'        => [
        'actions'       => [
            'add'               => 'Aggiungi un attributo',
            'add_block'         => 'Aggiungi un blocco',
            'add_checkbox'      => 'Aggiungi un checkbox',
            'apply_template'    => 'Applica un Template per gli Attributi',
            'manage'            => 'Gestisci',
        ],
        'create'        => [
            'description'   => 'Crea un nuovo attributo',
            'success'       => 'L\'Attributo :name è stato aggiunto a :entity',
            'title'         => 'Nuovo Attributo per :name',
        ],
        'destroy'       => [
            'success'   => 'L\'attributo :name è stato rimosso da :entity',
        ],
        'edit'          => [
            'description'   => 'Aggiorna un attributo esistente',
            'success'       => 'L\'attributo :name per :entity è stato aggiornato.',
            'title'         => 'Aggiorna l\'attributo per :name',
        ],
        'fields'        => [
            'attribute' => 'Attributo',
            'template'  => 'Template',
            'value'     => 'Valore',
        ],
        'index'         => [
            'success'   => 'Attributo aggiornato per :entity.',
            'title'     => 'Attributi per :name',
        ],
        'placeholders'  => [
            'attribute' => 'Numero di conquiste, Grado di Sfida, Iniziativa, Popolazione',
            'block'     => 'Nome del blocco',
            'checkbox'  => 'Nome del checkbox',
            'template'  => 'Seleziona un template',
            'value'     => 'Valore dell\'attributo',
        ],
        'template'      => [
            'success'   => 'Il Template di Attributi :name si applica su :entity',
            'title'     => 'Applica un Template degli Attributi per :name',
        ],
        'types'         => [
            'attribute' => 'Attributo',
            'block'     => 'Blocco',
            'checkbox'  => 'Checkbox',
        ],
        'visibility'    => [
            'private'   => 'Attributo visibile solamente ai membri del ruolo "Admin".',
            'public'    => 'Attributo visibile a tutti i membri.',
        ],
    ],
    'bulk'              => [
        'errors'    => [
            'admin' => 'Solo gli amministratori della campagna possono cambiare lo stato di visibilità delle entità.',
        ],
        'success'   => [
            'private'   => ':count entità è adesso privata|:count entità sono adesso private.',
            'public'    => ':count entità è adesso visibile|:count entità sono adesso visibili.',
        ],
    ],
    'cancel'            => 'Annulla',
    'click_modal'       => [
        'close'     => 'Chiudi',
        'confirm'   => 'Conferma',
        'title'     => 'Conferma la tua azione',
    ],
    'create'            => 'Crea',
    'delete_modal'      => [
        'close'         => 'Chiudi',
        'delete'        => 'Cancella',
        'description'   => 'Sei sicuro di vole rimuovere :tag?',
        'title'         => 'Conferma di cancellazione',
    ],
    'destroy_many'      => [
        'success'   => 'Cancellata :count entità|Cancellate :count entità.',
    ],
    'edit'              => 'Modifica',
    'errors'            => [
        'node_must_not_be_a_descendant' => 'Nodo non valido (tag, luogo padre): sarebbe un discendente di se stesso.',
    ],
    'events'            => [
        'hint'  => 'Quella visualizzata sotto è una lista di tutti i Calendari in cui questa entità è stata aggiunta usando "Aggiungi un evento ad un calendario".',
    ],
    'export'            => 'Esporta',
    'fields'            => [
        'attribute_template'    => 'Template di Attributi',
        'calendar'              => 'Calendario',
        'calendar_date'         => 'Data del Calendario',
        'character'             => 'Personaggio',
        'copy_attributes'       => 'Copia Attributo',
        'creator'               => 'Creatore',
        'dice_roll'             => 'Tiro di dado',
        'entity'                => 'Entità',
        'entry'                 => 'Dato inserito',
        'event'                 => 'Evento',
        'excerpt'               => 'Estratto',
        'family'                => 'Famiglia',
        'files'                 => 'Files',
        'image'                 => 'Immagine',
        'is_private'            => 'Privato',
        'item'                  => 'Oggetto',
        'location'              => 'Luogo',
        'name'                  => 'Nome',
        'organisation'          => 'Organizzazione',
        'race'                  => 'Razza',
        'tag'                   => 'Tag',
        'tags'                  => 'Tags',
    ],
    'files'             => [
        'actions'   => [
            'drop'      => 'Premi per Aggiungere o Trascina un file',
            'manage'    => 'Gestisci i file dell\'entità',
        ],
        'errors'    => [
            'max'   => 'Hai raggiunto il numero massimo di file (:max) per questa entità.',
        ],
        'files'     => 'Files Caricati',
        'hints'     => [
            'limit'         => 'Ogni entità può avere un massimo di :max files caricati.',
            'limitations'   => 'Formati supportati: jpg, png, gif, and pdf. Dimensione massima del file: :size',
        ],
        'title'     => 'File dell\'entità :name',
    ],
    'filter'            => 'Filtra',
    'filters'           => [
        'clear' => 'Pulisci i Filtri',
        'hide'  => 'Nascondi i Filtri',
        'show'  => 'Visualizza i Filtri',
        'title' => 'Filtri',
    ],
    'forms'             => [
        'actions'       => [
            'calendar'  => 'Aggiungi una data del calendario',
        ],
        'copy_options'  => 'Copia opzioni',
    ],
    'hidden'            => 'Nascosto',
    'hints'             => [
        'attribute_template'    => 'Applica un template per gli attributi direttamente quando si crea questa entità.',
        'calendar_date'         => 'La data di un calendario permette un semplice filtro nelle lista ed inoltre mantiene un evento nel calendario selezionato.',
        'image_limitations'     => 'Formati supportati: jpg, png and gif. Dimensione massima del file: :size.',
        'image_patreon'         => 'Aumentare la dimensione massima dei file?',
        'is_private'            => 'Nascondi dalle utenze non "Admin".',
        'map_limitations'       => 'Formati supportati:jpg, png, gif e svg. Dimensione massima del file: :size.',
    ],
    'history'           => [
        'created'   => 'Creato da <strong>:name</strong> <span data-toggle="tooltip" title=":realdate">:date</span>',
        'unknown'   => 'Sconosciuto',
        'updated'   => 'Ultima modifica da <strong>:name</strong> <span data-toggle="tooltip" title=":realdate">:date</span>',
    ],
    'image'             => [
        'error' => 'Noi non siamo stati in gradi di recuperare l\'immagine richiesta. Potrebbe essere che il sito web non ci permetta di scaricare l\'immagine (solitamente per Squarespace e DeviantArt) o che il link non sia più valido. Per favore controlla anche che la dimensione dell\'immagine non sia maggiore di :size.',
    ],
    'is_private'        => 'Questa entità è privata e non visibile alle utenze non amministratrici.',
    'linking_help'      => 'Come posso creare un collegamento ad altre entità inserite?',
    'manage'            => 'Gestisci',
    'move'              => [
        'description'   => 'Muovi questa entità in un\'altro posto',
        'errors'        => [
            'permission'        => 'Non sei autorizzato a creare entità di questo tipo nella campagna selezionata.',
            'same_campaign'     => 'Devi selezionare un\'altra campagna dove muore l\'entità.',
            'unknown_campaign'  => 'Campagna sconosciuta',
        ],
        'fields'        => [
            'campaign'  => 'Nuova campagna',
            'target'    => 'Nuovo tipo',
        ],
        'hints'         => [
            'campaign'  => 'Puoi anche provare a muovere questa entità in un\'altra campagna',
            'target'    => 'Per favore considera che alcuni dati potrebbero andare perso nel caso si muovesse un elemento da un tipo ad un\'altro.',
        ],
        'success'       => 'Entità \':name\' spostata.',
        'title'         => 'Sposta :name',
    ],
    'new_entity'        => [
        'error' => 'Per favore controlla i tuoi valori.',
        'fields'=> [
            'name'  => 'Nome',
        ],
        'title' => 'Nuova entità',
    ],
    'notes'             => [
        'actions'       => [
            'add'   => 'Aggiungi una nota',
        ],
        'create'        => [
            'description'   => 'Crea una nuova nota',
            'success'       => 'La nota \':name\' è stata assegnata all\'entità :entity.',
            'title'         => 'Nuova nota per :name',
        ],
        'destroy'       => [
            'success'   => 'La nota \':name\' per :entity rimossa.',
        ],
        'edit'          => [
            'description'   => 'Aggiorna una nota esistente',
            'success'       => 'La nota \':name\' per :entity aggiornata.',
            'title'         => 'Aggiorna la nota per :name',
        ],
        'fields'        => [
            'creator'   => 'Creatore',
            'entry'     => 'Elemento',
            'name'      => 'Nome',
        ],
        'hint'          => 'Le informazioni che non si adattano abbastanza ai campi standard di un\'entità o che devono essere mantenute private possono essere aggiunte come Note.',
        'index'         => [
            'title' => 'Note per :name',
        ],
        'placeholders'  => [
            'name'  => 'Nome della nota, dell\'osservazione o del commento.',
        ],
        'show'          => [
            'title' => 'Nota dell\'entità :name per :entity',
        ],
    ],
    'or_cancel'         => 'o <a href=":url">annulla</a>',
    'panels'            => [
        'appearance'            => 'Aspetto',
        'attribute_template'    => 'Template di attributi',
        'calendar_date'         => 'Data del Calendario',
        'entry'                 => 'Elemento',
        'general_information'   => 'Informazioni Generali',
        'move'                  => 'Sposta',
        'system'                => 'Sistema',
    ],
    'permissions'       => [
        'action'    => 'Azione',
        'actions'   => [
            'delete'    => 'Cancellazione',
            'edit'      => 'Modifica',
            'read'      => 'Lettura',
        ],
        'allowed'   => 'Permesso',
        'fields'    => [
            'member'    => 'Membro',
            'role'      => 'Ruolo',
        ],
        'helper'    => 'Utilizza questa interfaccia per specificare quali utenti e ruoli possono interagire con questa entità.',
        'success'   => 'Permessi salvati.',
        'title'     => 'Permessi',
    ],
    'placeholders'      => [
        'calendar'      => 'Seleziona un calendario',
        'character'     => 'Seleziona un personaggio',
        'entity'        => 'Entità',
        'event'         => 'Seleziona un evento',
        'family'        => 'Seleziona una famiglia',
        'image_url'     => 'Altrimenti puoi caricare un\'immagine da un URL',
        'item'          => 'Seleziona un\'oggetto',
        'location'      => 'Seleziona un luogo',
        'organisation'  => 'Seleziona un\'organizzazione',
        'race'          => 'Seleziona una razza',
        'tag'           => 'Seleziona un tag',
    ],
    'relations'         => [
        'actions'   => [
            'add'   => 'Aggiungi una relazione',
        ],
        'fields'    => [
            'location'  => 'Luogo',
            'name'      => 'Nomi',
            'relation'  => 'Relazioni',
        ],
        'hint'      => 'Le relazioni fra gli elementi possono essere impostate per rappresentare le loro connessioni.',
    ],
    'remove'            => 'Rimuovi',
    'rename'            => 'Rinomina',
    'save'              => 'Salva',
    'save_and_close'    => 'Salva e Chiudi',
    'save_and_new'      => 'Salva e Nuovo',
    'save_and_update'   => 'Salve ed Aggiorna',
    'save_and_view'     => 'Salva e Visualizza',
    'search'            => 'Cerca',
    'select'            => 'Seleziona',
    'tabs'              => [
        'attributes'    => 'Attributi',
        'calendars'     => 'Calendari',
        'events'        => 'Eventi',
        'menu'          => 'Menù',
        'notes'         => 'Note',
        'permissions'   => 'Permessi',
        'relations'     => 'Relazioni',
    ],
    'update'            => 'Aggiorna',
    'users'             => [
        'unknown'   => 'Sconosciuto',
    ],
    'view'              => 'Visualizza',
];
