<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <title><?=$_SESSION['language']['title']?></title>
    <link href="/css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <link href="js/script.js">
    <script src="js/script.js" type="text/javascript" ></script>
</head>
<body>
<div class="language">
    <a href="inc/language.php?lan=en" name="en">En</a>
    <a href="inc/language.php?lan=ru"name="ru">Ru</a>
</div>
<div><a href="login.php"><?=$_SESSION['language']['account']?></a></div>
    <?include_once('./error.php');?>
    <form action="index.php" name="form" method="post" id="myform" class="myform" onkeyup="valid()" enctype="multipart/form-data" onsubmit="return testFile(this)">
        <div class="form">
        <label class="main"><?=$_SESSION['language']['first_name']?>:</label>
        <input placeholder="<?=$_SESSION['language']['first_name_place']?>" id="first" type="text" name="first_name" size="23"required="">
        </div>
        <div class="form">
        <label class="main"><?=$_SESSION['language']['last_name']?>:</label>
        <input placeholder="<?=$_SESSION['language']['last_name_place']?>" id="last" type="text" name="last_name" size="23"required="">
        </div>
        <div class="form">
        <label class="main"><?=$_SESSION['language']['login']?>:</label>
        <input placeholder="<?=$_SESSION['language']['login_place']?>" id="login" type="text" name="login" size="23"required="">
        </div>
        <div class="form">
        <label class="main"><?=$_SESSION['language']['email']?>:</label>
        <input placeholder="<?=$_SESSION['language']['email_place']?>" id="email" type="email" name="email" size="23"required="">
        </div>
        <div class="form">
        <label class="main"><?=$_SESSION['language']['password']?>:</label>
        <input placeholder="<?=$_SESSION['language']['password_place']?>" id="pass" type="password" name="password" size="23"required="">
            <label id="first_pass" class="second"></label>
        </div>
        <div class="form">
        <label class="main"><?=$_SESSION['language']['confirm']?>:</label>
        <input placeholder="<?=$_SESSION['language']['repeat_place']?>" id="repass" type="password" name="repasss" size="23"required="">
        </div>
        <div class="form" >
            <label ><?=$_SESSION['language']['image']?></label>
            <input placeholder="Select an image" type="file" name="file_load" required="" id="file_load">
        </div>
        <input type="submit" value="<?=$_SESSION['language']['reg_btn']?>" name="submit_reg" id="submit">
    </form>
    <div id="first_" class="one">*</div>
    <div id="last_" class="one">*</div>
    <div id="login_" class="one">*</div>
    <div id="email_" class="one">*</div>
    <div id="password_" class="one">*</div>
    <div id="repass_" class="one">*</div>
    <div id="image_" class="one">*</div>
</body>
</html>
