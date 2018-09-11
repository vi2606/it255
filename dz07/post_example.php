<?php
$type = $_POST['type'];
$odDatuma=$_POST['startDatum'];
$doDatuma=$_POST['endDatum'];
$broj_dana='broj_dana';

if ($odDatuma === ''){
    $odDatuma='today';
}

if ($doDatuma === ''){
    $doDatuma='today';
}

$datI=strtotime($odDatuma);
$datII=strtotime($doDatuma);

$razlika=abs(ceil(($datI - $datII)/60/60/24));
// $razlika=ceil(($datII - $datI)/60/60/24);


if($type == "json"){
header("Content-type: application/json");

$test_array = array (
    $broj_dana => $razlika,
    );
    echo json_encode($test_array);

}else if($type == "xml")

{
header("Content-type: text/xml");

$test_array = array (
$razlika => $broj_dana
);

$xml = new SimpleXMLElement('<root/>');
array_walk_recursive($test_array, array ($xml, 'addChild'));

print $xml->asXML();
} else{
    echo "Error: No data type specified";
}
?>
