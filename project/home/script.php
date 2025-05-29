<?php
// $connection = connectDatabase();
// $postId = savePostToDatabase($connection, [
//     'user_id' => '2',
//     'content' => 'Текст-рыба для нового поста',
//     'likes' => '52',
// ]);
// $post = findPostInDatabase($connection, $postId);
// var_dump($post);



function connectDatabase(): PDO
{
    $dsn = 'mysql:host=127.0.0.1;dbname=blog';
    $user = 'Asel@localhost';
    $password = 'password';
    return new PDO($dsn, $user, $password);
}

function savePostToDatabase(array $postParams) {
    $query = <<<SQL
        INSERT INTO post (user_id, count_like, images, content)
        VALUES (:user_id, :count_like, :images, :content)
    SQL;
    $statement = connectDatabase()->prepare($query);
    $statement->execute([
        ':user_id' => $postParams['user_id'],
        ':count_like' => $postParams['count_like'],
        ':images' => $postParams['images'],
        ':content' => $postParams['content']
    ]);
}

function GetPosts(): ?array {
    $posts = connectDatabase()->query("SELECT * FROM post")->fetchAll(PDO::FETCH_ASSOC);
    foreach ($posts as $key => $post) {
        $posts[$key]['images'] = explode(', ', $post['images']); // разделяет на массив строк, чтобы было легче работать с 1 объектом 
    }

    return $posts;
}
function GetUsers(): ?array {
    return connectDatabase()->query("SELECT * FROM user")->fetchAll(PDO::FETCH_ASSOC); // PDO --  объект для работы с бд
}
//сделать подготовку постов внутри гет пост и реализовать каественный ретёрн as4my