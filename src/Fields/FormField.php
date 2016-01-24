<?php

namespace Karan\Laform\Fields;

/**
 * Class FormField.
 */
abstract class FormField
{
    /**
     * Get the template, can be config variable or view path.
     *
     * @return string
     */
    abstract protected function getField($name, $type, $options);
}
