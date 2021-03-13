<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/board.css" />
        <link rel="icon" href="data:;base64,iVBORw0KGgo=">
        <title>Let' Study</title>
    </head>
    <script>
        function getBoard() {
            // 검색어를 받아야 함.

            // ajax을 이용해서 데이터를 가져왔음
           $.ajax({
                type: 'post',
                dataType: 'json',
                url: '../php/board/getBoard.php',
                data: {},
                success: createBoards,
                error:function(request,status,error){
                    alert("code = "+ request.status + " message = " + request.responseText + " error = " + error); // 실패 시 처리
                },
            });
        }

        // 테이블을 찍어내면 됨.
        function createBoards(json) {
            
        }

        
        <table class="table_list">
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>제목</th>
                            <th>작성일</th>
                            <th>작성자</th>
                            <th>조회수</th>
                        </tr>
                    </thead>
                    <tr>
                        <form method="post" action="board_detail.php" class="show-form">
                            <td><?= $row['id'] ?></td>
                            <td>
                                <input type="hidden" name="bid" value="<?= $row['id'] ?>">
                                <input type="submit" name="detail" class="b-title" value="<?= $row['title'] ?>">
                            </td>
                            <td><?= $row['uploaded_on'] ?></td>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['hit'] ?></td>
                        </form>
                    </tr>
                </table>
    </script>
    <body onload="getBoard()">
        <?php
            include_once('header.php');
            $pdo = new PDO("mysql:host=localhost;dbname=study;charset=utf8","root","111111");
        ?>

        <div class="board_container">
            <h2 class="title_board">게시판</h2>
            <div class="button">
                <form method="post">
                    <input type="text" class="search" name="search" placeholder="검색어를 입력하세요" autocomplete="off">
                    <input type="button" onclick="getBoard();" value="검색"/>
                </form>
            </div>
            <div id="boards">
                <?php
                    $sql = "SELECT * FROM board";
                    $stmt = $pdo -> prepare($sql);
                    $stmt -> execute();
        
                    foreach($stmt as $row) {
                ?>
                <table class="table_list">
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>제목</th>
                            <th>작성일</th>
                            <th>작성자</th>
                            <th>조회수</th>
                        </tr>
                    </thead>
                    <tr>
                        <form method="post" action="board_detail.php" class="show-form">
                            <td><?= $row['id'] ?></td>
                            <td>
                                <input type="hidden" name="bid" value="<?= $row['id'] ?>">
                                <input type="submit" name="detail" class="b-title" value="<?= $row['title'] ?>">
                            </td>
                            <td><?= $row['uploaded_on'] ?></td>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['hit'] ?></td>
                        </form>
                    </tr>
                </table>
                <?php } ?>
            </div>
            <a href="create.php"><button class="create">글쓰기</button></a>
        </div>
    </body>
</html>