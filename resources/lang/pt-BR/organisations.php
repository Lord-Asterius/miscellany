<?php

return [
    'create'        => [
        'description'   => 'Criar uma nova organização',
        'success'       => 'Organização \':name\' criada.',
        'title'         => 'Criar nova organização',
    ],
    'destroy'       => [
        'success'   => 'Organização \':name\' removida.',
    ],
    'edit'          => [
        'success'   => 'Organização \':name\' atualizada.',
        'title'     => 'Editar Organização :name',
    ],
    'fields'        => [
        'image'         => 'Imagem',
        'location'      => 'Local',
        'members'       => 'Membros',
        'name'          => 'Nome',
        'organisation'  => 'Organização Primária',
        'organisations' => 'Suborganizações',
        'relation'      => 'Relação',
        'type'          => 'Tipo',
    ],
    'helpers'       => [
        'descendants'   => 'Esta lista contém todas organizações que descendem desta organização, e não apenas aquelas diretamente relacionadas a ela.',
        'nested'        => 'Quando em Visão Aninhada, você pode ver suas Organizações de uma maneira aninhada. Organizações que não fazem parte de uma Organização Primária serão mostradas por padrão. Organizações com suborganizações podem ser clicadas para ver essas suborganizações. Você pode continuar clicando até que não haja mais suborganizações para ver.',
        'nested_parent' => 'Mostrando as organizações de :parent.',
        'nested_without'=> 'Mostrando todas as organizações que não tem uma organização-pai. Clique em uma linha para ver as organizações-filhos.',
    ],
    'index'         => [
        'add'           => 'Nova Organização',
        'description'   => 'Gerencie as organizações de :name.',
        'header'        => 'Organizações de :name',
        'title'         => 'Organizações',
    ],
    'members'       => [
        'actions'       => [
            'add'   => 'Adicionar um membro',
        ],
        'create'        => [
            'description'   => 'Adicionar um membro à organização',
            'success'       => 'Membro adicionado à organização',
            'title'         => 'Novo Membro da Organização para :name',
        ],
        'destroy'       => [
            'success'   => 'Membro removido da organização',
        ],
        'edit'          => [
            'success'   => 'Membro da organização atualizado.',
            'title'     => 'Atualizar Membro para :name',
        ],
        'fields'        => [
            'character'     => 'Personagem',
            'organisation'  => 'Organização',
            'parent'        => 'Superior',
            'pinned'        => 'Fixado',
            'role'          => 'Função',
            'status'        => 'Status do Membro',
        ],
        'helpers'       => [
            'all_members'   => 'Todos personagens que são membros desta Organização e suas suborganizações',
            'members'       => 'Todos personagens que são membros desta Organização.',
            'pinned'        => 'Escolha se este membro deve ser mostrado na seção fixada da visão geral de suas entidades associadas.',
        ],
        'pinned'        => [
            'both'          => 'Ambos',
            'character'     => 'Personagem',
            'none'          => 'Nenhum',
            'organisation'  => 'Organização',
        ],
        'placeholders'  => [
            'character' => 'Escolha um personagem',
            'parent'    => 'Quem é o superior desse membro',
            'role'      => 'Líder, Membro, Alto Septão, Mestre em Espionagem',
        ],
        'status'        => [
            'active'    => 'Membro ativo',
            'inactive'  => 'Membro inativo',
            'unknown'   => 'Status desconhecido',
        ],
        'title'         => 'Membros da Organização :name',
    ],
    'organisations' => [
        'title' => 'Organizações da Organização :name',
    ],
    'placeholders'  => [
        'location'  => 'Escolha um local',
        'name'      => 'Nome da organização',
        'type'      => 'Culto, Gangue, Rebelião, Fanáticos',
    ],
    'quests'        => [
        'description'   => 'Missões das quais a Organização faz parte.',
        'title'         => 'Missões dadad pela Organização :name',
    ],
    'show'          => [
        'description'   => 'Uma visão detalhada de uma organização',
        'tabs'          => [
            'members'       => 'Membros',
            'organisations' => 'Organizações',
            'quests'        => 'Missões',
            'relations'     => 'Relações',
        ],
        'title'         => 'Organização :name',
    ],
];
