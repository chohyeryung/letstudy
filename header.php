<!DOCTYPE html>
<html lang="en">
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
        <h1 class="title"><a href="index.php">Let' study</a></h1>
        <div align="right" class="member">
            <?php
            if(!$userid1){
            ?>
                <li><button onclick="location.href='agree.php'">회원가입</button></li>
                <li>||</li>
                <li><button onclick="location.href='login.php'">로그인</button></li>
                
            <?php
            }else{
                // $logged=$userid1."님[Level : ".$userlevel.", Point : ".$userpoint."]";
                $uri= $_SERVER['REQUEST_URI']; //uri를 구합니다.
                $url=basename($uri);
                if($url=='upload.php'){
                    ?>
                    <li><button onclick="location.href='create.php'">글 작성</button></li>
                    <li><button onclick="location.href='logout.php'">로그아웃</button></li>
                    <li><button onclick="location.href='modify.php'">정보수정</button></li>
                <?php
                    }else{
                ?>
                    <!-- <li><?=$logged?></li>
                    <li>||</li> -->
                    <li><button onclick="location.href='logout.php'">로그아웃</button></li>
                    <!-- <li>||</li> -->
                    <li><button onclick="location.href='modify.php'">정보수정</button></li>
                <?php
                    }
                }
                ?>
           
        </div>
    </header>
    
</body>
</html>
