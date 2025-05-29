<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>home</title>
    <link href="style.css" rel="stylesheet"> 
</head>

<body>
    <?php
    require('postrender.php');
    $posts= json_decode($file_get_contents('user.json'), TRUE);
    $users = json_decode($file_get_contents('post.json'), TRUE);
    ?>


    <div  class="feed">
        <div class="navigation"> 
            <img class = "navigation__link" src="../static/images/home.svg" alt="дом">
            <img class = "navigation__link" src="../static/images/person.svg" alt="профиль">
            <img class = "navigation__link" src="../static/images/plus.svg" alt="добавления поста">
        </div>
    </div>
</body>

</html>