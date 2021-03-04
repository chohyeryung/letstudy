<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/board.css" />
        <link rel="icon" href="data:;base64,iVBORw0KGgo=">
        <title>Let' Study</title>
    </head>
    <body>
        <?php
            include_once('header.php');
            $pdo = new PDO("mysql:host=localhost;dbname=study;charset=utf8","root","111111");
        ?>

        <div class="board_container">
            <h2 class="title_board">게시판</h2>
            <div class="button">
                <input type="text" class="cate" name="login_id" placeholder="전체" autocomplete="off">
                <input type="text" class="search" name="login_id" placeholder="검색어를 입력하세요" autocomplete="off">
            </div>
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
                            <input type="text" name="bid" value="<?= $row['id'] ?>">
                            <input type="submit" name="detail" class="b-title" value="<?= $row['title'] ?>">
                        </td>
                        <td><?= $row['uploaded_on'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['hit'] ?></td>
                    </form>
                </tr>
                <?php } ?>
            </table>
            <a href="create.php"><button class="create">글쓰기</button></a>
        </div>
    </body>
</html>