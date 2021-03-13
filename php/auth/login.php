<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <link rel="stylesheet" type="text/css" href="../../css/login.css" />
    <script type="text/javascript" src="../../js/login.js"></script>
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
</head>
<body>
    <?php
        include_once('../header.php');
    ?>
    <div class="log_container">
        <center>
            <form name="login" class="form" method="post" action="login_ok.php">
            <h2 class="title_sign">로그인</h2>
                <table>
                    <tr>
                        <td class="input_id">
                            <input type="text" name="login_id" placeholder="아이디" autocomplete="off">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" class="input_pw" name="login_pw" placeholder="비밀번호" autocomplete="off">
                        </td>
                    </tr>
                </table>
                <a class="button_submit" onclick="check_input()">로그인</a>
                <div class="log_nav">
                    <a href="agree.php"><h4 class="log">회원가입</h4></a>
                    <a href="#"><h4 class="log">|</h4></a>
                    <a href="find_id.php"><h4 class="log">아이디 찾기</h4></a>
                    <a href="#"><h4 class="log">|</h4></a>
                    <a href="find_pw.php"><h4 class="log">비밀번호 찾기</h4></a>
                </div>
            </form>
        </center>
    </div>
</body>
</html>