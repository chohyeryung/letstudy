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
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if(in_array($fileType, $allowTypes)) {
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                //Insert into database
                $insert = $db -> query("INSERT INTO `board` (name, title, description, hit, file_name, uploaded_on, uid) VALUES 
                ('$username', '$title', '$des', 0,'".$fileName."', NOW(), '$useridx')");
                if($insert) {
                    Header("Location:board_view.php"); 
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
?>