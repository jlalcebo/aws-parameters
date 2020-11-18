<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/17/20 2:33 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\DynamoDB\DataTypes;

use GTMC\Aws\Parameters\Parameter;

/**
 * Represents the settings used to enable server-side encryption.
 *
 * @package GTMC\Aws\ListMap\DynamoDB\DataTypes
 * @see https://docs.aws.amazon.com/amazondynamodb/latest/APIReference/API_SSESpecification.html
 */
class SSESpecification extends Parameter
{
    /**
     * Use AES encryption algorithm a key length of 256 bits.
     *
     * @var string
     */
    public const SSE_TYPE_AES256 = 'AES256';

    /**
     * Server-side encryption that uses AWS Key Management Service.
     *
     * @var string
     */
    public const SSE_TYPE_KMS = 'KMS';

    /**
     * Indicates whether server-side encryption is done using an AWS managed CMK or an AWS owned CMK.
     * If enabled (true), server-side encryption type is set to KMS and an AWS managed CMK is used
     * (AWS KMS charges apply). If disabled (false) or not specified, server-side encryption is set
     * to AWS owned CMK.
     *
     * @var bool
     */
    public $enabled;

    /**
     * The AWS KMS customer master key (CMK) that should be used for the AWS KMS encryption. To specify
     * a CMK, use its key ID, Amazon Resource Name (ARN), alias name, or alias ARN. Note that you should
     * only provide this parameter if the key is different from the default DynamoDB customer master key
     * alias/aws/dynamodb.
     *
     * @var string
     */
    public $kMSMasterKeyId;

    /**
     * Server-side encryption type.
     *
     *   Valid Values:
     *     - AES256: Use AES encryption algorithm a key length of 256 bits.
     *     - KMS: Server-side encryption that uses AWS Key Management Service. The key is
     *            stored in your account and is managed by AWS KMS (AWS KMS charges apply).
     *
     * @var string
     */
    public $sSEType;

    /**
     * @param  bool  $enabled  Indicates whether server-side encryption is done using an AWS managed CMK or an AWS
     * owned CMK. If enabled (true), server-side encryption type is set to KMS and an AWS managed CMK is used
     * (AWS KMS charges apply). If disabled (false) or not specified, server-side encryption is set to AWS owned CMK.
     * @param  string|null  $kMSMasterKeyId  The AWS KMS customer master key (CMK) that should be used for the AWS
     * KMS encryption. To specify a CMK, use its key ID, Amazon Resource Name (ARN), alias name, or alias ARN.
     * Note that you should only provide this parameter if the key is different from the default DynamoDB customer
     * master key alias/aws/dynamodb.
     * @param  string|null  $sSEType  Server-side encryption type.
     */
    public function __construct(bool $enabled = null, string $kMSMasterKeyId = null, string $sSEType = null)
    {
        $this->enabled = $enabled;
        $this->kMSMasterKeyId = $kMSMasterKeyId;
        $this->sSEType = strtoupper((string)$sSEType);
    }
}
