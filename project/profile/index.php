<?php
    require_once 'profile.php';
    require_once '../validation.php'
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Страница профиля</title>
    <link rel="stylesheet" href="../static/fonts/Golos-UI/fonts.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<?php
        require_once '../home/script.php';
        // $data = file_get_contents("../data/json/users.json", true);
        // $arr = json_decode($data, true);
        // $postsJson = file_get_contents("../data/json/posts.json", true);
        // $posts = json_decode($postsJson, true);
        $posts = GetPosts();
        $users = GetUsers();
        $user = GetUser($users);
        $postNew = []; //для обработки постов
        $count = 0;
        
         if (!$user)
        {
             header('Location: ../home/', true);
             exit;
        }
        $posts_id=[];
        $images=[];
        foreach ($posts as $post){
            if ($user['user_id'] == $post['user_id']) {
                array_push($images, $post['images']);//сделать так чтобы посты относились к нужому юзеру
                }
        }
        $user['id_posts'] = $posts_id;
    ?>
    <div class="home-page"> 
        <div class="wrapper-navigation"> 
            <a href="../home/">     
                <!-- добавили динамичесукие ссылки -->
                <img class="navigation" src="../static/images/homeclear.svg" alt="домой">
            </a>
            <a href="../profile/?user_id=0">
                <img class="navigation" src="../static/images/persondote.svg" alt="пользователь">
            </a>
            <img class="navigation" src="../static/images/plus.svg" alt="плюс">
        </div>
        <div class="main">
            <?php
                renderProfile($user, $images);

            ?>
        </div>
    </div>

</html>