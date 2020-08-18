<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="upload.css" />
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
                $escaped_title=htmlspecialchars($row['title']);
                $escaped_time=htmlspecialchars($row['created']);
                $escaped_name=htmlspecialchars($row['name']);
                $list_title="<a href=\"upload_list.php?id={$row['id']}\">{$escaped_title}</a>";
                $list=$list.'<tr><td>'.$list_title.'</td><td>'.$escaped_time.'</td><td>'.$escaped_name.'</td></tr>';
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
                        <hr>
                        <th>제목</th>
                        <th>작성일</th>
                        <th>작성자</th>
                    </tr>
                </thead>
                <tbody>
                    <?=$list?>
                </tbody>
            </table>
        </div>
    </body>
    </head>
</html>