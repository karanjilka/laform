<?php

namespace  Karan\Laform\Fields;

class RadioType extends FormField
{
    /**
     * {@inheritdoc}
     */
    public function getField($name, $type, $options)
    {
        $options['attr']['class']=str_replace('form-control','',$options['attr']['class']);
        $compact = compact('type', 'name', 'options');
        echo view('laform::radiotype', $compact)->render();
    }
}
