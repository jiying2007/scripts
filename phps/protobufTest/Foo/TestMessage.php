<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: test.proto

namespace Foo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>foo.TestMessage</code>
 */
class TestMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 optional_int32 = 1;</code>
     */
    private $optional_int32 = 0;
    /**
     * Generated from protobuf field <code>repeated int32 repeated_int32 = 2;</code>
     */
    private $repeated_int32;

    public function __construct() {
        \GPBMetadata\Test::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int32 optional_int32 = 1;</code>
     * @return int
     */
    public function getOptionalInt32()
    {
        return $this->optional_int32;
    }

    /**
     * Generated from protobuf field <code>int32 optional_int32 = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOptionalInt32($var)
    {
        GPBUtil::checkInt32($var);
        $this->optional_int32 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 repeated_int32 = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRepeatedInt32()
    {
        return $this->repeated_int32;
    }

    /**
     * Generated from protobuf field <code>repeated int32 repeated_int32 = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRepeatedInt32($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->repeated_int32 = $arr;

        return $this;
    }

}

