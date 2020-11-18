<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/16/20 2:03 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\Actions;

/**
 * Returns table metadata for the specified catalog, database, and table.
 *
 * @package GTMC\Aws\ListMap\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_GetTableMetadata.html
 */
class GetTableMetadata extends GetDatabase
{
    /**
     * The name of the table for which metadata is returned.
     *
     * @var string
     */
    public $tableName;

    /**
     * @param  string  $catalogName  The name of the data catalog that contains the database to return.
     * @param  string  $databaseName  The name of the database to return.
     * @param  string  $tableName  The name of the table for which metadata is returned.
     */
    public function __construct(string $catalogName, string $databaseName, string $tableName)
    {
        parent::__construct($catalogName, $databaseName);
        $this->tableName = $tableName;
    }
}
