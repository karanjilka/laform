<?php

namespace  Karan\Laform\Fields;

class SelectType extends FormField
{
    /**
     * {@inheritdoc}
     */
    public function getField($name, $type, $options)
    {
        $simple_name = $name;
        if (isset($options['attr']['multiple'])) {
            $simple_name = str_replace('[]', '', $name);
        }
        $compact = compact('type', 'name', 'options', 'simple_name');
        echo view('laform::selecttype', $compact)->render();
    }
}
