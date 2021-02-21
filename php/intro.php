<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link rel="icon" href="data:;base64,iVBORw0KGgo=">
        <link rel="stylesheet" type="text/css" href="../css/intro.css" />
        <title>Let' Study</title> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <?php
            include_once('header.php');
        ?>
        <p class="text_box">
            <mark><span id="bold">Let' Study, </span>&nbsp;&nbsp;&nbsp;<span class="light">함께 공부해요</span></mark>
        </p>
        <p class="img_box">
            <img src="img/study_alone.png">
            <span class="study_text">혼자 공부하기 어려우신가요 ? </h2>
            <br>
            <img src="img/together.png">
            <span class="study_text">내가 한 공부를 뽐내고 ! </h2>
            <br>
            <img src="img/library.png">
            <span class="study_text">내 위치 주변 도서관이 어딨는지 알아보세요! </h2>
        </p>
        <script>
            $(document).ready(function(){
                setTimeout(function() { 
                    $(".text_box").animate({opacity : "0.8", width:"400px"}, 2000);
                }, 200);
            });
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </body>
</html>