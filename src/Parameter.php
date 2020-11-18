<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/16/20 1:41 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters;

use JsonSerializable;
use ReflectionClass;
use ReflectionException;
use ReflectionProperty;

/**
 * This is the base class for all parameter classes.
 *
 * @package GTMC\Aws\ListMap
 */
abstract class Parameter implements JsonSerializable
{
    /**
     * Converts the current parameter into a JSON serialized string.
     *
     * @return string
     */
    public function toJson(): string
    {
        return json_encode($this);
    }

    /**
     * Convert the current parameter into a plain PHP array.
     *
     * @return array
     * @throws ReflectionException
     */
    public function toArray(): array
    {
        return $this->jsonSerialize();
    }

    /**
     * Specify data which should be serialized to JSON.
     *
     * @throws ReflectionException
     */
    public function jsonSerialize()
    {
        return $this->filterRecursive(
            array_reduce(
                (new ReflectionClass($this))
                    ->getProperties(ReflectionProperty::IS_PUBLIC),
                function ($carry, ReflectionProperty $item) {
                    $value = $this->{$item->name};
                    $carry[ucfirst($item->name)] =
                        $value instanceof JsonSerializable
                            ? $value->jsonSerialize()
                            : $value;
                    return $carry;
                }
            ),
            static function ($val) {
                return !empty($val);
            }
        );
    }

    /**
     * Filters recursive elements of an array using a callback function.
     *
     * @param  array  $input
     * @param  callable|null  $callback
     * @param  int  $flag
     * @return array
     */
    protected function filterRecursive(array $input, callable $callback = null, int $flag = 0): array
    {
        foreach ($input as &$value) {
            if (is_array($value)) {
                $value = $this->filterRecursive($value, $callback);
            }
        }
        return array_filter($input, $callback, $flag);
    }
}
