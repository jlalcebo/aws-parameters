<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/16/20 2:36 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\DataTypes;

use GTMC\Aws\Parameters\Parameter;

/**
 * A query, where QueryString is the list of SQL query statements that comprise the query.
 *
 * @package GTMC\Aws\ListMap\Athena\DataTypes
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_NamedQuery.html
 */
class NamedQuery extends Parameter
{
    /**
     * The database to which the query belongs.
     *
     *   Constraints: Minimum length of 1. Maximum length of 255.
     *
     * @var string
     */
    public $database;

    /**
     * The query name.
     *
     *   Constraints: Minimum length of 1. Maximum length of 128.
     *
     * @var string
     */
    public $name;

    /**
     * The SQL query statements that comprise the query.
     *
     *   Constraints: Minimum length of 1. Maximum length of 262144.
     *
     * @var string
     */
    public $queryString;

    /**
     * The name of the workgroup that contains the named query.
     *
     *   Pattern: [a-zA-Z0-9._-]{1,128}
     *
     * @var string
     */
    public $workGroup;

    /**
     * The unique identifier of the query.
     *
     * @var string
     */
    public $namedQueryId;

    /**
     * The query description.
     *
     *   Constraints: Minimum length of 1. Maximum length of 1024.
     *
     * @var string
     */
    public $description;

    /**
     * @param  string  $database  The database to which the query belongs.
     * @param  string  $name  The query name.
     * @param  string  $queryString  The SQL query statements that comprise the query.
     * @param  string|null  $workGroup  The name of the workgroup that contains the named query.
     * @param  string|null  $namedQueryId  The unique identifier of the query.
     * @param  string|null  $description  The query description.
     */
    public function __construct(
        string $database,
        string $name,
        string $queryString,
        string $workGroup = null,
        string $namedQueryId = null,
        string $description = null
    ) {
        $this->database = $database;
        $this->name = $name;
        $this->queryString = $queryString;
        $this->workGroup = $workGroup;
        $this->namedQueryId = $namedQueryId;
        $this->description = $description;
    }
}
