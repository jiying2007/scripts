<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: test.proto

namespace GPBMetadata;

class Test
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0a580a0a746573742e70726f746f1203666f6f223d0a0b546573744d6573" .
            "7361676512160a0e6f7074696f6e616c5f696e7433321801200128051216" .
            "0a0e72657065617465645f696e743332180220032805620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

