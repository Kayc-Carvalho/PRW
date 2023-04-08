<?php
while (true) {
    $x = explode(" ", trim(fgets(STDIN)));
    $a = strval($x[0]);

    if (isset($x[1])) {
        $b = strval($x[1]);
        $p = str_replace(strval($a), "", $b);
    } else {
        echo "0\n";
        break;
    }

    if ($a == '0' && $b === "0") {
        break;
    }

    $sem_z = preg_replace("/0+/", "0", $p);
    if ($p === '' || $sem_z === '') {
        $p = '0';
        $sem_z = '0';
    }
    if ($sem_z == "0") {
        echo ltrim($sem_z) . "\n";
    } else {
        echo ltrim($p, '0') . "\n";
    }
}
?>