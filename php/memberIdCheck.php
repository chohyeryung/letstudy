<?php
    //$pdo = new PDO("mysql:host=localhost;dbname=study;charset=utf8","root","111111");
    $conn = new mysqli('localhost', 'root', '111111', 'study');

    $memberId = $_POST['memberId'];
 
    $sql = "SELECT * FROM member WHERE id = '{$memberId}'";
 
    if($res = $conn->query($sql)){
        $row_cnt = $res->num_rows;
        if($row_cnt >= 1){
            echo json_encode(array('res'=>'bad'));
        }else{
            echo json_encode(array('res'=>'good'));
        }
        $res->close();
    }

    $conn->close();
?>