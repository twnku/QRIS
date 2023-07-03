<?php
function crc16($data){
	$crc = 0xFFFF;
	for ($i = 0; $i < strlen($data); $i++){
		$x = (($crc >> 8) ^ ord($data[$i])) & 0xFF;
		$x ^= $x >> 4;
		$crc = (($crc << 8) ^ ($x << 12) ^ ($x << 5) ^ $x) & 0xFFFF;
	}
	return $crc;
}


$data = $_POST['data'];
$crc16 = strtoupper(dechex(crc16($data)));
//echo "checksum: ".$crc16."<br>";
$return = [
    "status" => true,
    "data" => $crc16
];

echo json_encode($return);
?>