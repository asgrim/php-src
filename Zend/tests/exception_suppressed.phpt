--TEST--
Allow suppressed exception to be propagated and retrieved
--FILE--
<?php

$e1 = new Exception('suppressed exception');

$e2 = new Exception('propogated exception');
$e2->addSuppressed($e1);

var_dump($e1 === $e2->getSuppressed());

?>
--EXPECTF--
bool(true)
