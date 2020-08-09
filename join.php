<link rel="icon" href="data:;base64,iVBORw0KGgo=">
<?php
	$conn = mysqli_connect('localhost', 'root', '111111', 'study') or die('fail');

    $userid=$_POST['id'];
    $userpw=password_hash($_POST['pw'], PASSWORD_DEFAULT);
	$name=$_POST['name'];
    $age=$_POST['age'];
    $organization=$_POST['organization'];
    $tele=$_POST['tele1'].'-'.$_POST['tele2'].'-'.$_POST['tele3'];
	$email= $_POST['email'].'@'.$_POST['emadress'];
 
    $query = "INSERT INTO `member` (`id`, `pw`, `name`, `age`, `organization`, `email`, `tele`, `level`, `point`) VALUES ('$userid', '$userpw', '$name', '$age', '$organization', '$email', '$tele', 9, 0)";
 
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
                    // echo $query;
                    // echo "<pre>";
                    //     print-_r($_POST);
                    // echo "</pre>";
					?>
                </script>
<?php   }
    mysqli_close($conn);

?>