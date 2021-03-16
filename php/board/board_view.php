<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <link rel="stylesheet" type="text/css" href="../../css/board.css" />
        <link rel="icon" href="data:;base64,iVBORw0KGgo=">
        <title>Let' Study</title>
    </head>
    <?php
        include_once($_SERVER["DOCUMENT_ROOT"].'/study/php/header.php');
    ?>
    <script>
        function getBoard() {
            // 검색어를 받아야 함.
            var search = document.getElementById("search");

            // ajax을 이용해서 데이터를 가져왔음
           $.ajax({
                type: 'POST',
                dataType: 'json',
                url: 'getBoard.php',
                data: {search : search.value},
                success: createBoards,
                error:function(request,status,error){
                    alert("code = "+ request.status + " message = " + request.responseText + " error = " + error); // 실패 시 처리
                },
            });
        }

        // 테이블을 찍어내면 됨.
        // <table class="table_list">
        //     <thead>
        //         <tr>
        //             <th>번호</th>
        //             <th>제목</th>
        //             <th>작성일</th>
        //             <th>작성자</th>
        //             <th>조회수</th>
        //         </tr>
        //     </thead>
        //     <tr>
        //         <form method="post" action="board_detail.php" class="show-form">
        //             <td><?= $row['id'] ?></td>
        //             <td>
        //                 <input type="hidden" name="bid" value="<?= $row['id'] ?>">
        //                 <input type="submit" name="detail" class="b-title" value="<?= $row['title'] ?>">
        //             </td>
        //             <td><?= $row['uploaded_on'] ?></td>
        //             <td><?= $row['name'] ?></td>
        //             <td><?= $row['hit'] ?></td>
        //         </form>
        //     </tr>
        // </table>
        function createBoards(json) {
            var i;
            console.log(json);
            var html = "";
            var jid;
            var jtitle;
            var juploaded;
            var jname;
            var jhit;
            for(i=0; i<json.length; i++){
                jid = json[i].id;
                jtitle = json[i].title;
                juploaded = json[i].uploaded_on;
                jname = json[i].name;
                jhit = json[i].hit;

                var tr = document.getElementById('setTable');
                
                var form = document.createElement('form');
                form.setAttribute("charset", "UTF-8");
                form.setAttribute("method", "POST");  
                form.setAttribute("action", "board_detail_view.php"); 
                tr.appendChild(form);

                var td1 = document.createElement('td');
                form.appendChild(td1);

                var id = document.createElement('input');
                id.setAttribute("name", "bid");   
                id.setAttribute("value", jid);   
                td1.appendChild(id);

                var td2 = document.createElement('td');
                form.appendChild(td2);

                var hiddenid = document.createElement("input");
                hiddenid.setAttribute("type", "hidden");
                hiddenid.setAttribute("name", "bid");
                hiddenid.setAttribute("value", jid);
                td2.appendChild(hiddenid);

                var title = document.createElement("input");
                title.setAttribute("type", "submit");
                title.setAttribute("name", "title");
                title.setAttribute("class", "b-title");
                title.setAttribute("value", jtitle);
                td2.appendChild(title);

                var td3 = document.createElement('td');
                td3.innerHTML = juploaded;
                form.appendChild(td3);

                var td4 = document.createElement('td');
                td4.innerHTML = jname;
                form.appendChild(td4);

                var td5 = document.createElement('td');
                td5.innerHTML = jhit;
                form.appendChild(td5);

                console.log(tr);
                
            }
        
            //     <tr>
            //         <form method="post" action="board_detail.php" class="show-form">
            //             <td id="bid"></td>
            //             <td>
            //                 <input type="hidden" name="bid">
            //                 <input type="submit" name="title" class="b-title">
            //             </td>
            //             <td id="uploaded"></td>
            //             <td id="name"></td>
            //             <td id="hit"></td>
            //         </form>
            //     </tr>
            // </table>
            //     `;
            // }

            // console.log(html);
            // }
        }

        
    </script>
    <body onload="getBoard()">
        <?php
           
            $pdo = new PDO("mysql:host=localhost;dbname=study;charset=utf8","root","111111");
        ?>

        <div class="board_container">
            <h2 class="title_board">게시판</h2>
            <div class="button">
                <form method="POST">
                    <input type="text" id="search" name="search" placeholder="검색어를 입력하세요" autocomplete="off">
                    <input type="button" onclick="getBoard();" value="검색"/>
                </form>
            </div>
            <div id="boards">
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
                    <tr id="setTable">
                    </tr>
                </table>
            </div>
            <a href="create_view.php"><button class="create">글쓰기</button></a>
        </div>
    </body>
</html>