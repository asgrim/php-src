--TEST--
Allow suppressed exception to be propagated and retrieved
--FILE--
<?php

$e1 = new Exception();

$e2 = new Exception();
$e2->addSuppressed($e1);

?>
--EXPECTF--

