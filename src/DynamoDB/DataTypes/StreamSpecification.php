<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/17/20 2:41 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\DynamoDB\DataTypes;

use GTMC\Aws\Parameters\Parameter;

/**
 * Represents the DynamoDB Streams configuration for a table in DynamoDB.
 *
 * @package GTMC\Aws\ListMap\DynamoDB\DataTypes
 * @see https://docs.aws.amazon.com/amazondynamodb/latest/APIReference/API_StreamSpecification.html
 */
class StreamSpecification extends Parameter
{
    /**
     * Only the key attributes of the modified item are written to the stream.
     *
     * @var string
     */
    public const STREAM_VIEW_TYPE_KEYS_ONLY = 'KEYS_ONLY';

    /**
     * The entire item, as it appears after it was modified, is written to the stream.
     *
     * @var string
     */
    public const STREAM_VIEW_TYPE_NEW_IMAGE = 'NEW_IMAGE';

    /**
     * The entire item, as it appeared before it was modified, is written to the stream.
     *
     * @var string
     */
    public const STREAM_VIEW_TYPE_OLD_IMAGE = 'OLD_IMAGE';

    /**
     * Both the new and the old item images of the item are written to the stream.
     *
     * @var string
     */
    public const STREAM_VIEW_TYPE_NEW_AND_OLD_IMAGES = 'NEW_AND_OLD_IMAGES';

    /**
     * Indicates whether DynamoDB Streams is enabled (true) or disabled (false) on the table.
     *
     * @var bool
     */
    public $streamEnabled;

    /**
     * When an item in the table is modified, StreamViewType determines what information is written to the stream
     * for this table.
     *
     *   Valid Values:
     *     - KEYS_ONLY: Only the key attributes of the modified item are written to the stream.
     *     - NEW_IMAGE: The entire item, as it appears after it was modified, is written to the stream.
     *     - OLD_IMAGE: The entire item, as it appeared before it was modified, is written to the stream.
     *     - NEW_AND_OLD_IMAGES: Both the new and the old item images of the item are written to the stream.
     *
     * @var string
     */
    public $streamViewType;

    /**
     * @param  bool  $streamEnabled  Indicates whether DynamoDB Streams is enabled (true)
     * or disabled (false)on the table.
     * @param  string|null  $streamViewType  When an item in the table is modified, StreamViewType determines what
     * information is written to the stream for this table.
     */
    public function __construct(bool $streamEnabled, string $streamViewType = null)
    {
        $this->streamEnabled = $streamEnabled;
        $this->streamViewType = strtoupper((string)$streamViewType);
    }
}
