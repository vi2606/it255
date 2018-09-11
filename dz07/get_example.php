<?php
$type = $_GET['type'];

$dan =date('l');
$sat=date('G');
$minut=date('i');
$sekund=date('s');

if($type == "json"){
header("Content-type: application/json");

$test_array = array (
'dan' => $dan,
'sat' => $sat,
'minut' => $minut,
'sekund' => $sekund
);

echo json_encode($test_array);
}else if($type == "xml")

{
header("Content-type: text/xml");

$test_array = array (
$dan => 'dan',
$sat => 'sat',
$minut => 'minut',
$sekund => 'sekund'
);

$xml = new SimpleXMLElement('<root/>');
array_walk_recursive($test_array, array ($xml, 'addChild'));

print $xml->asXML();
} else{
    echo "Error: No data type specified";

}
?>