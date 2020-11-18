<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/17/20 1:49 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\DynamoDB\DataTypes;

use GTMC\Aws\Parameters\Parameter;

/**
 * Represents attributes that are copied (projected) from the table into an index. These are in addition
 * to the primary key attributes and index key attributes, which are automatically projected.
 *
 * @package GTMC\Aws\ListMap\DynamoDB\DataTypes
 * @see https://docs.aws.amazon.com/amazondynamodb/latest/APIReference/API_Projection.html
 */
class Projection extends Parameter
{
    /**
     * All of the table attributes are projected into the index.
     *
     * @var string
     */
    public const PROJECTION_TYPE_ALL = 'ALL';

    /**
     * Only the index and primary keys are projected into the index.
     *
     * @var string
     */
    public const PROJECTION_TYPE_KEYS_ONLY = 'KEYS_ONLY';

    /**
     * In addition to the attributes described in KEYS_ONLY, the secondary index will include
     * other non-key attributes that you specify.
     *
     * @var string
     */
    public const PROJECTION_TYPE_INCLUDE = 'INCLUDE';

    /**
     * Represents the non-key attribute names which will be projected into the index.
     *
     *   Constraints: Minimum number of 1 item. Maximum number of 20 items.
     *
     * @var string[]
     */
    public $nonKeyAttributes;

    /**
     * The set of attributes that are projected into the index.
     *
     *   Valid Values:
     *     - ALL: All of the table attributes are projected into the index.
     *     - KEYS_ONLY: Only the index and primary keys are projected into the index.
     *     - INCLUDE: In addition to the attributes described in KEYS_ONLY, the secondary
     *                index will include other non-key attributes that you specify.
     *
     * @var string
     */
    public $projectionType;

    /**
     * Projection constructor.
     * @param  string[]  $nonKeyAttributes
     * @param  string|null  $projectionType
     */
    public function __construct(array $nonKeyAttributes = null, string $projectionType = null)
    {
        $this->nonKeyAttributes = $nonKeyAttributes;
        $this->projectionType = strtoupper((string)$projectionType);
    }
}
