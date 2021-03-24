<?php
    session_start();
    include '../../dbConfig.php';

    $idx=$_POST["useridx"];

    $sql = "";
    $userid = $_POST['memberId'];
    $userpw=password_hash($_POST['memberPw'], PASSWORD_DEFAULT);
	$nickname=$_POST['memberNickName'];
    $birthday=$_POST['memberBirthDay'];
    $email = $_POST['memberEmailAddress'];
    
    if(isset($_POST['submit'])) {
        $sql = $db -> query("UPDATE `member` SET `id`='$userid', `pw`='$userpw', `nickname`='$nickname', `birthday`='$birthday', `email`='$email' WHERE idx='$idx'");
        
        if($sql) {
            echo("
                <script>
                    alert('정보수정이 완료 되었습니다');
                    location.href='../index.php';
                </script>
            ");
        }else {
            echo 'error';
        }
    }elseif(isset($_POST['delete'])) {
        $sql = $db -> query("DELETE m, b FROM `member` AS m JOIN `board` AS b ON m.idx=b.uid WHERE m.idx='$idx'");
        
        session_destroy();

        if($sql) {
            echo("
                <script>
                    alert('회원 탈퇴 되었습니다.');
                    location.href='../index.php';
                </script>
            ");
        }
       
    }
?>