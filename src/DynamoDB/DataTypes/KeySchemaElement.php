<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/17/20 1:41 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\DynamoDB\DataTypes;

use GTMC\Aws\Parameters\Parameter;

/**
 * Represents a single element of a key schema. A key schema specifies the attributes that make up the
 * primary key of a table, or the key attributes of an index.
 *
 * @package GTMC\Aws\ListMap\DynamoDB\DataTypes
 * @see https://docs.aws.amazon.com/amazondynamodb/latest/APIReference/API_KeySchemaElement.html
 */
class KeySchemaElement extends Parameter
{
    /**
     *  Internal hash function to evenly distribute data items across partitions.
     *
     * @var string
     */
    public const KEY_TYPE_HASH = 'HASH';

    /**
     * Stores items with the same partition key physically close together.
     *
     * @var string
     */
    public const KEY_TYPE_RANGE = 'RANGE';

    /**
     * The name of a key attribute.
     *
     *   Length Constraints: Minimum length of 1. Maximum length of 255.
     *
     * @var string
     */
    public $attributeName;

    /**
     * The role that this key attribute will assume.
     *
     *   Valid Values:
     *     - HASH: The partition key of an item is also known as its hash attribute. The term "hash attribute"
     *             derives from DynamoDB's usage of an internal hash function to evenly distribute data items
     *             across partitions, based on their partition key values.
     *     - RANGE: The sort key of an item is also known as its range attribute. The term "range attribute"
     *              derives from the way DynamoDB stores items with the same partition key physically close
     *              together, in sorted order by the sort key value.
     *
     * @var string
     */
    public $keyType;

    /**
     * @param  string  $attributeName  The name of a key attribute.
     * @param  string  $keyType  The role that this key attribute will assume.
     */
    public function __construct(string $attributeName, string $keyType)
    {
        $this->attributeName = $attributeName;
        $this->keyType = strtoupper($keyType);
    }
}
