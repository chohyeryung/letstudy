<?php
    $conn=mysqli_connect('localhost', 'root', '111111', 'study');
    $filtered=array(
        'title'=>mysqli_real_escape_string($conn, $_POST['title']),
        'description'=>mysqli_real_escape_string($conn, $_POST['description'])
    );

    $sql="INSERT INTO board
            (name, title, description, created)
            VALUES(
                '{$_GET['name']}',
                '{$_POST['title']}',
                '{$_POST['description']}',
                NOW()
            )
    ";
    $result=mysqli_query($conn, $sql);
    if($result===false){
        echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.';
        echo mysqli_error($conn);
    }else{
        Header("Location:upload.php"); 
    }
?>