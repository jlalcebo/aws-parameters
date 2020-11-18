<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/18/20 12:05 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\Actions;

use GTMC\Aws\Parameters\Parameter;

/**
 * Returns information about the workgroup with the specified name.
 *
 * @package GTMC\Aws\Parameters\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_GetWorkGroup.html
 */
class GetWorkGroup extends Parameter
{
    /**
     * The name of the workgroup.
     *
     *   Pattern: [a-zA-Z0-9._-]{1,128}
     *
     * @var string
     */
    public $workGroup;

    /**
     * @param  string  $workGroup The name of the workgroup.
     */
    public function __construct(string $workGroup)
    {
        $this->workGroup = $workGroup;
    }
}
