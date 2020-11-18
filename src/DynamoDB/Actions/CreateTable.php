<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/16/20 3:24 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\DynamoDB\Actions;

use GTMC\Aws\Parameters\DynamoDB\DataTypes\AttributeDefinition;
use GTMC\Aws\Parameters\DynamoDB\DataTypes\GlobalSecondaryIndex;
use GTMC\Aws\Parameters\DynamoDB\DataTypes\KeySchemaElement;
use GTMC\Aws\Parameters\DynamoDB\DataTypes\LocalSecondaryIndex;
use GTMC\Aws\Parameters\DynamoDB\DataTypes\ProvisionedThroughput;
use GTMC\Aws\Parameters\DynamoDB\DataTypes\SSESpecification;
use GTMC\Aws\Parameters\DynamoDB\DataTypes\StreamSpecification;
use GTMC\Aws\Parameters\DynamoDB\DataTypes\Tag;
use GTMC\Aws\Parameters\Parameter;

/**
 * The CreateTable operation adds a new table to your account. In an AWS account, table names
 * must be unique within each Region. That is, you can have two tables with same name if you
 * create the tables in different Regions.
 *
 * @package GTMC\Aws\ListMap\DynamoDB\Actions
 * @see https://docs.aws.amazon.com/amazondynamodb/latest/APIReference/API_CreateTable.html
 */
class CreateTable extends Parameter
{
    /**
     * Billing mode to Provisioned Mode for predictable workloads.
     *
     * @var string
     */
    public const BILLING_MODE_PROVISIONED = 'PROVISIONED';

    /**
     * Billing mode to On-Demand Mode for unpredictable workloads.
     *
     * @var string
     */
    public const BILLING_MODE_PAY_PER_REQUEST = 'PAY_PER_REQUEST';

    /**
     * The name of the table to create.
     *
     *   Pattern: [a-zA-Z0-9_.-]+
     *   Length Constraints: Minimum length of 3. Maximum length of 255.
     *
     * @var string
     */
    public $tableName;

    /**
     * An array of attributes that describe the key schema for the table and indexes.
     *
     * @var AttributeDefinition[]
     */
    public $attributeDefinitions;

    /**
     * Specifies the attributes that make up the primary key for a table or an index. The attributes
     * in KeySchema must also be defined in the AttributeDefinitions array.
     *
     * @var KeySchemaElement[]
     */
    public $keySchema;

    /**
     * Controls how you are charged for read and write throughput and how you manage capacity.
     * This setting can be changed later.
     *
     *   Valid Values:
     *     - PROVISIONED: We recommend using PROVISIONED for predictable workloads.
     *     - PAY_PER_REQUEST: We recommend using PAY_PER_REQUEST for unpredictable workloads.
     *
     * @var string
     */
    public $billingMode;

    /**
     * One or more global secondary indexes (the maximum is 20) to be created on the table.
     *
     * @var GlobalSecondaryIndex[]
     */
    public $globalSecondaryIndexes;

    /**
     * One or more local secondary indexes (the maximum is 5) to be created on the table. Each index
     * is scoped to a given partition key value. There is a 10 GB size limit per partition key value;
     * otherwise, the size of a local secondary index is unconstrained.
     *
     * @var LocalSecondaryIndex[]
     */
    public $localSecondaryIndexes;

    /**
     * Represents the provisioned throughput settings for a specified table or index. The settings can be
     * modified using the UpdateTable operation. If you set BillingMode as PROVISIONED, you must specify
     * this property. If you set BillingMode as PAY_PER_REQUEST, you cannot specify this property.
     *
     * @var ProvisionedThroughput
     */
    public $provisionedThroughput;

    /**
     * Represents the settings used to enable server-side encryption.
     *
     * @var SSESpecification
     */
    public $sSESpecification;

    /**
     * The settings for DynamoDB Streams on the table.
     *
     * @var StreamSpecification
     */
    public $streamSpecification;

    /**
     * A list of key-value pairs to label the table.
     *
     * @var Tag[]
     */
    public $tags;

    /**
     * @param  string  $tableName  The name of the table to create.
     * @param  AttributeDefinition[]  $attributeDefinitions  An array of attributes that describe the key
     * schema for the table and indexes.
     * @param  KeySchemaElement[]  $keySchema  Specifies the attributes that make up the primary key for a
     * table or an index.
     * @param  string|null  $billingMode  Controls how you are charged for read and write throughput and
     * how you manage capacity.
     * @param  GlobalSecondaryIndex[]  $globalSecondaryIndexes  One or more global secondary indexes
     * (the maximum is 20) to be created on the table.
     * @param  LocalSecondaryIndex[]  $localSecondaryIndexes  One or more local secondary indexes
     * (the maximum is 5) to be created on the table.
     * @param  ProvisionedThroughput|null  $provisionedThroughput  Represents the provisioned throughput
     * settings for a specified table or index.
     * @param  SSESpecification|null  $sSESpecification  Represents the settings used to enable server-side encryption.
     * @param  StreamSpecification|null  $streamSpecification  The settings for DynamoDB Streams on the table.
     * @param  Tag[]  $tags  A list of key-value pairs to label the table.
     */
    public function __construct(
        string $tableName,
        array $attributeDefinitions,
        array $keySchema,
        string $billingMode = null,
        array $globalSecondaryIndexes = null,
        array $localSecondaryIndexes = null,
        ProvisionedThroughput $provisionedThroughput = null,
        SSESpecification $sSESpecification = null,
        StreamSpecification $streamSpecification = null,
        array $tags = null
    ) {
        $this->tableName = $tableName;
        $this->attributeDefinitions = $attributeDefinitions;
        $this->keySchema = $keySchema;
        $this->billingMode = $billingMode;
        $this->globalSecondaryIndexes = $globalSecondaryIndexes;
        $this->localSecondaryIndexes = $localSecondaryIndexes;
        $this->provisionedThroughput = $provisionedThroughput;
        $this->sSESpecification = $sSESpecification;
        $this->streamSpecification = $streamSpecification;
        $this->tags = $tags;
    }
}
