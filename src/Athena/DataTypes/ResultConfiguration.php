<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/16/20 2:08 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\DataTypes;

use GTMC\Aws\Parameters\Parameter;

/**
 * The location in Amazon S3 where query results are stored and the encryption option, if any,
 * used for query results. These are known as "client-side settings". If workgroup settings
 * override client-side settings, then the query uses the workgroup settings.
 *
 * @package GTMC\Aws\ListMap\Athena\DataTypes
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_ResultConfiguration.html
 */
class ResultConfiguration extends Parameter
{
    /**
     * If query results are encrypted in Amazon S3, indicates the encryption option used
     * (for example, SSE-KMS or CSE-KMS) and key information. This is a client-side setting.
     * If workgroup settings override client-side settings, then the query uses the encryption
     * configuration that is specified for the workgroup, and also uses the location for
     * storing query results specified in the workgroup.
     *
     * @var EncryptionConfiguration
     */
    public $encryptionConfiguration;

    /**
     * The location in Amazon S3 where your query results are stored, such as s3://path/to/query/bucket/.
     * To run the query, you must specify the query results location.
     *
     * @var string
     */
    public $outputLocation;

    /**
     * @param  EncryptionConfiguration|null  $encryptionConfiguration  If query results are encrypted in Amazon S3,
     * indicates the encryption option used (for example, SSE-KMS or CSE-KMS) and key information. This is a client-side
     * setting. If workgroup settings override client-side settings, then the query uses the encryption configuration
     * that is specified for the workgroup, and also uses the location for storing query results specified in the
     * workgroup.
     * @param  string  $outputLocation  The location in Amazon S3 where your query results are stored,
     * such as s3://path/to/query/bucket/. To run the query, you must specify the query results location.
     */
    public function __construct(EncryptionConfiguration $encryptionConfiguration = null, string $outputLocation = '')
    {
        $this->encryptionConfiguration = $encryptionConfiguration;
        $this->outputLocation = $outputLocation;
    }
}
