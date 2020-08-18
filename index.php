<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css" />
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <title>Let' Study</title>
</head>
<body>
    <?php
        include_once('header.php');
        if(isset($_SESSION["userid"]))  $userid1=$_SESSION["userid"];
        else $userid1="";
        if(isset($_SESSION["username"]))  $username=$_SESSION["username"];
        else $username="";
        if(isset($_SESSION["userlevel"]))  $userlevel=$_SESSION["userlevel"];
        else $userlevel="";
        if(isset($_SESSION["userpoint"]))  $userpoint=$_SESSION["userpoint"];
        else $userpoint="";
    ?>
    <div class="index_container">
        <div class="fir_con">
            <h3>혼자 공부하는 당신을 위한 선택,</h3>
            <div class="index_title"><a href="index.php"><img src="img/logo.png"></a></div>
            <table>
                <tr>
                    <!-- <div class="circle"></div> -->
                    <td>일정 관리를 위한 할 일 기능 제공</td>
                </tr>
                <tr>
                    <td>공부 계획과 현황을 공유하는 게시판 기능 제공</td>
                </tr>
                <tr>
                    <td>궁금한 점을 질문하고 답변하는 Q & A 기능 제공</td>
                </tr>
                <tr>
                    <td>도서관과 학원 정보가 담긴 공부 지도 기능 제공</td>
                </tr>
            </table>
        </div>
        <div class="index_img">
            <img src="img/일러스트.png">
        </div>
    </div>
    <div class="index_s_container">
        <h5>Let' study는 로그인 후 이용 가능한 서비스입니다</h5>
        <a href="login.php"><button class="start">시작하기</button></a>
    </div>
    <?php
        include_once('footer.html');
    ?>
</body>
</html>