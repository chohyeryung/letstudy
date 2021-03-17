<?php
    include '../../dbConfig.php';
    include_once('../header.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../css/board_detail.css" />
        <link rel="icon" href="data:;base64,iVBORw0KGgo=">
        <title>Let' Study</title>
    </head>
    <body>
        <?php
            $title = $_GET['title'];
            $id = $_GET['id'];
            $sql = $db -> query("SELECT * FROM board WHERE id = '$id'");
            
            if($sql -> num_rows > 0){
                while($row = $sql -> fetch_assoc()){
                    $hit=$row["hit"];
                    $new_hit = $hit+1;
                    $imageURL = '../../uploads/'.$row["file_name"];
                    $sql2 = $db -> query("UPDATE `board` SET hit = '$new_hit' WHERE id = '$id'");
        
        ?>
                    <div class="written_board">
                        <h1 class="board_title"><?=$row['title']?><h4 class="time"><?=$row['uploaded_on']?></h4></h1>
                        <hr>
                        <img src="<?php echo $imageURL; ?>" class="board-img" alt=""/>
                        <h3 class="des"><?=$row['description']?></h3>
                    <?php
                        if($useridx==$row['uid']){
                    ?>
                        <div class="btn-con">
                            <form action="board.php" method="POST">
                                <input type="hidden" name="id" value="<?=$row['id']?>">
                                <input type="submit" class="btn-update" value="수정">
                            </form>
                            <form action="board.php" method="POST">
                                <input type="hidden" name="id" value="<?=$row['id']?>">
                                <input type="submit" class="btn-delete" name="delete" value="삭제">
                                <!-- <input type="submit" class="btn-update" name="update" value="수정"> -->
                            </form>
                            <a href="board_view.php"><button class="go_board">목록</button></a>
                        </div>
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