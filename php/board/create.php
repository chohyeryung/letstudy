<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/create.css" />
    <title>Let' Study</title>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script>
        $(document).ready(function(){ 
            var fileTarget = $('.filebox .upload-hidden'); 
            fileTarget.on('change', function(){ // 값이 변경되면 
                if(window.FileReader){ // modern browser 
                    var filename = $(this)[0].files[0].name; 
                } else { // old IE 
                    var filename = $(this).val().split('/').pop().split('\\').pop(); // 파일명만 추출 
                } 
                // 추출한 파일명 삽입 
                $(this).siblings('.file_name').val(filename); 
            }); 
        });
    </script>
</head>
<body>
    <?php
        include_once('../header.php');
    ?>
    <form action="create_process.php" method="post" enctype="multipart/form-data" class="upload_form">
        <h2 class="title_create">글쓰기</h2>
        <hr>
        <table>
            <tr>
                <td>
                    <h4 class="text t">글제목</h4>
                </td>
                <td>
                    <input class="input_title" type="text" name="title" autocomplete="off">
                </td>
            </tr>
            <tr>
                <td>
                    <h4 class="text f">파일 첨부</h4> 
                </td>
                <td>
                    <div class="filebox"> 
                        <label for="ex_filename">파일 선택</label> 
                        <input class="file_name" value="선택된 파일 없음" disabled="disabled"> 
                        <input type="file" name="file" id="ex_filename" class="upload-hidden"> 
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <h4 class="text d">내용</h4>
                </td>
                <td>
                    <input type="text" class="input_des" name="description" autocomplete="off"></textarea>
                </td>
            </tr>
        </table>
      
        <input type="submit" name="submit" class="create_ok" value="등록">
    </form>
</body>
</html>

