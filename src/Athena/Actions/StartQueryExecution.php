<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/16/20 2:09 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\Actions;

use GTMC\Aws\Parameters\Athena\DataTypes\QueryExecutionContext;
use GTMC\Aws\Parameters\Athena\DataTypes\ResultConfiguration;
use GTMC\Aws\Parameters\Parameter;

/**
 * Runs the SQL query statements contained in the Query. Requires you to have access to the workgroup in
 * which the query ran. Running queries against an external catalog requires GetDataCatalog permission
 * to the catalog.
 *
 * @package GTMC\Aws\ListMap\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_StartQueryExecution.html
 */
class StartQueryExecution extends Parameter
{
    /**
     * A unique case-sensitive string used to ensure the request to create the query
     * is idempotent (executes only once). If another StartQueryExecution request is
     * received, the same response is returned and another query is not created.
     *
     *   Constraints: Minimum length of 32. Maximum length of 128.
     *
     * @var string
     */
    public $clientRequestToken;

    /**
     * The database within which the query executes.
     *
     * @var QueryExecutionContext
     */
    public $queryExecutionContext;

    /**
     * The SQL query statements to be executed.
     *
     *   Constraints: Minimum length of 1. Maximum length of 262144.
     *
     * @var string
     */
    public $queryString;

    /**
     * Specifies information about where and how to save the results of the query execution.
     * If the query runs in a workgroup, then workgroup's settings may override query settings.
     * This affects the query results location. The workgroup settings override is specified
     * in EnforceWorkGroupConfiguration (true/false) in the WorkGroupConfiguration.
     *
     * @var ResultConfiguration
     */
    public $resultConfiguration;

    /**
     * The name of the workgroup in which the query is being started.
     *
     *   Pattern: Must have to this constrain [a-zA-Z0-9._-]{1,128}
     *
     * @var string
     */
    public $workGroup;

    /**
     * @param  string  $queryString  The SQL query statements to be executed.
     * @param  string  $clientRequestToken  A unique case-sensitive string used to ensure the request to create
     * the query is idempotent (executes only once). If another StartQueryExecution request is received, the
     * same response is returned and another query is not created.
     * @param  QueryExecutionContext|null  $queryExecutionContext  The database and data catalog context in which
     * the query execution occurs.
     * @param  ResultConfiguration|null  $resultConfiguration  The location in Amazon S3 where query results are
     * stored and the encryption option, if any, used for query results. These are known as "client-side settings".
     * If workgroup settings override client-side settings, then the query uses the workgroup settings.
     * @param  string  $workGroup  The name of the workgroup in which the query is being started.
     */
    public function __construct(
        string $queryString,
        string $clientRequestToken = '',
        QueryExecutionContext $queryExecutionContext = null,
        ResultConfiguration $resultConfiguration = null,
        string $workGroup = ''
    ) {
        $this->queryString = $queryString;
        $this->clientRequestToken = $clientRequestToken;
        $this->queryExecutionContext = $queryExecutionContext;
        $this->resultConfiguration = $resultConfiguration;
        $this->workGroup = $workGroup;
    }
}
