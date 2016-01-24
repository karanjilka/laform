<?php

return [

    //bootstrap-horizontal
    //bootstrap-vertical
    //plain
    'default_template' => 'bootstrap-horizontal',

    'defaults_class' => [
        'wrapper_class' => 'form-group',
        'label_class' => 'control-label',
        'field_class' => 'form-control',
        'help_block_class' => 'help-block',
        'error_class' => 'text-danger',
    ],

    // fields
    'fields' => [
        'input' => 'Karan\Laform\Fields\InputType',
        'textarea' => 'Karan\Laform\Fields\TextareaType',
        'radio' => 'Karan\Laform\Fields\RadioType',
        'checkbox' => 'Karan\Laform\Fields\CheckboxType',
        'select' => 'Karan\Laform\Fields\SelectType',
        'checkboxs' => 'Karan\Laform\Fields\CheckboxsType',
        //'choice' => 'Karan\Laform\Fields\ChoiceType',
    ],

    'input_feilds' => [
        'text',
        'email',
        'url',
        'tel',
        'search',
        'password',
        'hidden',
        'number',
        'date',
        'file',
        'image',
        'color',
        'datetime-local',
        'month',
        'range',
        'time',
        'week',
    ],

];
