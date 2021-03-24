<?php
    include '../../dbConfig.php';

    $memberId = $_POST['memberId'];
 
    $sql = $db -> query("SELECT * FROM `member` WHERE id='$memberId'");

    if($sql -> num_rows >0) {
        $json = json_encode(array('res'=>'bad'));
        echo $json;
    }else {
        echo json_encode(array('res'=>'good'));
    }
?>