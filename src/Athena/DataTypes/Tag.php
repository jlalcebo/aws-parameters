<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: j.lalcebo@chargebacks911.com
 * Date: 11/16/20 4:12 PM
 */

declare(strict_types=1);

namespace GTMC\Aws\Parameters\Athena\DataTypes;

use GTMC\Aws\Parameters\Parameter;

/**
 * A label that you assign to a resource. In Athena, a resource can be a workgroup or data catalog.
 * Each tag consists of a key and an optional value, both of which you define. For example,
 * you can use tags to categorize Athena workgroups or data catalogs by purpose, owner, or environment.
 * Use a consistent set of tag keys to make it easier to search and filter workgroups or data catalogs
 * in your account. For best practices, see Tagging Best Practices. Tag keys can be from 1 to 128 UTF-8
 * Unicode characters, and tag values can be from 0 to 256 UTF-8 Unicode characters. Tags can use letters
 * and numbers representable in UTF-8, and the following characters: + - = . _ : / @. Tag keys and values
 * are case-sensitive. Tag keys must be unique per resource. If you specify more than one tag, separate
 * them by commas.
 *
 * @package GTMC\Aws\ListMap\Athena\DataTypes
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_Tag.html
 */
class Tag extends Parameter
{
    /**
     * A tag key. The tag key length is from 1 to 128 Unicode characters in UTF-8. You can use letters
     * and numbers representable in UTF-8, and the following characters: + - = . _ : / @.
     * Tag keys are case-sensitive and must be unique per resource.
     *
     *   Constraints: Minimum length of 1. Maximum length of 128.
     *
     * @var string
     */
    public $key;

    /**
     * A tag value. The tag value length is from 0 to 256 Unicode characters in UTF-8. You can use
     * letters and numbers representable in UTF-8, and the following characters: + - = . _ : / @.
     * Tag values are case-sensitive.
     *
     * @var  string
     */
    public $value;

    /**
     * @param  string|null  $key  A tag key. The tag key length is from 1 to 128 Unicode characters in UTF-8.
     * You can use letters and numbers representable in UTF-8, and the following characters: + - = . _ : / @.
     * Tag keys are case-sensitive and must be unique per resource.
     * @param  string|null  $value  A tag value. The tag value length is from 0 to 256 Unicode characters in UTF-8.
     * You can use letters and numbers representable in UTF-8, and the following characters: + - = . _ : / @.
     * Tag values are case-sensitive.
     */
    public function __construct(string $key = null, string $value = null)
    {
        $this->key = $key;
        $this->value = $value;
    }
}
