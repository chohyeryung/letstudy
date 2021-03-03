<?php
    $pdo = new PDO("mysql:host=localhost;dbname=study;charset=utf8","root","111111");
    include_once('header.php');
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
        <?php
            if(isset($POST['submit'])) {
                $id = $POST['bid'];
                $sql = $pdo -> prepare("SELECT * FROM board WHERE id = '$id'");
                $sql -> execute();

                foreach($sql as $row){
            
        ?>
                    <div class="written_board">
                        <h1 class="board_title"><?=$row['title']?><h4 class="time"><?=$row['created']?></h4></h1>
                        <hr>
                        <h3 class="des"><?=$row['description']?></h3>
                        <a href="board.php"><button class="go_board">목록</button></a>
                    <?php
                        if($userid1==$row['user_idx']){
                    ?>
                        <form action="process_delete.php" method="POST">
                            <input type="hidden" name="id" value="<?=$row['id']?>">
                            <input type="submit" value="삭제">
                        </form>
                    </div>
                    <?php
                        }
                    ?>
                <?php
                    }
                ?>
            <?php
                }
            ?>
    </body>
</html>