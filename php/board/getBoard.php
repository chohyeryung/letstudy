<?
    include_once('header.php');
    $pdo = new PDO("mysql:host=localhost;dbname=study;charset=utf8","root","111111");

    //. 1. 검색에 필요한 검색어 파라미터를 받아와야 함.
    $sql = "SELECT * FROM board ";
    // 검색 기능을 구현하기 위해서 IF로 검색어가 있으면 SQL에 WHERE을 더해줘야 함.
    $stmt = $pdo -> prepare($sql);
    $stmt -> execute();

    foreach($stmt as $row) {
    }
    // JSON으로 결과를 만들어서 리턴해줘야 함.
?>