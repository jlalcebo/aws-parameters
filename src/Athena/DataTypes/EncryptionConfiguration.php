<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/16/20 2:02 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\DataTypes;

use GTMC\Aws\Parameters\Parameter;

/**
 * If query results are encrypted in Amazon S3, indicates the encryption option used
 * (for example, SSE-KMS or CSE-KMS) and key information.
 *
 * @package GTMC\Aws\ListMap\Athena\DataTypes
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_EncryptionConfiguration.html
 */
class EncryptionConfiguration extends Parameter
{
    /**
     * Server-side encryption with Amazon S3-managed keys.
     *
     * @var string
     */
    public const ENCRYPTION_OPTION_SSE_S3 = 'SSE_S3';

    /**
     * Server-side encryption with KMS-managed keys.
     *
     * @var string
     */
    public const ENCRYPTION_OPTION_SSE_KMS = 'SSE_KMS';

    /**
     * Client-side encryption with KMS-managed keys.
     *
     * @var string
     */
    public const ENCRYPTION_OPTION_CSE_KMS = 'CSE_KMS';

    /**
     * Indicates whether Amazon S3 server-side encryption with Amazon S3-managed keys (SSE-S3),
     * server-side encryption with KMS-managed keys (SSE-KMS), or client-side encryption
     * with KMS-managed keys (CSE-KMS) is used.
     *
     *   Valid Values:
     *      - SSE_S3
     *      - SSE_KMS
     *      - CSE_KMS
     *
     * @var string
     */
    public $encryptionOption;

    /**
     * For SSE-KMS and CSE-KMS, this is the KMS key ARN or ID.
     *
     * @var string
     */
    public $kmsKey;

    /**
     * @param  string  $encryptionOption  Indicates whether Amazon S3 server-side encryption with Amazon
     * S3-managed keys (SSE-S3), server-side encryption with KMS-managed keys (SSE-KMS), or client-side encryption
     * with KMS-managed keys (CSE-KMS) is used.
     * @param  string  $kmsKey  For SSE-KMS and CSE-KMS, this is the KMS key ARN or ID.
     */
    public function __construct(string $encryptionOption, string $kmsKey = '')
    {
        $this->encryptionOption = strtoupper($encryptionOption);
        $this->kmsKey = $kmsKey;
    }
}
