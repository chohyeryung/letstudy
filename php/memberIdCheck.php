<?php
    //$pdo = new PDO("mysql:host=localhost;dbname=study;charset=utf8","root","111111");
    $conn = mysqli_connect('localhost', 'root', '111111', 'study');

    $memberId = $_POST['memberId'];
 
    $sql = "SELECT * FROM `member` WHERE id = '{$memberId}'";
    // $result = mysqli_query($conn, $sql);
    $result = mysqli_query($conn, $sql);
    
    if($result){
        // $row_cnt = $result->num_rows;
        $row_cnt = mysqli_num_rows($result);
        if($row_cnt >= 1){
            $json = json_encode(array('res'=>'bad'));
            echo $json;
        }else{
            echo json_encode(array('res'=>'good'));
        }
        $result->close();
    } else{
        echo 'd';
    }
    $conn->close();
?>