--TEST--
MissCB - MissCbOO
--FILE--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_runtest("MissCB", "testMissCbOO");
--EXPECT--
PHP_COUCHBASE_OK