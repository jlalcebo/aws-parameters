<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/16/20 4:08 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\Actions;

use GTMC\Aws\Parameters\Parameter;

/**
 * Returns the details of a single query execution or a list of up to 50 query executions, which
 * you provide as an array of query execution ID strings. Requires you to have access to the
 * workgroup in which the queries ran. To get a list of query execution IDs, use ListQueryExecutions:WorkGroup.
 * Query executions differ from named (saved) queries. Use BatchGetNamedQueryInput to get details about named queries.
 *
 * @package GTMC\Aws\ListMap\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_BatchGetQueryExecution.html
 */
class BatchGetQueryExecution extends Parameter
{
    /**
     * An array of query execution IDs.
     *
     *   Constraints: Minimum number of 1 item. Maximum number of 50 items.
     *
     * @var string[]
     */
    public $queryExecutionIds;

    /**
     * @param  string[]  $queryExecutionIds  An array of query execution IDs.
     */
    public function __construct(array $queryExecutionIds)
    {
        $this->queryExecutionIds = $queryExecutionIds;
    }
}
