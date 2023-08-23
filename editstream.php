<?php
include ("connection.php" );
$streamname =  $_POST['streamname' ]; 
$bitrate =  $_POST['bitrate' ]; 
$inputurl =  $_POST['inputurl' ]; 
$outputurl =  $_POST['outputurl' ]; 
$id= $_POST['stream_id' ];
$sql= "UPDATE `srt`  SET  `streamname` = '". $streamname."'  , `bitrate` =  '". $bitrate."' , `inputurl`  =  '".$inputurl ."' , `outputurl`  ='".$outputurl ."' WHERE `id` = $id " ;
if(mysqli_query($conn , $sql)){
    $response = [
        'status'=>'ok',
        'success'=>true,
        'message'=>'Record updated succesfully!'
    ];
    print_r(json_encode($response));
}else{
    $response = [
        'status'=>'ok',
        'success'=>false,
        'message'=>'Record updated failed!'
    ];
    print_r(json_encode($response));
} 
?>
