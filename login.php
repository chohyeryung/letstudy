<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <link rel="stylesheet" type="text/css" href="login.css" />
    <script type="text/javascript" src="login.js"></script>
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
</head>
<body>
    <?php
        include_once('header.php');
    ?>
    <center>
        
        <form name="login" class="form" method="post" action="login_ok.php">
        <fieldset>
        <legend><h1 class="title_sign">로그인</h1></legend>
            <table>
                <tr>
                    <td>
                        <input type="text" name="login_id" placeholder="아이디" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="login_pw" placeholder="비밀번호" autocomplete="off">
                    </td>
                </tr>
            </table>
            </fieldset>
            <a class="button_submit" onclick="check_input()"><p>로그인</p></a>
        </form>
    </center>
</body>
</html>