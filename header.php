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
                <h1 class="title"><a href="index.php">Let' study</a></h1>
                <div class="nav">
                    <a href="login.php">
                        <h4 class="todo">할일</h3>
                    </a>
                    <a href="login.php">
                        <h4 class="board">게시판</h3>
                    </a>
                    <a href="login.php">
                        <h4 class="question">Q & A</h3>
                    </a>
                    <a href="login.php">
                        <h4 class="map">공부 지도</h3>
                    </a>
                </div>
                <div class="member">
                    <li><button onclick="location.href='login.php'">로그인</button></li>
                    <li>||</li>
                    <li><button onclick="location.href='agree.php'">회원가입</button></li>
                </div>
            </div>
        <?php
        }else{
        ?>
            <div class="container">
                <h1 class="title"><a href="index.php">Let' study</a></h1>
                <div class="nav">
                    <a href="todo.php">
                        <h4 class="todo">할일</h3>
                    </a>
                    <a href="board.php">
                        <h4 class="board">게시판</h3>
                    </a>
                    <a href="question.php">
                        <h4 class="question">Q & A</h3>
                    </a>
                    <a href="map.html">
                        <h4 class="map">공부 지도</h3>
                    </a>
                </div>
                <div class="member">
                    <li><a href="modify.php"><h4>마이페이지</h4></a></li>
                    <li><a href="logout.php"><h4>로그아웃</h4></a></li>
                </div>
            </div>
        <?php
        }
        ?>
    </header>
</body>
</html>