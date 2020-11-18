<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/16/20 4:18 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\Actions;

use GTMC\Aws\Parameters\Parameter;

/**
 * Returns the specified data catalog.
 *
 * @package GTMC\Aws\ListMap\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_GetDataCatalog.html
 */
class GetDataCatalog extends Parameter
{
    /**
     * The name of the data catalog to return.
     *
     *   Pattern: [\u0020-\uD7FF\uE000-\uFFFD\uD800\uDC00-\uDBFF\uDFFF\t]*
     *   Constraints: Minimum length of 1. Maximum length of 256.
     *
     * @var string
     */
    public $name;

    /**
     * @param  string  $name  The name of the data catalog to return.
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
