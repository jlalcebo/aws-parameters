<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/17/20 1:46 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\DynamoDB\DataTypes;

/**
 * Represents the properties of a global secondary index.
 *
 * @package GTMC\Aws\ListMap\DynamoDB\DataTypes
 * @see https://docs.aws.amazon.com/amazondynamodb/latest/APIReference/API_GlobalSecondaryIndex.html
 */
class GlobalSecondaryIndex extends LocalSecondaryIndex
{
    /**
     * Represents the provisioned throughput settings for the specified global secondary index.
     *
     * @var ProvisionedThroughput
     */
    public $provisionedThroughput;

    /**
     * @inheritDoc
     * @param  ProvisionedThroughput|null  $provisionedThroughput  Represents the provisioned throughput settings
     * for the specified global secondary index.
     */
    public function __construct(
        string $indexName,
        array $keySchema,
        Projection $projection,
        ProvisionedThroughput $provisionedThroughput = null
    ) {
        parent::__construct($indexName, $keySchema, $projection);
        $this->provisionedThroughput = $provisionedThroughput;
    }
}
