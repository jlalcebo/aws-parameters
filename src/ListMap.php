<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/17/20 10:24 AM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters;

use stdClass;

/**
 * This class implements maps using a list-based data structure.
 *
 * @package GTMC\Aws\ListMap
 */
class ListMap extends stdClass
{
    /**
     * @param  array  $items
     */
    public function __construct(array $items = [])
    {
        foreach ($items as $key => $value) {
            $this->{$key} = $value;
        }
    }

    /**
     * Append a new element to current list.
     *
     * @param $key
     * @param $value
     * @return $this
     */
    public function append($key, $value): self
    {
        $this->{$key} = $value;
        return $this;
    }
}
