<?php
    // include '../dbConfig.php';
    $pdo = new PDO("mysql:host=localhost;dbname=study;charset=utf8","root","111111");
    $id = $_POST['id'];
    if(isset($_POST['delete'])){
        $sql = "DELETE FROM board WHERE id = '$id'";
        $stmt = $pdo -> prepare($sql);
        $stmt -> execute();
        Header("Location:board.php"); 
    }else if(isset($_POST['update'])){
        Header("Location:update.php"); 
    }
    // if($stmt){
        
    // }else{
    //     echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.';
    //     error_log(mysqli_error($conn));
    // }
?>