<?php
/**
 * Data Mapper for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-data-mapper
 * @package   yii2-data-mapper
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017-2018, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii\DataMapper\query\attributes;

class UnsupportedOperatorException extends \hiqdev\yii\DataMapper\validators\AttributeValidationException
{
    public static function forOperator($operator)
    {
        return new static('Operator ' . $operator . ' is not supported');
    }
}
