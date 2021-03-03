<?php
    include_once('header.php');
    if(isset($_SESSION["useridx"]))  $u_idx=$_SESSION["useridx"];
    else $u_idx="";
    if(isset($_SESSION["userid"]))  $u_name=$_SESSION["userid"];
    else $u_name="";

    $conn=mysqli_connect('localhost', 'root', '111111', 'study');

    $sql="SELECT * FROM `todo` WHERE user_idx = '$u_idx'";
    $result = mysqli_query($conn, $sql);
    $num_match = mysqli_num_rows($result);
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
    <!-- <fieldset>
        <legend class="main_title"><h1>To-Do List</h1></legend>
            
    </fieldset> -->
    <form class="js-toDoForm" action="todo_process.php" method="post">
        <input type="text" class="input-todo" placeholder="Write to do" />
        <ul class="toDoList">
            <?php          
                if(!$num_match){
                    echo '<h3>'.$u_name.'</h3> 님';
                }else{
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) { ?>
                    <table>
                        <tr>
                            <td><?php echo $row['todo'] ?></td>
                            <td><a href="todo_delete.php?del_id=<?php echo $row['idx'] ?>">x</a> </td>
                        </tr>
                    </table>
                    <?php 
                        $i++; 
                    } 
                }
            ?>
        </ul>
    </form>
</body>
</html>