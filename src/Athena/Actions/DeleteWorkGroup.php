<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/18/20 12:07 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\Actions;

/**
 * Deletes the workgroup with the specified name. The primary workgroup cannot be deleted.
 *
 * @package GTMC\Aws\Parameters\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_DeleteWorkGroup.html
 */
class DeleteWorkGroup extends GetWorkGroup
{
    /**
     * The unique name of the workgroup to delete.
     *
     *   Pattern: [a-zA-Z0-9._-]{1,128}
     *
     * @var string
     */
    public $workGroup;

    /**
     * The option to delete the workgroup and its contents even if the workgroup contains
     * any named queries or query executions.
     *
     * @var bool
     */
    public $recursiveDeleteOption;

    /**
     * @param  string  $workGroup  The unique name of the workgroup to delete.
     * @param  bool  $recursiveDeleteOption  The option to delete the workgroup and its contents even if the
     * workgroup contains any named queries or query executions.
     */
    public function __construct(string $workGroup, bool $recursiveDeleteOption = null)
    {
        parent::__construct($workGroup);
        $this->recursiveDeleteOption = $recursiveDeleteOption;
    }
}
