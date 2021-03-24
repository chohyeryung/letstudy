<?php
    include '../../dbConfig.php';

    $data = array();

    $search = $_POST['search'];

    $query = "SELECT * FROM board";

    if($search) {
        $query.=" WHERE title LIKE '%$search%'";
    }

    $sql = $db -> query($query);
    if ($sql -> num_rows > 0) {
        while($row = $sql -> fetch_assoc()) {
            array_push($data, $row);
        }
        
    }else{
        echo "테이블에 데이터가 없습니다.";
    }

    echo json_encode($data, JSON_UNESCAPED_UNICODE); 
?>