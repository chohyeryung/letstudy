<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/board.css" />
        <link rel="icon" href="data:;base64,iVBORw0KGgo=">
        <title>Let' Study</title>
    </head>
    <body>
        <?php
            include_once('header.php');
            $conn=mysqli_connect('localhost', 'root', '111111', 'study');
            $sql="SELECT * FROM board";
            $result=mysqli_query($conn, $sql);
            $list='';
            while($row=mysqli_fetch_array($result)){
                $escaped_num=htmlspecialchars($row['id']);
                $escaped_title=htmlspecialchars($row['title']);
                $escaped_time=htmlspecialchars($row['created']);
                $escaped_time=substr($escaped_time, 0 , 11);
                $escaped_name=htmlspecialchars($row['name']);
                $list_title="<a href=\"write.php?id={$row['id']}\">{$escaped_title}</a>";
                $list=$list.'<tr><td>'.$escaped_num.'</td><td>'.$list_title.'</td><td>'.$escaped_time.'</td><td>'.$escaped_name.'</td></tr>';
            }
        ?>
        <div class="board_container">
            <h1 class="board_title"><?=$board['title']?><h4 class="time"><?=$board['time']?></h4></h1>
            <hr>
            <h3 class="des"><?=$board['description']?></h3>
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
    </head>
</html>