<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/17/20 2:46 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\DynamoDB\DataTypes;

use GTMC\Aws\Parameters\Parameter;

/**
 * Describes a tag. A tag is a key-value pair. You can add up to 50 tags to a single DynamoDB table.
 * AWS-assigned tag names and values are automatically assigned the aws: prefix, which the user cannot
 * assign. AWS-assigned tag names do not count towards the tag limit of 50. User-assigned tag names have
 * the prefix user: in the Cost Allocation Report. You cannot backdate the application of a tag.
 *
 * @package GTMC\Aws\ListMap\DynamoDB\DataTypes
 * @see https://docs.aws.amazon.com/amazondynamodb/latest/APIReference/API_Tag.html
 */
class Tag extends Parameter
{
    /**
     * The key of the tag. Tag keys are case sensitive. Each DynamoDB table can only have up to one tag with
     * the same key. If you try to add an existing tag (same key), the existing tag value will be updated to
     * the new value.
     *
     *   Constraints: Minimum length of 1. Maximum length of 128.
     *
     * @var string
     */
    public $key;

    /**
     * The value of the tag. Tag values are case-sensitive and can be null.
     *
     * @var  string
     */
    public $value;

    /**
     * @param  string|null  $key  The key of the tag. Tag keys are case sensitive. Each DynamoDB table can
     * only have up to one tag with the same key. If you try to add an existing tag (same key), the existing
     * tag value will be updated to the new value.
     * @param  string|null  $value  The value of the tag. Tag values are case-sensitive and can be null.
     */
    public function __construct(string $key, string $value)
    {
        $this->key = $key;
        $this->value = $value;
    }
}
