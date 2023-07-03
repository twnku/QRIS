<?php
require __DIR__ . '/vendor/autoload.php';
use PHPImageWorkshop\ImageWorkshop;
header('Content-Type: image/jpeg');

try{
$nmid = (!empty($_GET['nmid'])) ? $_GET['nmid'] : null;
$name = (!empty($_GET['name'])) ? $_GET['name'] : null;
$versi = (!empty($_GET['ver'])) ? $_GET['ver'] : null;
$qrc_url = (!empty($_GET['img'])) ? "https://chart.googleapis.com/chart?cht=qr&chl=".urlencode($_GET['img'])."&chs=500x500&choe=UTF-8&chld=L|2%22%20rel=%22nofollow%22%20alt=%22qr%20code%22" : "https://chart.googleapis.com/chart?cht=qr&chl=INVALID+IMAGE+|+TWNKU.COM&chs=500x500&choe=UTF-8&chld=L|2%22%20rel=%22nofollow%22%20alt=%22qr%20code%22";


//echo urlencode($qrc_url);
//echo file_get_contents("https://chart.googleapis.com/chart?cht=qr&chl=".urlencode($qrc_url)."&chs=500x500&choe=UTF-8&chld=L|2%22%20rel=%22nofollow%22%20alt=%22qr%20code%22");
//die();

$file_path = __DIR__.'/11.png';
$qris_layer = ImageWorkshop::initFromPath(__DIR__.'/qris.png');
$fontDir = __DIR__.'/ArialCEMTBlack.ttf'; 
$fontDir2 = __DIR__.'/arialceb.ttf'; 
if(!empty($nmid)){
$textLayer1 = ImageWorkshop::initTextLayer($nmid, $fontDir2, 30, 313131, 0);
$textLayer1->opacity(100);
$qris_layer->addLayer(1, $textLayer1, 0, -490, "MM");
}

if(!empty($name)){
    $textLayer2 = ImageWorkshop::initTextLayer($name, $fontDir2, 30, 000000, 0);
    $textLayer2->opacity(100);
    $qris_layer->addLayer(1, $textLayer2, 0, -560, "MM");
}

if(!empty($versi)){
    $textLayer3 = ImageWorkshop::initTextLayer($versi, $fontDir2, 30, 000000, 0);
    $textLayer3->opacity(100);
    $qris_layer->addLayer(1, $textLayer3, 0, -430, "MM");
}


//$qrcode = ImageWorkshop::initFromResourceVar("https://chart.googleapis.com/chart?cht=qr&chl=00020101021126660014ID.LINKAJA.WWW011893600911002000451602152103121300045160303UMI51450015ID.OR.GPNQR.WWW02150000000000000000303UMI520454995802ID5905Twnku6006BEKASI610517610621007063282835303360630489C4&chs=500x500&choe=UTF-8&chld=L|2%22%20rel=%22nofollow%22%20alt=%22qr%20code%22");
//$qris_layer->addLayer(1, $qrcode, 0, 0, "MM");

//$qrc =  file_get_contents("https://chart.googleapis.com/chart?cht=qr&chl=00020101021126660014ID.LINKAJA.WWW011893600911002000451602152103121300045160303UMI51450015ID.OR.GPNQR.WWW02150000000000000000303UMI520454995802ID5905Twnku6006BEKASI610517610621007063282835303360630489C4&chs=500x500&choe=UTF-8&chld=L|2%22%20rel=%22nofollow%22%20alt=%22qr%20code%22");
$qrc = ImageWorkshop::initFromPath($qrc_url);
$qrc->resizeInPixel(720, 720, true);
$qrc->cropInPercent(90, 90, 0, 0, "MM");
$qris_layer->addLayer(1, $qrc, 0, -25, "MM");

$image = $qris_layer->getResult();
imagejpeg($image);
}catch (Exception $e) {
    
}

