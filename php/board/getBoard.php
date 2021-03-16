<?php
    $conn = mysqli_connect('localhost', 'root', '111111', 'study');

    $data = array();

    $search = $_GET['search'];

    $sql = "SELECT * FROM board";

    if($search) {
        $sql.=" WHERE title LIKE '%$search%'";
    } 
   
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            // echo $row['id'];
            array_push($data, $row);
            echo '하이';
        }
        $result->close();
        
    }else{
        echo "테이블에 데이터가 없습니다.";
    }

    // echo json_encode($data, JSON_UNESCAPED_UNICODE); 
    print_r($data);

    $conn->close();
?>