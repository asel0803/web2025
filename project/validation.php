<?php

function ValidateProfile(int $user_id, array $users): array|bool
{
    foreach ($users as $user) {
        if ($user['user_id'] == $user_id) {
            return $user;
        }
    }
    return false;
}

function ValidatePost(array $post)
{
    $isPostIncorrect = false;
    foreach ($post as $key => $value) {
        if ($key == 'content') {
            if (is_numeric($value) || (strlen($value) >= 500)) {
                $isPostIncorrect = true;
                break;
            }
        }
        if ($key == 'post_id' || $key == 'user_id' || $key == 'like') {
            if (!is_numeric($value)) {
                $isPostIncorrect = true;
                break;
            }
        }
        if ($key == 'posted_at') {
            if (!strtotime($value)) {
                $isPostIncorrect = true;
                break;
            }
        }
    }
    if ($isPostIncorrect) {
        return false;
    }
    return true;
}

function GetUser(array $users): array|bool 
{
    if (!isset($_GET['user_id']) || !is_numeric($_GET['user_id'])) {
        return false;
    }

    $user_id = (int)$_GET['user_id']; // Приводим к числу
    return ValidateProfile($user_id, $users);   
}

function GetPostsofuser(array $posts): array|bool 
{
    // Проверяем наличие user_id в GET-параметрах
    if (!isset($_GET['user_id'])) {
        return false;
    }

    // Преобразуем в число (включая 0)
    $user_id = (int)$_GET['user_id'];
    
    $postsofusers = [];
    foreach ($posts as $post) {
        // Строгое сравнение типов
        if ((int)$post['user_id'] === $user_id) {
            $postsofusers[] = $post;
        }
    }
    
    return $postsofusers;
}
