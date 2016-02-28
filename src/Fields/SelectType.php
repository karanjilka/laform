<?php

namespace  Karan\Laform\Fields;

class SelectType extends FormField
{
    /**
     * {@inheritdoc}
     */
    public function getField($name, $type, $options)
    {
        $compact = compact('type', 'name', 'options');
        echo view('laform::selecttype', $compact)->render();
    }
}
