<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/16/20 1:43 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\Actions;

use GTMC\Aws\Parameters\Parameter;

/**
 * Returns a database object for the specified database and data catalog.
 *
 * @package GTMC\Aws\ListMap\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_GetDatabase.html
 */
class GetDatabase extends Parameter
{
    /**
     * The name of the data catalog that contains the database to return.
     *
     * @var string
     */
    public $catalogName;

    /**
     * The name of the database to return.
     *
     * @var string
     */
    public $databaseName;

    /**
     * @param  string  $catalogName  The name of the data catalog that contains the database to return.
     * @param  string  $databaseName  The name of the database to return.
     */
    public function __construct(string $catalogName, string $databaseName)
    {
        $this->catalogName = $catalogName;
        $this->databaseName = $databaseName;
    }
}
