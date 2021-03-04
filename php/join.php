<link rel="icon" href="data:;base64,iVBORw0KGgo=">
<?php
	$conn = mysqli_connect("localhost", "root", "111111", "study");

    $userid=$_POST['memberId'];
    // $userpw=hex(aes_encrypt($_POST['pw'],'userpw'));
    $userpw=password_hash($_POST['memberPw'], PASSWORD_DEFAULT);
	$nick=$_POST['memberNickName'];
    $age=$_POST['memberBirthDay'];
	$email= $_POST['email'].'@'.$_POST['emadress'];
 
    $query = "INSERT INTO `member` (`id`, `pw`, `nickname`, `age`, `email`, `level`, `point`) VALUES ('$userid', '$userpw', '$name', '$age', '$organization', '$email', '$tele', 9, 0)";
 
    //입력받은 데이터를 DB에 저장
 	$result = mysqli_query($conn, $query);
 
    //저장이 됬다면 (result = true) 가입 완료
    if($result) {
    ?>      <script>
                alert('가입 되었습니다.');
                location.replace("login.php");
            </script>
 
<?php   }
        else{
?>             <script>
					<?php
                    echo('Error description: ' . $conn->error);
					?>
                </script>
<?php   }
    mysqli_close($conn);

?>