<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" type="text/css" href="../css/signUp.css" />
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script type="text/javascript" src="../js/mySignupForm.js"></script>
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
</head>
<body>
    <?php
        include_once('header.php');
    ?>
    <center>
        <form name="join" class="signUp_form" method="post" action="join.php" onsubmit="return checkSubmit()">
            <table>
                <tr>
                    <td>
                        <h4 class="text">아이디</h4>
                        <input type="text" name="memberId" class="memberId" />
                        <div class="memberIdCheck">중복 확인</div>
                        <div class="memberIdComment comment"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 class="text">비밀번호</h4>
                        <input type="password" size="30" name="memberPw" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 class="text">비밀번호 확인</h4>
                        <input type="password" size="30" name="memberPw2" autocomplete="off">
                        <div class="memberPw2Comment comment"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 class="text">닉네임</h4>
                        <input type="text" maxlength="10" name="memberNickName" size="12" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 class="text">생년월일</h4>
                        <input type="date" class="yymmdd" name="memberBirthDay">
                        <!-- <select name="birth2" class="yymmdd mar">
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
                        <input type="text" class="yymmdd" placeholder="일" name="birth3" size="10" autocomplete="off"> -->
                    </td>
                </tr>
                <tr>
                   
                    <td> 
                        <h4 class="text">전화번호</h4>
                        <input type="text" placeholder="휴대전화 ('-'없이 11자 입력)" name="memberTele">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 class="text">이메일</h4>
                        <input type="text" name="memberEmailAddress" class="email mar2" autocomplete="off">
                            <select name="memberEmailAddress2" class="email">
                                <option value="직접입력" class="placeholder" selected>직접 입력</option>
                                <option value="naver.com">naver.com</option>
                                <option value="gmail.com">gmail.com</option>
                                <option value="daum.net">daum.net</option>
                                <option value="nate.com">nate.com</option>
							    <option value="hanmail.com">hanmail.com</option>
                            </select>
                        <div class="memberEmailAddressComment comment"></div>
                    </td>
                </tr>
            </table>
            <input class="button_submit" type="submit" value="회원가입">
        </form>

        <div class="formCheck">
            <input type="hidden" name="idCheck" class="idCheck" />
            <input type="hidden" name="pw2Check" class="pwCheck2" />
            <input type="hidden" name="eMailCheck" class="eMailCheck" />
        </div>
    </center>
</body>
</html>