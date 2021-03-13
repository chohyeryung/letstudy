<?php
    $conn=mysqli_connect('localhost', 'root', '111111', 'study');

    $id=$_POST["id"];

    $sql = "";

    // $pw=hex(aes_encrypt($_POST['pw'],'userpw'));
    $pw=password_hash($_POST['pw'], PASSWORD_DEFAULT);
	$name=$_POST['name'];
    $age=$_POST['age'];
    $organization=$_POST['organization'];
    $tele=$_POST['tele1'].'-'.$_POST['tele2'].'-'.$_POST['tele3'];
    $email= $_POST['email'].'@'.$_POST['emadress'];
    
    if(isset($_POST['submit'])) {
        $sql="UPDATE `member` SET `pw`='$pw', `name`='$name', `age`='$age', `organization`='$organization', `tele`='$tele', `email`='$email'";
        $sql.="WHERE id='$id'";
        
        mysqli_query($conn, $sql);

        mysqli_close($conn);

        echo("
            <script>
                alert('정보수정이 완료 되었습니다')
                location.href='index.php'
            </script>
        ");
    }elseif(isset($_POST['delete'])) {
        $sql="DELETE `member` WHERE `id`='$id'";

        mysqli_query($conn, $sql);

        mysqli_close($conn);

        echo("
            <script>
                alert('회원 탈퇴 되었습니다.')
                location.href='index.php'
            </script>
        ");
    }
  
    
    
?>