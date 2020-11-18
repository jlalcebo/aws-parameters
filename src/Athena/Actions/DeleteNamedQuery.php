<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/18/20 12:04 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\Actions;

/**
 * Deletes the named query if you have access to the workgroup in which the query was saved.
 *
 * @package GTMC\Aws\Parameters\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_DeleteNamedQuery.html
 */
class DeleteNamedQuery extends GetNamedQuery
{
    /**
     * The unique ID of the query to delete.
     *
     * @var string
     */
    public $namedQueryId;
}
