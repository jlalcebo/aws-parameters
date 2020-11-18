<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/16/20 2:07 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\DataTypes;

use GTMC\Aws\Parameters\Parameter;

/**
 * The amount of data scanned during the query execution and the amount of time that it took to
 * execute, and the type of statement that was run.
 *
 * @package GTMC\Aws\ListMap\Athena\DataTypes
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_QueryExecutionStatistics.html
 */
class QueryExecutionStatistics extends Parameter
{
    /**
     * The location and file name of a data manifest file. The manifest file is saved to
     * the Athena query results location in Amazon S3. The manifest file tracks files that
     * the query wrote to Amazon S3. If the query fails, the manifest file also tracks
     * files that the query intended to write. The manifest is useful for identifying orphaned
     * files resulting from a failed query.
     *
     * @var string
     */
    public $dataManifestLocation;

    /**
     * The number of bytes in the data that was queried.
     *
     * @var int
     */
    public $dataScannedInBytes;

    /**
     * The number of milliseconds that the query took to execute.
     *
     * @var int
     */
    public $engineExecutionTimeInMillis;

    /**
     * The number of milliseconds that Athena took to plan the query processing flow. This includes
     * the time spent retrieving table partitions from the data source. Note that because the query
     * engine performs the query planning, query planning time is a subset of engine processing time.
     *
     * @var int
     */
    public $queryPlanningTimeInMillis;

    /**
     * The number of milliseconds that the query was in your query queue waiting for resources.
     * Note that if transient errors occur, Athena might automatically add the query back to the queue.
     *
     * @var int
     */
    public $queryQueueTimeInMillis;

    /**
     * The number of milliseconds that Athena took to finalize and publish the query results after
     * the query engine finished running the query.
     *
     * @var int
     */
    public $serviceProcessingTimeInMillis;

    /**
     * The number of milliseconds that Athena took to run the query.
     *
     * @var int
     */
    public $totalExecutionTimeInMillis;

    /**
     * @param  string  $dataManifestLocation  The location and file name of a data manifest file. The manifest file
     * is saved to the Athena query results location in Amazon S3. The manifest file tracks files that the query
     * wrote to Amazon S3. If the query fails, the manifest file also tracks files that the query intended to write.
     * The manifest is useful for identifying orphaned files resulting from a failed query.
     * @param  int|null  $dataScannedInBytes  The number of bytes in the data that was queried.
     * @param  int|null  $engineExecutionTimeInMillis  The number of milliseconds that the query took to execute.
     * @param  int|null  $queryPlanningTimeInMillis  The number of milliseconds that Athena took to plan the query
     * processing flow. This includes the time spent retrieving table partitions from the data source. Note that
     * because the query engine performs the query planning, query planning time is a subset of engine processing time.
     * @param  int|null  $queryQueueTimeInMillis  The number of milliseconds that the query was in your query queue
     * waiting for resources. Note that if transient errors occur, Athena might automatically add the query back to
     * the queue.
     * @param  int|null  $serviceProcessingTimeInMillis  The number of milliseconds that Athena took to finalize and
     * publish the query results after the query engine finished running the query.
     * @param  int|null  $totalExecutionTimeInMillis  The number of milliseconds that Athena took to run the query.
     */
    public function __construct(
        string $dataManifestLocation = '',
        int $dataScannedInBytes = null,
        int $engineExecutionTimeInMillis = null,
        int $queryPlanningTimeInMillis = null,
        int $queryQueueTimeInMillis = null,
        int $serviceProcessingTimeInMillis = null,
        int $totalExecutionTimeInMillis = null
    ) {
        $this->dataManifestLocation = $dataManifestLocation;
        $this->dataScannedInBytes = $dataScannedInBytes;
        $this->engineExecutionTimeInMillis = $engineExecutionTimeInMillis;
        $this->queryPlanningTimeInMillis = $queryPlanningTimeInMillis;
        $this->queryQueueTimeInMillis = $queryQueueTimeInMillis;
        $this->serviceProcessingTimeInMillis = $serviceProcessingTimeInMillis;
        $this->totalExecutionTimeInMillis = $totalExecutionTimeInMillis;
    }
}
