<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" type="text/css" href="../css/signUp.css" />
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <!-- <script type="text/javascript" src="../js/mySignupForm.js"></script> -->
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
</head>
<body>
    <?php
        include_once('header.php');
    ?>
    <center>
        <form name="join" class="signUp_form" method="POST" action="join.php" >
            <table>
                <tr>
                    <td>
                        <h4 class="text">아이디</h4>
                        <input type="text" name="memberId" class="memberId" />
                        <!-- <div class="memberIdCheck">중복 확인</div> -->
                        <div class="memberIdComment comment"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 class="text">닉네임</h4>
                        <input type="text" name="memberNickName" class="memberNickName"  />
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 class="text">비밀번호</h4>
                        <input type="password" name="memberPw" class="memberPw" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 class="text">비밀번호 확인</h4>
                        <input type="password" name="memberPw2" class="memberPw2"  />
                        <div class="memberPw2Comment comment"></div>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <h4 class="text">생년월일</h4>
                        <input type="date" name="memberBirthDay" class="memberBirthDay" />
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
                        <h4 class="text">이메일</h4>
                        <input type="text" name="memberEmailAddress" class="memberEmailAddress" />
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