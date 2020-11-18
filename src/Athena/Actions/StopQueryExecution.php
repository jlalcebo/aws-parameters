<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/18/20 3:41 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\Actions;

use GTMC\Aws\Parameters\Parameter;

/**
 * Stops a query execution. Requires you to have access to the workgroup in which the query ran.
 *
 * @package GTMC\Aws\Parameters\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_StopQueryExecution.html
 */
class StopQueryExecution extends Parameter
{
    /**
     * The unique ID of the query execution to stop.
     *
     * @var string
     */
    public $queryExecutionId;

    /**
     * @param  string  $queryExecutionId The unique ID of the query execution to stop.
     */
    public function __construct(string $queryExecutionId)
    {
        $this->queryExecutionId = $queryExecutionId;
    }
}
