<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="create.css" />
    <title>Let' Study : 글쓰기</title>
</head>
<body>
    <?php
        
        if(isset($_SESSION["userid"]))  $userid1=$_SESSION["userid"];
        else $userid1="";
        include_once('header.php');
    ?>
    <form action="create_process.php?name=<?=$userid1?>" method="post" class="upload-form">
        <p><input class="input_title" type="text" name="title" autocomplete="off" placeholder="글 제목"></p>
        <p><textarea class="input_des" name="description" autocomplete="off" placeholder="본문 작성"></textarea></p>
        <input type="submit" value="확인">
    </form>
</body>
</html>

