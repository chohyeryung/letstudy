<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="board.css" />
        <link rel="icon" href="data:;base64,iVBORw0KGgo=">
        <title>Let' Study</title>
    </head>
    <body>
        <?php
            include_once('header.php');
            $conn=mysqli_connect('localhost', 'root', '111111', 'study');
            $sql="SELECT * FROM board";
            $result=mysqli_query($conn, $sql);
            $list='';
            while($row=mysqli_fetch_array($result)){
                $escaped_num=htmlspecialchars($row['id']);
                $escaped_title=htmlspecialchars($row['title']);
                $escaped_time=htmlspecialchars($row['created']);
                $escaped_time=substr($escaped_time, 0 , 11);
                $escaped_name=htmlspecialchars($row['name']);
                $list_title="<a href=\"write.php?id={$row['id']}\">{$escaped_title}</a>";
                $list=$list.'<tr><td>'.$escaped_num.'</td><td>'.$list_title.'</td><td>'.$escaped_time.'</td><td>'.$escaped_name.'</td></tr>';
            }
        ?>
        <div class="board_container">
            <h2 class="title_board">게시판</h2>
            <div class="button">
                <input type="text" class="cate" name="login_id" placeholder="전체" autocomplete="off">
                <input type="text" class="search" name="login_id" placeholder="검색어를 입력하세요" autocomplete="off">
            </div>
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
                <tbody>
                    <?=$list?>
                </tbody>
            </table>
            <a href="create.php"><button class="create">글쓰기</button></a>
        </div>
    </body>
    </head>
</html>