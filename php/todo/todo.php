<?php
    include_once($_SERVER["DOCUMENT_ROOT"].'/study/php/header.php');
    if(isset($_SESSION["useridx"]))  $u_idx=$_SESSION["useridx"];
    else $u_idx="";
    if(isset($_SESSION["userid"]))  $u_name=$_SESSION["userid"];
    else $u_name="";

    include '../../dbConfig.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/todo.css" />
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <!-- <script>
        var memberIdCheck = $('.memberIdCheck');
        var memberIdCheck = $('.memberIdCheck');
        memberIdCheck.click(function(){
        // console.log(memberId.val());
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: '../php/memberIdCheck.php',
            data: {memberId: memberId.val()},
 
            success: function (json) {
                if(json.res == 'good') {
                    console.log(json.res);
                    memberIdComment.text('사용가능한 아이디 입니다.');
                    idCheck.val('1');
                }else{
                    console.log('no');
                    memberIdComment.text('다른 아이디를 입력해 주세요.');
                    memberId.focus();
                }
            },
 
            error:function(request,status,error){
                alert("code = "+ request.status + " message = " + request.responseText + " error = " + error); // 실패 시 처리
            },
        });
    </script> -->
    <title>Let' Study</title>
</head>
<body>
    <form class="js-toDoForm" action="todo_process.php" name="" method="POST">
        <input type="text" name="content" class="input-todo" placeholder="Write to do">
        <input type="submit" class="btn-add" name="submit" value="+">
    </form>
        <?php    
            $sql = $db->query("SELECT * FROM `todo` WHERE user_idx = '$u_idx'");

            foreach($sql as $row) {
        ?>
                <table>
                    <tr>
                        <td class="contents"><?= htmlspecialchars($row['content']) ?></td>
                        <td>
                            <form method="POST">
                                <button type="submit" class="btn-delete" name="delete">DELETE</button>
                                <input type="hidden" name="id" value="<?= $row['idx'] ?>">
                                <input type="hidden" name="delete" value="true">
                            </form>
                        </td>
                    </tr>
                </table>
        <?php
            }
        ?>
    </form>
</body>
</html>