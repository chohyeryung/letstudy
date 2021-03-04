<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/create.css" />
    <title>Let' Study</title>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
    <?php
        
        if(isset($_SESSION["userid"]))  $userid1=$_SESSION["userid"];
        else $userid1="";
        include_once('header.php');
    ?>
    <!-- <form action="create_process2.php" method="post" enctype="multipart/form-data">
        Select Image File to Upload:
        <input type="file" name="file">
        <input type="submit" name="submit" value="Upload">
    </form> -->
    <!-- <form action="create_process.php?name=<?=$userid1?>" method="post" class="upload_form"> -->
    <form action="create_process2.php" method="post" enctype="multipart/form-data" class="upload_form">
        <h2 class="title_create">글쓰기</h2>
        <hr>
        <input class="input_title" type="text" name="title" autocomplete="off">
        <input type="file" name="file" id="ex_filename" class="upload-hidden"> 
        <input type="text" class="input_des" name="description" autocomplete="off">
      
        <input type="submit" name="submit" class="create_ok" value="등록">
    </form>
</body>
</html>

