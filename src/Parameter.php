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
use ReflectionProperty;
use Throwable;

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
     * @throws Throwable
     */
    public function toArray(): array
    {
        return $this->jsonSerialize();
    }

    /**
     * Specify data which should be serialized to JSON.
     *
     * @throws Throwable
     */
    public function jsonSerialize()
    {
        return $this->filterRecursive(
            array_reduce(
                (new ReflectionClass($this))
                    ->getProperties(ReflectionProperty::IS_PUBLIC),
                function ($carry, ReflectionProperty $item) {
                    $value = $this->{$item->name};

                    if ($value instanceof JsonSerializable) {
                        $value = $value->jsonSerialize();
                    } elseif (is_array($value)) {
                        foreach ($value as $key => $subItem) {
                            if ($subItem instanceof JsonSerializable) {
                                $value[$key] = $subItem->jsonSerialize();
                            }
                        }
                    }

                    $carry[ucfirst($item->name)] = $value;
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
                $value = $this->filterRecursive($value, $callback, $flag);
            }
        }
        return array_filter($input, $callback, $flag);
    }
}
