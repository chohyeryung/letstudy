<?php
    session_start();
    if(isset($_SESSION["useridx"]))  $u_idx=$_SESSION["useridx"];
    else $u_idx="";

    // $conn=mysqli_connect('localhost', 'root', '111111', 'study');
    $pdo = new PDO("mysql:host=localhost;dbname=study;charset=utf8","root","111111");
    
    if(isset($_POST['submit'])) {
        $content = $_POST['content'];
        $sql = $pdo -> prepare("INSERT INTO todo (content, user_idx) VALUES ('$content', '$u_idx')");
        $sql -> execute();
    } else if(isset($_POST['delete'])) {
        $id = $_POST['id'];
        $sql = $pdo -> prepare("DELETE FROM todo WHERE idx = '$id'");
        $sql -> execute();
    }
?>