<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/16/20 2:08 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\DataTypes;

use GTMC\Aws\Parameters\Parameter;

/**
 * The completion date, current state, submission time, and state
 * change reason (if applicable) for the query execution.
 *
 * @package GTMC\Aws\ListMap\Athena\DataTypes
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_QueryExecutionStatus.html
 */
class QueryExecutionStatus extends Parameter
{
    /**
     * Query has been submitted to the service.
     *
     * @var string
     */
    public const STATE_QUEUED = 'QUEUED';

    /**
     * Query is in execution phase.
     *
     * @var string
     */
    public const STATE_RUNNING = 'RUNNING';

    /**
     * Query completed without errors.
     *
     * @var string
     */
    public const STATE_SUCCEEDED = 'SUCCEEDED';

    /**
     * Query experienced an error and did not complete processing.
     *
     * @var string
     */
    public const STATE_FAILED = 'FAILED';

    /**
     * User input interrupted query execution.
     *
     * @var string
     */
    public const STATE_CANCELLED = 'CANCELLED';

    /**
     * The date and time that the query completed, is unix timestamp.
     *
     * @var float
     */
    public $completionDateTime;

    /**
     * The state of query execution. QUEUED indicates that the query has been submitted to
     * the service, and Athena will execute the query as soon as resources are available.
     * RUNNING indicates that the query is in execution phase. SUCCEEDED indicates that
     * the query completed without errors. FAILED indicates that the query experienced an
     * error and did not complete processing. CANCELLED indicates that a user input
     * interrupted query execution.
     *
     *   Valid Values:
     *     - QUEUED
     *     - RUNNING
     *     - SUCCEEDED
     *     - FAILED
     *     - CANCELLED
     *
     * @var string
     */
    public $state;

    /**
     * Further detail about the status of the query.
     *
     * @var string
     */
    public $stateChangeReason;

    /**
     * The date and time that the query was submitted, is unix timestamp.
     *
     * @var float
     */
    public $submissionDateTime;

    /**
     * @param  float|null  $completionDateTime  The date and time that the query completed.
     * @param  string  $state  The state of query execution. QUEUED indicates that the query has been submitted to
     * the service, and Athena will execute the query as soon as resources are available. RUNNING indicates that
     * the query is in execution phase. SUCCEEDED indicates that the query completed without errors. FAILED indicates
     * that the query experienced an error and did not complete processing. CANCELLED indicates that a user input
     * interrupted query execution.
     * @param  string  $stateChangeReason  Further detail about the status of the query.
     * @param  float|null  $submissionDateTime  The date and time that the query was submitted.
     */
    public function __construct(
        float $completionDateTime = null,
        string $state = '',
        string $stateChangeReason = '',
        float $submissionDateTime = null
    ) {
        $this->completionDateTime = $completionDateTime;
        $this->state = $state;
        $this->stateChangeReason = $stateChangeReason;
        $this->submissionDateTime = $submissionDateTime;
    }
}
