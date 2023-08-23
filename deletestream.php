<?php
include ("connection.php" ); 
$id =$_GET['id' ];  
$sql= "DELETE FROM  `srt` WHERE `id`  =  $id " ; 

if(mysqli_query($conn , $sql)){
    $response = [
        'status'=>'ok',
        'success'=>true,
        'message'=>'Stream deleted succesfully!'
    ];
    print_r(json_encode($response));
}else{
    $response = [
        'status'=>'ok',
        'success'=>false,
        'message'=>'Stream deleted failed!'
    ];
    print_r(json_encode($response));
} 
?> 
