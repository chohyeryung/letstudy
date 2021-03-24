<?php
 session_start();
 include '../../dbConfig.php';
//  $conn=mysqli_connect('localhost', 'root', '111111', 'study');
 //입력 받은 id와 password
 $id=$_POST['login_id'];
 $pw=$_POST['login_pw'];
 //아이디가 있는지 검사
 $sql = $db -> query("SELECT * FROM `member` WHERE id='$id'");
//  $sql="SELECT * FROM `member` WHERE id='$id'";
//  $result=mysqli_query($conn, $sql);
//  $num_match=mysqli_num_rows($result);
 if($sql -> num_rows <=0){
    echo("
        <script>
            window.alert('등록되지 않은 아이디입니다');
            location.href='login_view.php';
        </script>
    ");
}else{
    while($row = $sql -> fetch_assoc()){
        if((password_verify( $pw, $row['pw'] ))){   //$pass!=$db_pass
        
            $_SESSION["useridx"]=$row["idx"];
            $_SESSION["userid"]=$row["id"];
            $_SESSION["username"]=$row["nickname"];
            $_SESSION["userlevel"]=$row["level"];
            $_SESSION["userpoint"]=$row["point"];
           
            echo("
                <script>
                    alert('로그인 되었습니다')
                    location.href='../index.php'
                </script>
            ");
        }else{
            echo("
                <script>
                    alert('비밀번호가 틀립니다');
                    location.href='login_view.php';
                </script>
            ");
            exit;
        }
    }
}
?>

