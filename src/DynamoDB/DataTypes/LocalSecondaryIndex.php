<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/17/20 2:27 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\DynamoDB\DataTypes;

use GTMC\Aws\Parameters\Parameter;

/**
 * Represents the properties of a local secondary index.
 *
 * @package GTMC\Aws\ListMap\DynamoDB\DataTypes
 * @see https://docs.aws.amazon.com/amazondynamodb/latest/APIReference/API_LocalSecondaryIndex.html
 */
class LocalSecondaryIndex extends Parameter
{
    /**
     * The name of the global secondary index. The name must be unique among all other indexes on this table.
     *
     *   Pattern: [a-zA-Z0-9_.-]+
     *   Length Constraints: Minimum length of 3. Maximum length of 255.
     *
     * @var string
     */
    public $indexName;

    /**
     * The complete key schema for a global secondary index.
     *
     * @var KeySchemaElement[]
     */
    public $keySchema;

    /**
     * Represents attributes that are copied (projected) from the table into the global secondary index.
     * These are in addition to the primary key attributes and index key attributes, which are automatically projected.
     *
     * @var Projection
     */
    public $projection;

    /**
     * @param  string  $indexName  The name of the global secondary index. The name must be unique among all
     * other indexes on this table.
     * @param  KeySchemaElement[]  $keySchema  The complete key schema for a global secondary index.
     * @param  Projection  $projection  Represents attributes that are copied (projected) from the table into
     * the global secondary index. These are in addition to the primary key attributes and index key attributes,
     * which are automatically projected.
     */
    public function __construct(
        string $indexName,
        array $keySchema,
        Projection $projection
    ) {
        $this->indexName = $indexName;
        $this->keySchema = $keySchema;
        $this->projection = $projection;
    }
}
