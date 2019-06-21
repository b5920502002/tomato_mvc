<?php
//5555555555555 update
// update file from github
//kai kai
//bla bla
//from jab
//ffffff5555555
if(isset($_POST['comment'])){
    $comment=$_POST['comment'];
}if(isset($_POST['g-recaptcha-response'])){
    $captcha=$_POST['g-recaptcha-response'];
}
if(!$captcha){
    echo "<h2>โปรดยืนยันตัวตนของคุณ</h2>";
 exit;
 }
$secretKey = "6LcGdakUAAAAAGYr5bX1LbijU2Ga7av_hORqIscf";
 $ip = $_SERVER['REMOTE_ADDR'];
 $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
 $responseKeys = json_decode($response,true);
 print_r($responseKeys);
 if(intval($responseKeys["success"]) !== 1) {
     echo "<h2>โปรดทำการยันยืนให้ถูกต้อง</h2>";
 } else {
     echo "<h2>ขอบคุณสำหรับคอมเม้น</h2>";
 }
?>
