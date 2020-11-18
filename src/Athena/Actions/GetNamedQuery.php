<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/18/20 12:02 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\Actions;

use GTMC\Aws\Parameters\Parameter;

/**
 * Returns information about a single query. Requires that you have access
 * to the workgroup in which the query was saved.
 *
 * @package GTMC\Aws\Parameters\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_GetNamedQuery.html
 */
class GetNamedQuery extends Parameter
{
    /**
     * The unique ID of the query. Use ListNamedQueries to get query IDs.
     *
     * @var string
     */
    public $namedQueryId;

    /**
     * @param  string  $namedQueryId The unique ID of the query. Use ListNamedQueries to get query IDs.
     */
    public function __construct(string $namedQueryId)
    {
        $this->namedQueryId = $namedQueryId;
    }
}
