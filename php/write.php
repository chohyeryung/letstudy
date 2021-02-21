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
        <link rel="stylesheet" type="text/css" href="../css/write.css" />
        <link rel="icon" href="data:;base64,iVBORw0KGgo=">
        <title>Let' Study</title>
    </head>
    <body>
        <div class="written_board">
            <h1 class="board_title"><?=$board['title']?><h4 class="time"><?=$board['time']?></h4></h1>
            <hr>
            <h3 class="des"><?=$board['description']?></h3>
            <a href="board.php"><button class="go_board">목록</button></a>
        <?php
            if($userid1==$row['name']){
        ?>
            <form action="process_delete.php" method="POST">
                <input type="hidden" name="id" value="<?=$_GET['id']?>">
                <input type="submit" value="삭제">
            </form>
        </div>
        <?php
            }
        ?>
    </body>
</html>