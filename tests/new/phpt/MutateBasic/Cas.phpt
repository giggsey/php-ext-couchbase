--TEST--
MutateBasic - Cas
--FILE--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_runtest("MutateBasic", "testCas");
--EXPECT--
PHP_COUCHBASE_OK