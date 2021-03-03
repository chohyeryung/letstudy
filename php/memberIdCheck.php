<?php
    //$pdo = new PDO("mysql:host=localhost;dbname=study;charset=utf8","root","111111");
    $conn=mysqli_connect('localhost', 'root', '111111', 'study');

    $memberId = $_POST['memberId'];
    $sql = "SELECT * FROM member WHERE id = '$memberId'";
 
    $res = $dbConnect->query($sql);
    //$stmt = $sql -> prepare($sql);

    if($stmt -> num_rows>=1){
        echo json_encode(array('res'=>'bad'));
    }else{
        echo json_encode(array('res'=>'good'));
    }
?>