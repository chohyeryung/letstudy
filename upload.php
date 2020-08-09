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
                $escaped_des=htmlspecialchars($row['description']);
                $escaped_time=htmlspecialchars($row['created']);
                $escaped_name=htmlspecialchars($row['name']);
                $list_title="<a href=\"upload_list.php?id={$row['id']}\">{$escaped_title}</a>";
                $list=$list.'<tr><td>'.$list_title.'</td><td>'.$escaped_des.'</td><td>'.$escaped_time.'</td><td>'.$escaped_name.'</td></tr>';
            }
        ?>
        <table class="table_list">
            <thead>
                <tr>
                    <th>title</th>
                    <th>description</th>
                    <th>time</th>
                    <th>글쓴이</th>
                </tr>
            </thead>
            <tbody>
                <?=$list?>
            </tbody>
            </table>
    </body>
    </head>
</html>