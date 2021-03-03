<?php
    session_start();
    if(isset($_SESSION["useridx"]))  $u_idx=$_SESSION["useridx"];
    else $u_idx="";

    $conn=mysqli_connect('localhost', 'root', '111111', 'study');

    if(isset($_POST['submit'])) {
        $content = $_POST['content'];
        $sql = "INSERT INTO todo (content, user_idx) VALUES ('$content', '$u_idx')";
        if($conn -> query($sql) === TRUE) {
            // header("Location : todo.php");
        } else {
            echo "Error : ". $sql . "<br>" . $conn -> error;
        }

        $conn -> close();
    }
?>