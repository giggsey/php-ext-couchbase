--TEST--
Arithmetic - CustomOffset
--FILE--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_runtest("Arithmetic", "testCustomOffset");
--EXPECT--
PHP_COUCHBASE_OK