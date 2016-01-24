<?php

namespace Karan\Laform;

use Form;

class Laform
{
    public function open($attributes)
    {
        echo Form::open($attributes);
    }

    public function close()
    {
        echo Form::close();
    }

    public function token()
    {
        echo Form::token();
    }

    public function model($model, $attributes)
    {
        echo Form::model($model, $attributes);
    }

    public function field($name, $type, $options = [])
    {
        $fields = config('laform.fields');
        $inputFields = config('laform.input_feilds');
        $options = $this->options($options);
        if (in_array($type, $inputFields)) {
            $class = $fields['input'];
            $field = new $class();
            $field->getField($name, $type, $options);
        } else {
            if (isset($fields[$type])) {
                $class = $fields[$type];
                $field = new $class();
                $field->getField($name, $type, $options);
            } else {
                echo $type.' field not found';
                exit;
            }
        }
    }

    protected function options($options)
    {
        $options['template'] = isset($options['template']) ? $options['template'] : config('laform.default_template');
        $options['prefix'] = isset($options['prefix']) ? $options['prefix'] : '';
        $options['suffix'] = isset($options['suffix']) ? $options['suffix'] : '';
        $options['field_prefix'] = isset($options['field_prefix']) ? $options['field_prefix'] : '';
        $options['field_suffix'] = isset($options['field_suffix']) ? $options['field_suffix'] : '';

        $options['wrapper'] = isset($options['wrapper']) ? $options['wrapper'] : true;
        $options['value'] = isset($options['value']) ? $options['value'] : null;
        $options['show_errors'] = isset($options['show_errors']) ? $options['show_errors'] : true;
        $options['wrapper_attr'] = isset($options['wrapper_attr']) ? $options['wrapper_attr'] : [];
        $options['error_attr'] = isset($options['error_attr']) ? $options['error_attr'] : [];
        $options['help_block']['attr'] = isset($options['help_block']['attr']) ? $options['help_block']['attr'] : [];
        $options['label_attr'] = isset($options['label_attr']) ? $options['label_attr'] : [];
        $options['attr'] = isset($options['attr']) ? $options['attr'] : [];

        $options['wrapper_attr'] = $this->defaultAttr($options['wrapper_attr'], 'class', 'wrapper_class');
        $options['error_attr'] = $this->defaultAttr($options['error_attr'], 'class', 'error_class');
        $options['help_block']['attr'] = $this->defaultAttr($options['help_block']['attr'], 'class', 'help_block_class');
        $options['label_attr'] = $this->defaultAttr($options['label_attr'], 'class', 'label_class');
        $options['attr'] = $this->defaultAttr($options['attr'], 'class', 'field_class');

        return $options;
    }

    protected function defaultAttr($attrs, $attr, $defaltValue)
    {
        $default_class = config('laform.defaults_class');
        $attrs[$attr] = isset($attrs[$attr]) ? $attrs[$attr] : '';
        $attrs[$attr] = $default_class[$defaltValue].' '.$attrs[$attr];

        return $attrs;
    }
}
