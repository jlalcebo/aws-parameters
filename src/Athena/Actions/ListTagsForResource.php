<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/18/20 3:29 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\Actions;

use GTMC\Aws\Parameters\Parameter;

/**
 * Lists the tags associated with an Athena workgroup or data catalog resource.
 *
 * @package GTMC\Aws\Parameters\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_ListTagsForResource.html
 */
class ListTagsForResource extends Parameter
{
    /**
     * Lists the tags for the resource with the specified ARN.
     *
     *   Length Constraints: Minimum length of 1. Maximum length of 1011.
     *
     * @var string
     */
    public $resourceARN;

    /**
     * The maximum number of results to be returned per request that lists the tags for the resource.
     *
     *   Valid Range: Minimum value of 75.
     *
     * @var int
     */
    public $maxResults;

    /**
     * The token for the next set of results, or null if there are no additional results for this request,
     * where the request lists the tags for the resource with the specified ARN.
     *
     *   Length Constraints: Minimum length of 1. Maximum length of 1024.
     *
     * @var string
     */
    public $nextToken;

    /**
     * @param  string  $resourceARN Lists the tags for the resource with the specified ARN.
     * @param  int|null  $maxResults The maximum number of results to be returned per request
     * that lists the tags for the resource.
     * @param  string|null  $nextToken The token for the next set of results, or null if there are no
     * additional results for this request, where the request lists the tags for the resource with the specified ARN.
     */
    public function __construct(string $resourceARN, int $maxResults = null, string $nextToken = null)
    {
        $this->resourceARN = $resourceARN;
        $this->maxResults = $maxResults;
        $this->nextToken = $nextToken;
    }
}
