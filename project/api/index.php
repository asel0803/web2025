<?php
    function UploadMultipltipleFiles(array $images)
    {   
        $imagesStore = []; //хранятся названия картинок
        $uploadDir = '../static/images/';
        foreach($images['tmp_name']  as $key => $value) //tmp_name -- ключ к массиву где лежит путь до файла фото поста
        {
            $postname = basename($images['name'][$key]); // безнейм возвращает то что в нейм и кдаём в постнейм
            $targetFile = $uploadDir . $postname; // таргет файл - полный путь до файла, составляем таргет файл

            if(move_uploaded_file($value, $targetFile)) 
            {//загружаем то что лежиит в велью в таргет файл
                array_push($imagesStore, $postname); //собираем все названия карпотинок в имедж стор для дальнейшего имплода 
            }
            else
            {
                return false;
            }
        }
        $pathImages = implode(', ', $imagesStore); 
        return $pathImages; 
    }
    
    require_once '../home/script.php';

    $method = $_SERVER['REQUEST_METHOD'];
    if ($method != 'POST') {
        return;
    }
    if (isset($_FILES['image']) && isset($_POST['user_id']) && isset($_POST['count_like']) 
        && isset($_POST['content'])) {
        $pathToImages = '';


        $images = $_FILES['image'];
        $pathToImages = UploadMultipltipleFiles($images);
        if ($pathToImages != false){
            $post = [];
            $post['content'] = $_POST['content'];
            $post['user_id'] = $_POST['user_id'];
            $post['images'] = $pathToImages;
            $post['count_like'] = $_POST['count_like'];
            savePostToDatabase($post);
        }
        else {
            echo 'err';
        }
    }//цикл по всем картинкам 
?>