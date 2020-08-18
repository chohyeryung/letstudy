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
            <table>
                <tr>
                    <td>
                        <h4 class="text">아이디</h4>
                        <input type="text" name="id" id="uid" size="30" required autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 class="text">비밀번호</h4>
                        <input type="password" size="30" name="pw" required autocomplete="off">
                    </td>
                </tr>
                    <td>
                        <h4 class="text">이름</h4>
                        <input type="text" maxlength="10" name="name" size="12" required autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 class="text">생년월일</h4>
                        <input type="text" class="yymmdd" placeholder="년 (4자)" name="birth1">
                        <select name="birth2" class="yymmdd mar">
                                <option value="월" selected>월</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
							    <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
							    <option value="10">10</option>
                                <option value="11">11</option>
							    <option value="12">12</option>
                            </select>
                        <input type="text" class="yymmdd" placeholder="일" name="birth3" size="10"required autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 class="text">소속</h4>
                        <input type="text" name="organization" size="30" required autocomplete="off">
                    </td>
                </tr>
                <tr>
                   
                    <td> 
                        <h4 class="text">전화번호</h4>
                        <input type="text" placeholder="휴대전화 ('-'없이 11자 입력)" name="tele">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 class="text">이메일</h4>
                        <input type="text" name="email" class="email mar2" required autocomplete="off">
                            <select name="emadress" class="email">
                                <option value="직접입력" class="placeholder" selected>직접 입력</option>
                                <option value="naver.com">naver.com</option>
                                <option value="gmail.com">gmail.com</option>
                                <option value="daum.net">daum.net</option>
                                <option value="nate.com">nate.com</option>
							    <option value="hanmail.com">hanmail.com</option>
                            </select>
                    </td>
                </tr>
            </table>
            <input class="button_submit" type="submit" onclick="check_id()" value="회원가입">
        </form>
    </center>
</body>
</html>