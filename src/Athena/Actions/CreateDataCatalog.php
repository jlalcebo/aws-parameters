<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/16/20 4:20 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\Actions;

use GTMC\Aws\Parameters\Athena\DataTypes\Tag;
use GTMC\Aws\Parameters\ListMap;

/**
 * Creates (registers) a data catalog with the specified name and properties.
 * Catalogs created are visible to all users of the same AWS account.
 *
 * @package GTMC\Aws\ListMap\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_CreateDataCatalog.html
 */
class CreateDataCatalog extends GetDataCatalog
{
    /**
     * The name of the data catalog to create. The catalog name must be unique for the AWS account
     * and can use a maximum of 128 alphanumeric, underscore, at sign, or hyphen characters.
     *
     *   Length Constraints: Minimum length of 1. Maximum length of 256.
     *   Pattern: [\u0020-\uD7FF\uE000-\uFFFD\uD800\uDC00-\uDBFF\uDFFF\t]*
     *
     * @var string
     */
    public $name;

    /**
     * Federated catalog.
     *
     * @var string
     */
    public const TYPE_LAMBDA = 'LAMBDA';

    /**
     * External hive metastore.
     *
     * @var string
     */
    public const TYPE_HIVE = 'HIVE';

    /**
     * A list of comma separated tags to add to the data catalog that is created.
     *
     * @var Tag[]
     */
    public $tags;

    /**
     * The type of data catalog to create: LAMBDA for a federated catalog or HIVE for an external hive metastore.
     *
     *   Valid Values:
     *     - LAMBDA
     *     - HIVE
     *
     * @var string
     */
    public $type;

    /**
     * Specifies the Lambda function or functions to use for creating the data catalog. This is a mapping whose
     * values depend on the catalog type.
     *
     *   - For the HIVE data catalog type, use the following syntax. The metadata-function parameter is required.
     *     The sdk-version parameter is optional and defaults to the currently supported version.
     *       metadata-function=lambda_arn, sdk-version=version_number
     *
     *   - For the LAMBDA data catalog type, use one of the following sets of required parameters, but not both.
     *       - If you have one Lambda function that processes metadata and another for reading the actual data, use
     *         the following syntax. Both parameters are required.
     *           metadata-function=lambda_arn, record-function=lambda_arn
     *       - If you have a composite Lambda function that processes both metadata and data, use the following syntax
     *         to specify your Lambda function.
     *           function=lambda_arn
     *
     *   Key Length Constraints: Minimum length of 1. Maximum length of 255.
     *
     * @var ListMap
     */
    public $parameters;

    /**
     * A description of the data catalog to be created.
     *
     *   Length Constraints: Minimum length of 1. Maximum length of 1024.
     *
     * @var string
     */
    public $description;

    /**
     * @param  string  $name  The name of the data catalog to create. The catalog name must be unique for the AWS
     * account and can use a maximum of 128 alphanumeric, underscore, at sign, or hyphen characters.
     * @param  string  $type  The type of data catalog to create: LAMBDA for a federated catalog or HIVE for an
     * external hive metastore.
     * @param  array|null  $tags  A list of comma separated tags to add to the data catalog that is created.
     * @param  ListMap|null  $parameters  Specifies the Lambda function or functions to use for creating
     * the data catalog. This is a mapping whose values depend on the catalog type.
     * @param  string|null  $description  A description of the data catalog to be created.
     */
    public function __construct(
        string $name,
        string $type,
        array $tags = null,
        ListMap $parameters = null,
        string $description = null
    ) {
        parent::__construct($name);
        $this->type = strtoupper($type);
        $this->tags = $tags;
        $this->parameters = $parameters;
        $this->description = $description;
    }
}
