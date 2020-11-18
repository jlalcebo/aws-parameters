<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/18/20 11:34 AM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\Actions;

use GTMC\Aws\Parameters\Athena\DataTypes\Tag;
use GTMC\Aws\Parameters\Athena\DataTypes\WorkGroupConfiguration;
use GTMC\Aws\Parameters\Parameter;

/**
 * Creates a workgroup with the specified name.
 *
 * @package GTMC\Aws\Parameters\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_CreateWorkGroup.html
 */
class CreateWorkGroup extends Parameter
{
    /**
     * The workgroup name.
     *
     *   Pattern: [a-zA-Z0-9._-]{1,128}
     *
     * @var string
     */
    public $name;

    /**
     * The configuration for the workgroup, which includes the location in Amazon S3 where query results are
     * stored, the encryption configuration, if any, used for encrypting query results, whether the Amazon
     * CloudWatch Metrics are enabled for the workgroup, the limit for the amount of bytes scanned (cutoff)
     * per query, if it is specified, and whether workgroup's settings (specified with EnforceWorkGroupConfiguration)
     * in the WorkGroupConfiguration override client-side settings.
     *
     * @var WorkGroupConfiguration
     */
    public $configuration;

    /**
     * The workgroup description.
     *
     *   Length Constraints: Minimum length of 0. Maximum length of 1024.
     *
     * @var string
     */
    public $description;

    /**
     * A array of Tag to add to the workgroup that is created.
     *
     * @var Tag[]
     */
    public $tags;

    /**
     * CreateWorkGroup constructor.
     * @param  string  $name The workgroup name.
     * @param  WorkGroupConfiguration|null  $configuration The configuration for the workgroup, which includes the
     * location in Amazon S3 where query results are stored, the encryption configuration, if any, used for encrypting
     * query results, whether the Amazon CloudWatch Metrics are enabled for the workgroup, the limit for the amount
     * of bytes scanned (cutoff) per query, if it is specified, and whether workgroup's settings (specified with
     * EnforceWorkGroupConfiguration) in the WorkGroupConfiguration override client-side settings.
     * @param  string|null  $description The workgroup description.
     * @param  Tag[]  $tags A array of Tag to add to the workgroup that is created.
     */
    public function __construct(
        string $name,
        WorkGroupConfiguration $configuration = null,
        string $description = null,
        array $tags = null
    ) {
        $this->name = $name;
        $this->configuration = $configuration;
        $this->description = $description;
        $this->tags = $tags;
    }
}
