<?php
    include '../../dbConfig.php';

    $userid = $_POST['memberId'];
    $userpw=password_hash($_POST['memberPw'], PASSWORD_DEFAULT);
	$nickname=$_POST['memberNickName'];
    $birthday=$_POST['memberBirthDay'];
    $email = $_POST['memberEmailAddress'];
 
    //입력받은 데이터를 DB에 저장
    $sql = $db -> query("INSERT INTO `member` 
    (`id`, `pw`, `nickname`, `birthday`, `email`, `level`, `point`) 
    VALUES ('$userid', '$userpw', '$nickname', '$birthday', '$email', 9, 0)");

    //저장이 됬다면 (result = true) 가입 완료
    if($sql) {
?>      
        <script>
            alert('가입 되었습니다.');
            location.replace("login_view.php");
        </script>

<?php   }
        else{
?>             
        <?php
        echo('Error description: ' . $conn->error);
        // echo $query;
        // echo "<pre>";
        //     print-_r($_POST);
        // echo "</pre>";
        ?>
<?php   }
    mysqli_close($conn);

?> 