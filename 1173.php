<?php
//errado - eu que fiz
$v = readline();

for($x=0;$x<10;$x++){
    $v = $v*2;
    
    echo "N[$x] = $v<br>";
}

?>
<?php
//certo - leo que fez
$v[0] = readline();

for ($x=1;$x<10;$x++) {
    $v[$x] = 2*$v[$x-1];
}

for ($x=0;$x<10;$x++) {
    echo "N[$x] = " . $v[$x] . "\n";
}
?>