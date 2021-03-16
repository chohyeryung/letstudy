<?php
    session_start();
    include '../../dbConfig.php';
    if(isset($_SESSION["useridx"]))  $u_idx=$_SESSION["useridx"];
    else $u_idx="";
    
    if(isset($_POST['submit'])) {
        $content = $_POST['content'];
        // $sql = $pdo -> prepare("INSERT INTO todo (content, user_idx) VALUES ('$content', '$u_idx')");
        // $sql -> execute();
        $sql = $db->query("INSERT INTO todo (content, user_idx) VALUES ('$content', '$u_idx')");
        if($sql) {
            Header("Location:todo_view.php"); 
        }else {
            echo "실패";
        }
        
    } else if(isset($_POST['delete'])) {
        $id = $_POST['id'];
        $sql = $db->query("DELETE FROM todo WHERE idx = '$id'");
        if($sql) {
            Header("Location:todo_view.php"); 
        }else {
            echo "실패";
        }
    }
?>