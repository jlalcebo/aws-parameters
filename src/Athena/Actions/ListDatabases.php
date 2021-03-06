<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/16/20 2:05 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\Actions;

use GTMC\Aws\Parameters\Parameter;

/**
 * Lists the databases in the specified data catalog.
 *
 * @package GTMC\Aws\ListMap\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_ListDatabases.html
 */
class ListDatabases extends Parameter
{
    /**
     * The name of the data catalog that contains the databases to return.
     *
     *   Constraints: Minimum length of 1. Maximum length of 256.
     *
     * @var string
     */
    public $catalogName;

    /**
     * Specifies the maximum number of results to return.
     *
     *   Constraints: Minimum value of 1. Maximum value of 50.
     *
     * @var int
     */
    public $maxResults;

    /**
     * A token generated by the Athena service that specifies where to continue pagination
     * if a previous request was truncated. To obtain the next set of pages, pass in the
     * NextToken from the response object of the previous page call.
     *
     *   Constraints: Minimum length of 1. Maximum length of 1024.
     *
     * @var string
     */
    public $nextToken;

    /**
     * @param  string  $catalogName  The name of the data catalog that contains the databases to return.
     * @param  int|null  $maxResults  Specifies the maximum number of results to return.
     * @param  string  $nextToken  A token generated by the Athena service that specifies where to continue pagination
     * if a previous request was truncated. To obtain the next set of pages, pass in the
     * NextToken from the response object of the previous page call.
     */
    public function __construct(string $catalogName, int $maxResults = null, string $nextToken = '')
    {
        $this->catalogName = $catalogName;
        $this->maxResults = $maxResults;
        $this->nextToken = $nextToken;
    }
}
