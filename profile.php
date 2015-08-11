<?session_start();?>
<html>
<head>
    <meta charset="UTF-8">
    <script src="/js/jquery.js"></script>
    <script src="/js/script.js" type="text/javascript" ></script>
    <link href="/css/style.css"rel="stylesheet">
</head>
<body>
<div class="profile"><h1><?=$_SESSION['language_profile']['profile']?></h1>
    <?
    foreach ($_SESSION['data']as $item=>$key):?>
        <p><img src='<?=$key['link']?>'width="200" height="100"/></p>
        <H3><?=$_SESSION['language_profile']['first_name']?></H3>
        <p><?=$key['first_name']?></p>
        <H3><?=$_SESSION['language_profile']['last_name']?></H3>
        <p><?=$key['last_name'];?></p>
        <H3><?=$_SESSION['language_profile']['login']?></H3>
        <p><?=$key['login'];?></p>
        <H3><?=$_SESSION['language_profile']['email']?></H3>
        <p><?=$key['email']."<br>";?></p>
    <?endforeach;?>
    <a href="/inc/exit.php"><?=$_SESSION['language_profile']['main_page']?></a>
</div>
</body>
</html>
