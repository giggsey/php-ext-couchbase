--TEST--
Serialization - SerializeBasic

--SKIPIF--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_skipif("Serialization", "testSerializeBasic");

--FILE--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_runtest("Serialization", "testSerializeBasic");
--EXPECT--
PHP_COUCHBASE_OK