<?php
    //$pdo = new PDO("mysql:host=localhost;dbname=study;charset=utf8","root","111111");
    include '../../dbConfig.php';

    $memberId = $_POST['memberId'];
 
    // $sql = "SELECT * FROM `member` WHERE id = '{$memberId}'";
    $sql = $db -> query("SELECT * FROM `member` WHERE id='$memberId'");

    // $result = mysqli_query($conn, $sql);
    // $result = mysqli_query($conn, $sql);
    if($sql -> num_rows >0) {
        $json = json_encode(array('res'=>'bad'));
        echo $json;
    }else {
        echo json_encode(array('res'=>'good'));
    }
    
    // $conn->close();
?>