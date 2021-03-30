<?php

return [
    'actions'       => [
        'entry' => 'Напишите отдельную статью для этой метки.',
        'remove'=> 'Удалить метку',
        'update'=> 'Редактировать метку',
    ],
    'create'        => [
        'success'   => 'Метка ":name" создана',
        'title'     => 'Новая метка',
    ],
    'delete'        => [
        'success'   => 'Метка ":name" удалена',
    ],
    'edit'          => [
        'success'   => 'Метка ":name" обновлена',
        'title'     => 'Редактирование метки :name',
    ],
    'fields'        => [
        'circle_radius' => 'Радиус круга',
        'copy_elements' => 'Копировать элементы',
        'custom_icon'   => 'Своя иконка',
        'custom_shape'  => 'Настройка формы',
        'font_colour'   => 'Цвет иконки',
        'group'         => 'Группа меток',
        'is_draggable'  => 'Подвижная',
        'latitude'      => 'Широта',
        'longitude'     => 'Долгота',
        'opacity'       => 'Непрозрачность',
        'pin_size'      => 'Размер метки',
        'polygon_style' => [
            'stroke'            => 'Цвет линий',
            'stroke-opacity'    => 'Непрозрачность линий',
            'stroke-width'      => 'Ширина линий',
        ],
    ],
    'helpers'       => [
        'base'                      => 'Чтобы добавить метку, нажмите в любое место на карте.',
        'copy_elements'             => 'Копирование групп, слоев и меток.',
        'copy_elements_to_campaign' => 'Копирование групп, слоев и меток. Метки, связанные с объектами, станут обычными метками.',
        'custom_icon'               => 'Скопируйте HTML иконки с :fontawesome или :rpgawesome или своей SVG иконки.',
        'custom_radius'             => 'Выберите вариант "Другой" в списке размеров, чтобы задать другой размер.',
        'draggable'                 => 'Подвижные метки можно двигать в режиме исследования.',
        'label'                     => 'Надпись отображается на карте в виде блока текста. Его содержание определяется названием метки или объекта.',
        'polygon'                   => [
            'edit'  => 'Нажмите на карту, чтобы добавить позицию к координатам фигуры.',
            'new'   => 'Перемещайте метку на карте, чтобы сохранить позицию для фигуры.',
        ],
    ],
    'icons'         => [
        'custom'        => 'Особая',
        'entity'        => 'Объект',
        'exclamation'   => 'Восклицание',
        'marker'        => 'Метка',
        'question'      => 'Вопрос',
    ],
    'placeholders'  => [
        'custom_shape'  => '100,100 200,240 340,110',
        'name'          => 'Обязательно, если не выбран объект',
    ],
    'shapes'        => [
        '0' => 'Круг',
        '1' => 'Квадрат',
        '2' => 'Треугольник',
        '3' => 'Особая',
    ],
    'sizes'         => [
        '0' => 'Крошечная',
        '1' => 'Обычная',
        '2' => 'Маленькая',
        '3' => 'Большая',
        '4' => 'Огромная',
    ],
    'tabs'          => [
        'circle'    => 'Круг',
        'label'     => 'Надпись',
        'marker'    => 'Метка',
        'polygon'   => 'Фигура',
    ],
];
