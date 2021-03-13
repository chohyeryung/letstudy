<?php
    include '../../dbConfig.php';
    include_once('../header.php');
    if(isset($_SESSION["useridx"]))  $useridx=$_SESSION["useridx"];
    else $useridx="";
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
            if(isset($_POST['title'])) {
                $id = $_POST['bid'];
                $sql = $db -> query("SELECT * FROM board WHERE id = '$id'");
                
                if($sql -> num_rows > 0){
                    while($row = $sql -> fetch_assoc()){
                        $hit=$row["hit"];
                        $new_hit = $hit+1;
                        $imageURL = '../uploads/'.$row["file_name"];
                        $sql2 = $db -> query("UPDATE `board` SET hit = '$new_hit' WHERE id = '$id'");
            
        ?>
                        <div class="written_board">
                            <h1 class="board_title"><?=$row['title']?><h4 class="time"><?=$row['uploaded_on']?></h4></h1>
                            <hr>
                            <img src="<?php echo $imageURL; ?>" alt=""/>
                            <h3 class="des"><?=$row['description']?></h3>
                            <a href="board.php"><button class="go_board">목록</button></a>
                        <?php
                            if($useridx==$row['uid']){
                        ?>
                            <form action="board_process.php" method="POST">
                                <input type="hidden" name="id" value="<?=$row['id']?>">
                                <input type="submit" class="btn-delete" name="delete" value="삭제">
                                <!-- <input type="submit" class="btn-update" name="update" value="수정"> -->
                            </form>
                            <form action="update.php" method="POST">
                                <input type="hidden" name="id" value="<?=$row['id']?>">
                                <input type="submit" class="btn-update" value="수정">
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
            <?php
                }else{
                    echo 'no';
                }
            ?>
    </body>
</html>