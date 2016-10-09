--TEST--
Allow suppressed exception to be propagated and retrieved
--FILE--
<?php

$e1 = new Exception('suppressed exception 1');
$e2 = new Exception('suppressed exception 2');

$e3 = new Exception('propogated exception');
$e3->addSuppressed($e1);
$e3->addSuppressed($e2);

$s = $e3->getSuppressed();
var_dump(count($s));
var_dump($s[0]->getMessage());
var_dump($s[1]->getMessage());

?>
--EXPECTF--
int(2)
string(22) "suppressed exception 1"
string(22) "suppressed exception 2"
