<?php
    $conn = mysqli_connect('localhost', 'root', '111111', 'study');

    $data = array();

    $search = $_POST['search'];

    $sql = "SELECT * FROM board";

    if($search) {
        $sql.=" WHERE title LIKE '%$search%'";
    }

    $result = mysqli_query($conn, $sql);
    $total_atricle = mysqli_num_rows($result);
    if ($total_atricle > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            // echo $row['id'];
            array_push($data, $row);
        }
        $result->close();
        
    }else{
        echo "테이블에 데이터가 없습니다.";
    }

    echo json_encode($data, JSON_UNESCAPED_UNICODE); 

    $conn->close();

    include("page.php");
?>