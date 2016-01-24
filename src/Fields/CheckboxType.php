<?php

namespace  Karan\Laform\Fields;

class CheckboxType extends FormField
{
    /**
     * {@inheritdoc}
     */
    public function getField($name, $type, $options)
    {
        $options['attr']['class']=str_replace('form-control','',$options['attr']['class']);
        $compact = compact('type', 'name', 'options');
        echo view('laform::checkboxtype', $compact)->render();
    }
}
