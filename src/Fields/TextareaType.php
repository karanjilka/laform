<?php

namespace  Karan\Laform\Fields;

class TextareaType extends FormField
{
    /**
     * {@inheritdoc}
     */
    public function getField($name, $type, $options)
    {
        $compact = compact('type', 'name', 'options');
        echo view('laform::textareatype', $compact)->render();
    }
}
