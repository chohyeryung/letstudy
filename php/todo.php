<?php
    include_once('header.php');
    if(isset($_SESSION["useridx"]))  $u_idx=$_SESSION["useridx"];
    else $u_idx="";
    if(isset($_SESSION["userid"]))  $u_name=$_SESSION["userid"];
    else $u_name="";

    $pdo = new PDO("mysql:host=localhost;dbname=study;charset=utf8","root","111111");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/todo.css" />
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <title>Let' Study</title>
</head>
<body>
    <form class="js-toDoForm" action="todo_process.php" name="" method="POST">
        <input type="text" name="content" class="input-todo" placeholder="Write to do">
        <input type="submit" class="btn-add" name="submit" value="+">
    </form>
        <?php    
            $sql=$pdo->prepare("SELECT * FROM `todo` WHERE user_idx = '$u_idx'");
            $sql->execute();

            foreach($sql as $row) {
        ?>
                <table>
                    <tr>
                        <td class="contents"><?= htmlspecialchars($row['content']) ?></td>
                        <td>
                            <form method="POST" action="todo_process.php">
                                <button type="submit" class="btn-delete" name="delete">DELETE</button>
                                <input type="hidden" name="id" value="<?= $row['idx'] ?>">
                                <input type="hidden" name="delete" value="true">
                            </form>
                        </td>
                    </tr>
                </table>
        <?php
            }
        ?>
    </form>
</body>
</html>