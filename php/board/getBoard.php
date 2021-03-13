<?php
    $conn = mysqli_connect('localhost', 'root', '111111', 'study');

    $data = array();

    $search = $_POST['search'];

    $sql = "SELECT * FROM board ";
    $sql."WHERE 1 = 1";

    if($search != '') {
        $sql."AND title = " + $search;
    }

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            // echo $row['id'];
            array_push($data, $row);
        }
        $result->close();
        
    }else{
        echo "테이블에 데이터가 없습니다.";
    }

    echo json_encode($data); 

    $conn->close();
?>