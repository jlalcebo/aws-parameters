<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/17/20 11:39 AM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\Actions;

use GTMC\Aws\Parameters\Parameter;

/**
 * Creates a named query in the specified workgroup. Requires that you have access to the workgroup.
 *
 * @package GTMC\Aws\ListMap\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_CreateNamedQuery.html
 */
class CreateNamedQuery extends Parameter
{
    /**
     * The database to which the query belongs.
     *
     *   Length Constraints: Minimum length of 1. Maximum length of 255.
     *
     * @var string
     */
    public $database;

    /**
     * The query name.
     *
     *   Length Constraints: Minimum length of 1. Maximum length of 128.
     *
     * @var string
     */
    public $name;

    /**
     * The contents of the query with all query statements.
     *
     *   Length Constraints: Minimum length of 1. Maximum length of 262144.
     *
     * @var string
     */
    public $queryString;

    /**
     * A unique case-sensitive string used to ensure the request to create the query is idempotent
     * (executes only once). If another CreateNamedQuery request is received, the same response is
     * returned and another query is not created. If a parameter has changed, for example, the
     * QueryString, an error is returned.
     *
     *   Length Constraints: Minimum length of 32. Maximum length of 128.
     *
     * @var string
     */
    public $clientRequestToken;

    /**
     * The query description.
     *
     *   Length Constraints: Minimum length of 1. Maximum length of 1024.
     *
     * @var string
     */
    public $description;

    /**
     * The name of the workgroup in which the named query is being created.
     *
     *   Pattern: [a-zA-Z0-9._-]{1,128}
     *
     * @var string
     */
    public $workGroup;

    /**
     * @param  string  $database  The database to which the query belongs.
     * @param  string  $name  The query name.
     * @param  string  $queryString  The contents of the query with all query statements.
     * @param  string|null  $workGroup  The name of the workgroup in which the named query is being created.
     * @param  string|null  $description  The query description.
     * @param  string|null  $clientRequestToken  A unique case-sensitive string used to ensure the request to
     * create the query is idempotent (executes only once). If another CreateNamedQuery request is received,
     * the same response is returned and another query is not created. If a parameter has changed, for example,
     * the QueryString, an error is returned.
     */
    public function __construct(
        string $database,
        string $name,
        string $queryString,
        string $workGroup = null,
        string $description = null,
        string $clientRequestToken = null
    ) {
        $this->database = $database;
        $this->name = $name;
        $this->queryString = $queryString;
        $this->workGroup = $workGroup;
        $this->description = $description;
        $this->clientRequestToken = $clientRequestToken;
    }
}
