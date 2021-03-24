<?php
    include '../../dbConfig.php';
    $id = $_POST['id'];
    $statusMsg = '';

    //파일 업로드 path
    $targetDir = "../../uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
   
    if(isset($_POST['delete'])){
        $sql = $db -> query("DELETE FROM board WHERE id = '$id'");

        if($sql) {
            Header("Location:board_view.php"); 
        }else {
            echo 'error';
        }
    }else if(isset($_POST['update'])){
        if(!empty($_FILES["file"]["name"])){
            $sql = $db -> query("SELECT * FROM board WHERE id = '$id'");

            if($sql -> num_rows > 0){
                while($row = $sql -> fetch_assoc()){
                    $title = $_POST['title'];
                    $des = $_POST['description'];
        
                    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
                    if(in_array($fileType, $allowTypes)) {
                        //server에 파일 업로드
                        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                            //Insert into database
                            $update = $db -> query("UPDATE `board` SET title='$title', description='$des', file_name='$fileName', uploaded_on=NOW() WHERE id = '$id'");
                            if($update) {
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
                }
            }
        }else{
            $sql = $db -> query("SELECT * FROM board WHERE id = '$id'");

            if($sql -> num_rows > 0){
                while($row = $sql -> fetch_assoc()){
                    $title = $_POST['title'];
                    $des = $_POST['description'];
    
                    $update = $db -> query("UPDATE `board` SET title='$title', description='$des', uploaded_on=NOW() WHERE id = '$id'");
                    if($update) {
                        Header("Location:board_view.php"); 
                        $statusMsg = "The file ".$fileName. " has been uploaded successfully";
                    }
                }
            }
        }
        echo $statusMsg;
    }

?>