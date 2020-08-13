<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" type="text/css" href="signUp.css" />
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
</head>
<body>
    <?php
        include_once('header.php');
    ?>
    <center>
        <form name="join" class="signUp_form" method="post" action="join.php">
        <fieldset>
        <legend><h1 class="title_sign">회원가입</h1></legend>
            <table>
                <tr>
                    <td>
                        <input type="text" name="id" id="uid" size="30" placeholder="아이디" required autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" size="30" name="pw" placeholder="비밀번호" required autocomplete="off">
                    </td>
                </tr>
                    <td>
                        <input type="text" maxlength="10" name="name" size="12" placeholder="이름" required autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="age" size="5" placeholder="나이" required autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="organization" size="30" placeholder="소속" required autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td style="padding-left:15px">
                        <input type="text" class="tele" value="010" name="tele1">-
                        <input type="text" class="tele" name="tele2" size="10" placeholder="휴대전화" required autocomplete="off">-
                        <input type="text" class="tele" name="tele3" size="10" placeholder="휴대전화" required autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="email" placeholder="이메일" required autocomplete="off">@
                            <select name="emadress">
                                <option value="naver.com" selected>naver.com</option>
                                <option value="gmail.com">gmail.com</option>
                                <option value="daum.net">daum.net</option>
                                <option value="nate.com">nate.com</option>
							    <option value="hanmail.com">hanmail.com</option>
                            </select>
                    </td>
                </tr>
            </table>
            </fieldset>
            <input class="button_submit" type="submit" onclick="check_id()" value="회원가입">
        </form>
    </center>
</body>
</html>