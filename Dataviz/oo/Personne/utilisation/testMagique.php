<?php

require_once('../models/Test.php');

$t = new Test();

// echo $t->priveeazazeaezaz;

try {
    echo $t->privee;
    // echo "I'm Trying";
}
catch(Exception $e) {
    echo $e->getMessage();
}

try {
    echo $t->other;
    // echo "I'm Trying";
}
catch(Exception $e) {
    echo $e->getMessage();
}

try {
    $t->privee = "bleu";
} catch (Exception $e) {
    echo $e->getMessage();
}

echo "OK";

?>