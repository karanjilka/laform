<?php

namespace  Karan\Laform\Fields;

class CheckboxsType extends FormField
{
    /**
     * {@inheritdoc}
     */
    public function getField($name, $type, $options)
    {
        $simple_name = str_replace('[]', '', $name);
        $options['attr']['class']=str_replace('form-control','',$options['attr']['class']);
        $compact = compact('type', 'name', 'options','simple_name');
        echo view('laform::checkboxstype', $compact)->render();
    }
}
