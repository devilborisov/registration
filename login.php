<?session_start()?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?=$_SESSION['language_login']['title']?></title>
    <link href="/css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
</head>
<body>
<form action="index.php" name="form" method="post" id="form_login" class="myform" >
    <div class="form">
        <label class="main"><?=$_SESSION['language_login']['login']?>:</label>
        <input placeholder="<?=$_SESSION['language_login']['login_place']?>" id="login" type="text" name="login_user" size="23"required="">
    </div>
    <div class="form">
        <label class="main"><?=$_SESSION['language_login']['password']?>:</label>
        <input placeholder="<?=$_SESSION['language_login']['password_place']?>" id="pass" type="password" name="pas_user" size="23"required="">
        <label id="first_pass" class="second"></label>
    </div>
    <input type="submit" value="<?=$_SESSION['language_login']['sub_btn']?>" name="submit_log" id="submit">
</form>
</body>
</html>
