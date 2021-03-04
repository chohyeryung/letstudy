<?php
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';

    $target_dir = "../uploads/";
    $target_file = '';
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if(isset($_POST["submit"])) {
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false){
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Sorry, your file is too large";
        $uploadOk = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed";
        echo $imageFileType;
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "파일 업로드 실패";
    } else {
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $filename = $_FILES["fileToUpload"]["name"];
            $imgurl = "http://localhost/study/uploads/". $_FILES["fileToUpload"]["name"];
            $size = $_FILES["fileToUpload"]["size"];

            $conn=mysqli_connect('localhost', 'root', '111111', 'study');
            $sql = "INSERT INTO images(filename, imgurl, size) VALUES ('$filename', '$imgurl', '$size')";

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