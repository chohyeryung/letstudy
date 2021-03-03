<?php
    session_start();
    if(isset($_SESSION["useridx"]))  $u_idx=$_SESSION["useridx"];
    else $u_idx="";

    // $conn=mysqli_connect('localhost', 'root', '111111', 'study');
    $pdo = new PDO("mysql:host=localhost;dbname=study;charset=utf8","root","");
    
    if(isset($_POST['submit'])) {
        $content = $_POST['content'];
        $sql = "INSERT INTO todo (content, user_idx) VALUES ('$content', '$u_idx')";
        if($conn -> query($sql) === TRUE) {
            // header("Location : todo.php");
        }else {
            echo "Error : ". $sql . "<br>" . $conn -> error;
        }

        $conn -> close();
    } else if(isset($_POST['delete'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM todo WHERE idx = '$id'";
        if($conn -> query($sql) === TRUE) {
            
        }else {
            echo "Error : ". $sql . "<br>" . $conn -> error;
        }
    }
?>