<?php
    require_once 'post.php';
    require_once '../validation.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Страница основной ленты</title>
    <link rel="stylesheet" href="../static/fonts/Golos-UI/fonts.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
    require_once 'script.php';
    // $file_posts = file_get_contents("../data/json/posts.json", true);
    // $posts = json_decode($file_posts, true);
    // $file_users = file_get_contents("../data/json/users.json", true);
    // $users = json_decode($file_users, true);

    //mysql
    $posts = GetPosts();
    $users = GetUsers();
    $postNew = [];//м-в обработка постов
    $count = 0;
 
    ?>

    <div class="home-page">
        <div class="wrapper-navigation">
            <a href="../home/"> 
                <!-- динамическая ссылка -->
                <img class="wrapper-navigation__image" src="../static/images/home.svg" alt="домой">
            </a>
            <a href="../profile/?user_id=1">
                <img class="wrapper-navigation__image" src="../static/images/person.svg" alt="пользователь">
            </a>
            
            <img class="navigation" src="../static/images/plus.svg" alt="плюс">
        </div>
        <div class="content">
            <?php
            $renderingpost = $posts; 
            $postsofuser = GetPostsofuser($posts);
            if ($postsofuser) { //если есть посты по нужному id используем их
                $renderingpost = $postsofuser;
            }
            foreach ($renderingpost as $post) { 
                $userKey = array_search($post["user_id"], array_column($users, 'user_id'));
                $user = $users[$userKey];
                if (ValidatePost($post)) {
                    renderPost($post, $user);
                }
            }
            ?>
        </div>
    </div>
    <script src="../scripts/slider.js"></script>
</body>

</html>

<!-- на php я получаю все посты, картинки и пользователей, я пытаюсь соединить все картинки в массив, 
 где ключ это post_id, а значения это массив с названиями картинок; проблема в том, что id отличаются на -1 
 и картинки не добавляются в посты 