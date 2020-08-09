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

        if(!$userid1){
    ?>
     <h1>로그인해라</h1>
     <?php
        }else{
    ?>
    <div class="container">
        <div class="first">
            <a href="intro.php">
                <div class="imgp a">
                    <h1 class="text nohover">Let' Study</h1>
                    <h1 class="text hover">소개</h1>
                    <!-- <img class="main_img" src="img/intro.jpg"> -->
                </div>
            </a>
            <a href="todo.php">
                <div class="imgp b">
                    <h1 class="text nohover">To-Do</h1>
                    <h1 class="text hover">오늘 할일</h1>
                    <!-- <img class="main_img" src="img/plan.jpg"> -->
                </div>
            </a>
        </div><br><br><br>
        <div class="second">
            <a href="upload.php">
                <div class="imgp c">
                    <h1 class="text nohover">Upload</h1>
                    <h1 class="text hover">게시물 등록</h1>
                    <!-- <img class="main_img" src="img/upload.jpg"> -->
                </div>
            </a>
            <a href="map.html">
                <div class="imgp d">
                    <h1 class="text nohover">Map</h1>
                    <h1 class="text hover">도서맵</h1>   
                    <!-- <img class="main_img" src="img/map.jpg"> -->
                </div>
            </a>
        </div>
    </div>
    <?php
        }
    ?>
</body>
</html>