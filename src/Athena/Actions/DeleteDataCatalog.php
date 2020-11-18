<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/18/20 11:45 AM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\Actions;

/**
 * Deletes a data catalog.
 *
 * @package GTMC\Aws\Parameters\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_DeleteDataCatalog.html
 */
class DeleteDataCatalog extends GetDataCatalog
{
    /**
     * The name of the data catalog to delete.
     *
     *   Length Constraints: Minimum length of 1. Maximum length of 256.
     *   Pattern: [\u0020-\uD7FF\uE000-\uFFFD\uD800\uDC00-\uDBFF\uDFFF\t]*
     *
     * @var string
     */
    public $name;
}
