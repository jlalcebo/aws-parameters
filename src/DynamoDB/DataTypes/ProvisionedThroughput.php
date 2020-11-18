<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/17/20 1:55 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\DynamoDB\DataTypes;

use GTMC\Aws\Parameters\Parameter;

/**
 * Represents the provisioned throughput settings for a specified table or index. The settings
 * can be modified using the UpdateTable operation.
 *
 * @package GTMC\Aws\ListMap\DynamoDB\DataTypes
 * @see https://docs.aws.amazon.com/amazondynamodb/latest/APIReference/API_ProvisionedThroughput.html
 */
class ProvisionedThroughput extends Parameter
{
    /**
     * The maximum number of strongly consistent reads consumed per second before DynamoDB returns
     * a ThrottlingException.
     *
     *   Valid Range: Minimum value of 1.
     *
     * @var int
     */
    public $readCapacityUnits;

    /**
     * The maximum number of writes consumed per second before DynamoDB returns a ThrottlingException.
     *
     *   Valid Range: Minimum value of 1.
     *
     * @var int
     */
    public $writeCapacityUnits;

    /**
     * @param  int  $readCapacityUnits  The maximum number of strongly consistent reads consumed per
     * second before DynamoDB returns a ThrottlingException.
     * @param  int  $writeCapacityUnits  The maximum number of writes consumed per second before DynamoDB
     * returns a ThrottlingException.
     */
    public function __construct(int $readCapacityUnits, int $writeCapacityUnits)
    {
        $this->readCapacityUnits = max(abs($readCapacityUnits), 1);
        $this->writeCapacityUnits = max(abs($writeCapacityUnits), 1);
    }
}
