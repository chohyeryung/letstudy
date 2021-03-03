<?php
    include_once('header.php');
    if(isset($_SESSION["useridx"]))  $u_idx=$_SESSION["useridx"];
    else $u_idx="";
    if(isset($_SESSION["userid"]))  $u_name=$_SESSION["userid"];
    else $u_name="";

    echo $u_name;

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
            echo '<pre>';
            var_dump($_SESSION);
            echo '</pre>';
          
                // if(!$num_match){
                //     echo `<h3>$u_name</h3> 님, 지금부터 매일의 성취를 느껴보아요.</h3>`;
                // }else{
                //     // $row=mysqli_fetch_array($result);
                //     // mysqli_close($conn);
                //     // // echo $row['id'];
                //     // if((password_verify( $pw, $row['pw'] ))){   //$pass!=$db_pass
                        
                //     //     $_SESSION["useridx"]=$row["idx"];
                //     //     $_SESSION["userid"]=$row["id"];
                //     //     $_SESSION["username"]=$row["name"];
                //     //     $_SESSION["userlevel"]=$row["level"];
                //     //     $_SESSION["userpoint"]=$row["point"];
                    
                        
                        
                //     //     echo("
                //     //         <script>
                //     //             alert('로그인 되었습니다')
                //     //             location.href='index.php'
                //     //         </script>
                //     //     ");
                //     // }else{
                //     //     echo("
                //     //         <script>
                //     //             alert('비밀번호가 틀립니다');
                //     //             location.href='login.php';
                //     //         </script>
                //     //     ");
                //     //     exit;
                //     // }
                // }
            ?>
        </ul>
    </form>
</body>
</html>