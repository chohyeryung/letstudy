<?php
    if(isset($_SESSION["userid"]))  $userid1=$_SESSION["userid"];
    else $userid1="";
    include_once('header.php');
    $conn=mysqli_connect('localhost', 'root', '111111', 'study');
    $filetered_id=mysqli_real_escape_string($conn, $_GET['id']);
    $sql="SELECT * FROM board WHERE id={$filetered_id}";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($result);
    $borad['name']=htmlspecialchars($row['name']);
    $board['title']=htmlspecialchars($row['title']);
    $board['description']=htmlspecialchars($row['description']);
    $board['time']=htmlspecialchars($row['created']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="upload.css" />
        <link rel="icon" href="data:;base64,iVBORw0KGgo=">
        <title>Let' Study</title>
        <style>
            /* .board{
                border: 1px solid gray;
                margin-top:100px;
                height:55%;
                width:40%;
                position:absolute;
                top:40%; left:50%;
                transform: translate(-50%, -50%);
                padding:30px;
            }
            .board_title{
                padding-left:12%;
                margin:0;
                margin-top:10px;
            }
            hr{
                width:80%;
                margin: auto;
            }
            form{
                position:absolute;
                bottom:10%; left:50%;
                transform: translate(-50%, -50%);
            } */
        </style>
    </head>
    <body>
        <div class="board">
            <h1 class="board_title"><?=$board['title']?></h1>
            <h4><?=$board['time']?></h4>
            <hr>
            <h3><?=$board['description']?></h3>
            <a href="upload.php">글목록</a>
        </div>
        <?php
        
            if($userid1==$row['name']){
        ?>
        <form action="process_delete.php" method="POST">
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <input type="submit" value="삭제">
        </form>
        <?php
            }
        ?>
    </body>
</html>