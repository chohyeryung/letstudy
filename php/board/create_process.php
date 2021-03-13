<?php
    session_start();
    if(isset($_SESSION["useridx"]))  $useridx=$_SESSION["useridx"];
    else $useridx="";
    if(isset($_SESSION["username"]))  $username=$_SESSION["username"];
    else $username="";
    include '../../dbConfig.php';
    $statusMsg = '';

    //파일 업로드 path
    $targetDir = "../../uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    $title = $_POST['title'];
    $des = $_POST['description'];

    if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
        //파일 포멧 수락
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if(in_array($fileType, $allowTypes)) {
            //server에 파일 업로드
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                //Insert into database
                $insert = $db -> query("INSERT INTO `board` (name, title, description, hit, file_name, uploaded_on, uid) VALUES ('$username', '$title', '$des', 0,'".$fileName."', NOW(), '$useridx')");
                if($insert) {
                    Header("Location:board.php"); 
                    $statusMsg = "The file ".$fileName. " has been uploaded successfully";
                }else{
                    $statusMsg = "File upload failed, please try again.";
                    echo mysqli_error($db);
                }
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
                echo mysqli_error($db);
            }
        }else{
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
            echo mysqli_error($db);
        }
    }else{
        $statusMsg = 'Please select a file to upload.';
        echo mysqli_error($db);
    }

    echo $statusMsg;
    
    
    

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