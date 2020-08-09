<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이디 중복 체크</title>
</head>
<body>
    <h3>아이디 중복 체크</h3>
    <p>
    <?php
        $id=$_GET["id"];
        if($id==''){
            echo("<li>아이디를 입력해 주세요!</li>");
        }else{
            $conn=mysqli_connect('localhost', 'root', '111111', 'study');
            $sql="SELECT * FROM `member` WHERE id='$id'";
            $result=mysqli_query($conn, $sql);
            $num_record=mysqli_num_rows($result);

            if($num_record){
                echo "<li>중복된 아이디입니다.</li>";
            }else{
                echo "<li>".$id." 아이디는 사용 가능합니다.</li>";
            }
            mysqli_close($conn);
        }
    ?>
    </p>
    <div id="close">
        <button value="닫기" class="check_id_close" onclick="window.close()">닫기</button>
    </div>
</body>
</html>