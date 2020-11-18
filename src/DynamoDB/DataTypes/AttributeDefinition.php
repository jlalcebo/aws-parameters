<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/16/20 3:16 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\DynamoDB\DataTypes;

use GTMC\Aws\Parameters\Parameter;

/**
 * Represents an attribute for describing the key schema for the table and indexes.
 *
 * @package GTMC\Aws\ListMap\DynamoDB\DataTypes
 * @see https://docs.aws.amazon.com/amazondynamodb/latest/APIReference/API_AttributeDefinition.html
 */
class AttributeDefinition extends Parameter
{
    /**
     * Attribute is of type String
     *
     * @var string
     */
    public const ATTRIBUTE_TYPE_S = 'S';

    /**
     * Attribute is of type Number
     *
     * @var string
     */
    public const ATTRIBUTE_TYPE_N = 'N';

    /**
     * Attribute is of type Binary
     *
     * @var string
     */
    public const ATTRIBUTE_TYPE_B = 'B';

    /**
     * A name for the attribute.
     *
     *   Length Constraints: Minimum length of 1. Maximum length of 255.
     *
     * @var string
     */
    public $attributeName;

    /**
     * The data type for the attribute.
     *
     *   Valid Values:
     *     - S: The attribute is of type String
     *     - N: The attribute is of type Number
     *     - B: The attribute is of type Binary
     *
     * @var string
     */
    public $attributeType;

    /**
     * @param  string  $attributeName  A name for the attribute.
     * @param  string  $attributeType  The data type for the attribute.
     */
    public function __construct(string $attributeName, string $attributeType)
    {
        $this->attributeName = $attributeName;
        $this->attributeType = strtoupper($attributeType);
    }
}
