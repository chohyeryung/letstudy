<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css" />
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION["userid"]))  $userid1=$_SESSION["userid"];
        else $userid1="";
        if(isset($_SESSION["username"]))  $username=$_SESSION["username"];
        else $username="";
        if(isset($_SESSION["userlevel"]))  $userlevel=$_SESSION["userlevel"];
        else $userlevel="";
        if(isset($_SESSION["userpoint"]))  $userpoint=$_SESSION["userpoint"];
        else $userpoint="";
    ?>
    <header>
        <?php
        if(!$userid1){
            ?>
            <div class="container">
                <div class="title"><a href="index.php"><img src="img/logo.png"></a></div>
                <div class="nav">
                    <a href="login.php">
                        <h4 class="todo">할일</h4>
                    </a>
                    <a href="login.php">
                        <h4 class="board">게시판</h4>
                    </a>
                    <a href="login.php">
                        <h4 class="question">Q & A</h4>
                    </a>
                    <a href="login.php">
                        <h4 class="map">공부 지도</h4>
                    </a>
                </div>
                <div class="member">
                    <a href="login.php"><h4 class="m_text">로그인</h4></a>
                    <h4 class="m_text">|</h4>
                    <a href="agree.php"><h4 class="m_text">회원가입</h4></a>
                </div>
            </div>
        <?php
        }else{
        ?>
            <div class="container">
                <div class="title"><a href="index.php"><img src="img/logo.png"></a></div>
                <div class="nav">
                    <a href="todo.php">
                        <h4 class="todo">할일</h4>
                    </a>
                    <a href="board.php">
                        <h4 class="board">게시판</h4>
                    </a>
                    <a href="question.php">
                        <h4 class="question">Q & A</h4>
                    </a>
                    <a href="map.html">
                        <h4 class="map">공부 지도</h4>
                    </a>
                </div>
                <div class="member">
                    <a href="modify.php"><h4 class="m_text">마이페이지</h4></a>
                    <a href="#"><h4 class="m_text">|</h4></a>
                    <a href="logout.php"><h4 class="m_text">로그아웃</h4></a>
                </div>
            </div>
        <?php
        }
        ?>
    </header>
</body>
</html>