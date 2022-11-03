<?php

/**
 * SubjectDirectoryAttributes
 *
 * PHP version 5
 *
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2016 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */

namespace FluentMail\phpseclib3\File\ASN1\Maps;

use FluentMail\phpseclib3\File\ASN1;

/**
 * SubjectDirectoryAttributes
 *
 * @author  Jim Wigginton <terrafrost@php.net>
 */
abstract class SubjectDirectoryAttributes
{
    const MAP = [
        'type' => ASN1::TYPE_SEQUENCE,
        'min' => 1,
        'max' => -1,
        'children' => Attribute::MAP
    ];
}
