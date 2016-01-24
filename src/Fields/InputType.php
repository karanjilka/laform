<?php

namespace  Karan\Laform\Fields;

class InputType extends FormField
{
    /**
     * {@inheritdoc}
     */
    public function getField($name, $type, $options)
    {
        $compact = compact('type', 'name', 'options');
        echo view('laform::inputtype', $compact)->render();
    }
}
