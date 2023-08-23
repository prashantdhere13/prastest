<?php
 include ("connection.php" ); 
$streamname =  $_POST['streamname' ]; 
$bitrate =  $_POST['bitrate' ]; 
$inputurl =  $_POST['inputurl' ]; 
$outputurl =  $_POST['outputurl' ]; 
$sql=  "INSERT  INTO `srt`(`streamname` , `bitrate` , `inputurl` , `outputurl`) VALUE  (' {$streamname} ' , ' {$bitrate } ' , ' {$inputurl } ' , ' {$outputurl } ')" ; 
$sql.="SYSTEM srt-live-transmit -s 1000 -j $inputurl $outputurl"; 
if ($mysqli -> multi_query($conn,$sql)) {
#if(mysqli_query($conn , $sql)){
    $response = [
        'status'=>'ok',
        'success'=>true,
        'message'=>'Stream Added succesfully!'
    ];
    print_r(json_encode($response));
}else{
    $response = [
        'status'=>'ok',
        'success'=>false,
        'message'=>'Stream Added failed!'
    ];
    print_r(json_encode($response));
} 
?> 
