<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>정보수정</title>
    <link rel="stylesheet" type="text/css" href="mypage.css" />
    <script type="text/javascript" src="member_modify.js"></script>
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
</head>
<body>
    <?php
        include_once('header.php');
        $conn=mysqli_connect('localhost', 'root', '111111', 'study');
        $sql="SELECT * FROM `member` WHERE id='$userid1'";
        $result=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($result);

        $name=$row["name"];
        $age=$row["age"];
        $oz=$row["organization"];
        $tele=explode("-", $row["tele"]);
        $tele1=$tele[0];
        $tele2=$tele[1];
        $tele3=$tele[2];
        $email=explode("@", $row["email"]);
        $email1=$email[0];
        $email2=$email[1];

        mysqli_close($conn);
    ?>
    <center>
        
        <form name="join" class="signUp_form" method="post" action="mypage_process.php?id=<?=$userid1?>">
        <h2 class="title_sign">정보수정</h2>
            <table>
                <tr>
                    <td>
                        <input type="text" size="30" name="id" readonly value="<?=$userid1?>" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" size="30" name="pw" placeholder="비밀번호 재설정" autocomplete="off">
                    </td>
                </tr>
                    <td>
                        <input type="text" maxlength="10" name="name" size="12" value="<?=$name?>" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="age" size="5" value="<?=$age?>" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="organization" size="30" value="<?=$oz?>" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" style="width:120px;" value="<?=$tele1?>" name="tele1">&nbsp;<span>-</span>
                        <input type="text" style="width:120px;" name="tele2" size="10" value="<?=$tele2?>" autocomplete="off">&nbsp;<span>-</span>
                        <input type="text" style="width:120px;" name="tele3" size="10" value="<?=$tele3?>" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" style="width:290px;" name="email" value="<?=$email1?>" autocomplete="off">&nbsp;<span>@</span>
                            <select name="emadress">
                                <option value="<?=$email2?>" selected>naver.com</option>
                                <option value="gmail.com">gmail.com</option>
                                <option value="daum.net">daum.net</option>
                                <option value="nate.com">nate.com</option>
							    <option value="hanmail.com">hanmail.com</option>
                            </select>
                    </td>
                </tr>
            </table>
            <input class="button_submit" type="submit" onclick="check_input()" value="저장하기">
            <input class="button_submit" type="submit" onclick="reset_form()" value="취소하기">
        </form>
    </center>
</body>
</html>