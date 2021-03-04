<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>정보수정</title>
    <link rel="stylesheet" type="text/css" href="../css/mypage.css" />
    <script type="text/javascript" src="../js/member_modify.js"></script>
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
</head>
<body>
    <?php
        include_once('header.php');
        $conn=mysqli_connect('localhost', 'root', '111111', 'study');
        $sql="SELECT * FROM `member` WHERE id='$userid1'";
        $result=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($result);

        $nickname=$row["nickname"];
        $birthday=$row["birthday"];
        $email=$row["email"];

        mysqli_close($conn);
    ?>
    <center>
        
        <form name="join" class="signUp_form" method="post" action="mypage_process.php?id=<?=$userid1?>">
        <h2 class="title_sign">정보수정</h2>
            <table>
                <tr>
                    <td>
                        <input type="text" size="30" name="memberId" readonly value="<?=$userid1?>" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" size="30" name="memberPw" placeholder="비밀번호 재설정" autocomplete="off">
                    </td>
                </tr>
                    <td>
                        <input type="text" maxlength="10" name="memberNickName" size="12" value="<?=$nickname?>" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="memberBirthday" size="5" value="<?=$birthday?>" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="memberEmailAddress" class="memberEmailAddress" value="<?= $email ?>"/>
                    </td>
                </tr>
            </table>
            <input class="button_submit" type="submit" onclick="check_input()" value="저장하기">
            <input class="button_submit" type="submit" onclick="reset_form()" value="취소하기">
        </form>
    </center>
</body>
</html>