<?php

namespace Youshido\GraphQL\Type;

/**
 * Class TypeMap
 */
class TypeMap
{
    const KIND_SCALAR       = 'SCALAR';
    const KIND_OBJECT       = 'OBJECT';
    const KIND_INTERFACE    = 'INTERFACE';
    const KIND_UNION        = 'UNION';
    const KIND_ENUM         = 'ENUM';
    const KIND_INPUT_OBJECT = 'INPUT_OBJECT';
    const KIND_LIST         = 'LIST';
    const KIND_NON_NULL     = 'NON_NULL';

    const TYPE_INT        = 'int';
    const TYPE_FLOAT      = 'float';
    const TYPE_STRING     = 'string';
    const TYPE_BOOLEAN    = 'boolean';
    const TYPE_ID         = 'id';
    const TYPE_DATETIME   = 'datetime';
    const TYPE_DATETIMETZ = 'datetimetz';
    const TYPE_DATE       = 'date';
    const TYPE_TIMESTAMP  = 'timestamp';
}
