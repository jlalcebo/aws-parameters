<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/16/20 2:06 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\DataTypes;

use GTMC\Aws\Parameters\Parameter;

/**
 * The database and data catalog context in which the query execution occurs.
 *
 * @package GTMC\Aws\ListMap\Athena\DataTypes
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_QueryExecutionContext.html
 */
class QueryExecutionContext extends Parameter
{
    /**
     * The name of the data catalog used in the query execution.
     *
     *   Constraints: Minimum length of 1. Maximum length of 256.
     *
     * @var string
     */
    public $catalog;

    /**
     * The name of the database used in the query execution.
     *
     *   Constraints: Minimum length of 1. Maximum length of 255.
     *
     * @var string
     */
    public $database;

    /**
     * @param  string  $catalog  The name of the data catalog used in the query execution.
     * @param  string  $database  The name of the database used in the query execution.
     */
    public function __construct(string $catalog = '', string $database = '')
    {
        $this->catalog = $catalog;
        $this->database = $database;
    }
}
