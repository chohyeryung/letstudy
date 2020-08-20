<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="create.css" />
    <title>Let' Study</title>
</head>
<body>
    <?php
        
        if(isset($_SESSION["userid"]))  $userid1=$_SESSION["userid"];
        else $userid1="";
        include_once('header.php');
    ?>
    <form action="create_process.php?name=<?=$userid1?>" method="post" class="upload_form">
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
                    <button class="file">파일 첨부</button>
                    <input type="text" size="30" class="file_name" name="file_name" required autocomplete="off" placeholder="선택된 파일 없음">
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
        <input type="submit" value="확인">
    </form>
</body>
</html>

