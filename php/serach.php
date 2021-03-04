<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once('header.php');
        $pdo = new PDO("mysql:host=localhost;dbname=study;charset=utf8","root","111111");
    ?>

    <div class="board_container">
        <h2 class="title_board">게시판</h2>
        <div class="button">
            <form action="search.php" method="post">
                <input type="text" class="search" name="search" placeholder="검색어를 입력하세요" autocomplete="off">
                <input type="submit">
            </form>
        </div>
        <?php
            $sql = "SELECT * FROM board WHERE title LIKE %'$search'% OR LIKE %'$search' OR LIKE '$search'%";
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
            <?php } ?>
        </table>
        <a href="create.php"><button class="create">글쓰기</button></a>
    </div>
</body>
</html>


