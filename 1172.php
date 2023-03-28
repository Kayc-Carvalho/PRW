<?php
// errado - eu que fiz
$v = array(readline());

for($x=0;$x<count($v);$x++){
    if($v[$x]<=0){
        $v[$x] = 1;
    }
    echo "X[$x] = $v[$x]\n";
}

?>
<?php
//certo - leo que fez
$vetor = array();

for ($x=0;$x<10;$x++) {
    $v = intval(readline());
    if($v<=0) {
    
        $v=1;

    }

    array_push($vetor, $v);
}

for ($x=0;$x<10;$x++) {
    echo "X[$x] = " . $vetor[$x] . "\n";
}
?>
