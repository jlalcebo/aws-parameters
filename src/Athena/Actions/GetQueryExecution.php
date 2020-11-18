<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/16/20 2:03 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\Actions;

use GTMC\Aws\Parameters\Parameter;

/**
 * Returns information about a single execution of a query if you have access to the workgroup in
 * which the query ran. Each time a query executes, information about the query execution is saved
 * with a unique ID.
 *
 * @package GTMC\Aws\ListMap\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_GetQueryExecution.html
 */
class GetQueryExecution extends Parameter
{
    /**
     * The unique ID of the query execution.
     *
     * @var string
     */
    public $queryExecutionId;

    /**
     * @param  string  $queryExecutionId  The unique ID of the query execution.
     */
    public function __construct(string $queryExecutionId)
    {
        $this->queryExecutionId = $queryExecutionId;
    }
}
