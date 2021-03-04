<?php
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false){
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // $conn=mysqli_connect('localhost', 'root', '111111', 'study');
    // $filtered=array(
    //     'title'=>mysqli_real_escape_string($conn, $_POST['title']),
    //     'description'=>mysqli_real_escape_string($conn, $_POST['description'])
    // );



    // $sql="INSERT INTO board
    //         (name, title, description, created)
    //         VALUES(
    //             '{$_GET['name']}',
    //             '{$_POST['title']}',
    //             '{$_POST['description']}',
    //             NOW()
    //         )
    // ";
    // $result=mysqli_query($conn, $sql);
    // if($result===false){
    //     echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.';
    //     echo mysqli_error($conn);
    // }else{
    //     Header("Location:upload.php"); 
    // }

?>