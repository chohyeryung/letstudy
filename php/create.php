<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/create.css" />
    <title>Let' Study</title>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
    <?php
        
        if(isset($_SESSION["userid"]))  $userid1=$_SESSION["userid"];
        else $userid1="";
        include_once('header.php');
    ?>
    <form action="create_process2.php" method="post" enctype="multipart/form-data">
        Select Image File to Upload:
        <input type="file" name="file">
        <input type="submit" name="submit" value="Upload">
    </form>
    <!-- <form action="create_process.php?name=<?=$userid1?>" method="post" class="upload_form"> -->
    <!-- <form action="create_process.php" method="POST" class="upload_form">
        <h2 class="title_create">글쓰기</h2>
        <hr>
        <table>
            <tr>
                <td>
                    <h4 class="text t">글제목</h4>
                </td>
                <td>
                    <input class="input_title" type="text" name="title" autocomplete="off">
                </td>
            </tr>
            <tr>
                <td>
                    <h4 class="text f">파일 첨부</h4> 
                </td>
                <td>
                    <div class="filebox"> 
                        <label for="ex_filename">파일 선택</label> 
                        <input class="file_name" value="선택된 파일 없음" disabled="disabled"> 
                        <input type="file" name="file" id="ex_filename" class="upload-hidden"> 
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <h4 class="text d">내용</h4>
                </td>
                <td>
                    <input type="text" class="input_des" name="description" autocomplete="off"></textarea>
                </td>
            </tr>
        </table>
        <input type="submit" class="create_ok" value="등록">
    </form> -->
</body>
</html>

