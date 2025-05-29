<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
        <div class="add_post" alt="большой блок добавить фото">
             <form action="" alt="обёртка форма">
            <div class="add_photos" alt="добавить фото">
                <div class="add_photos__onephoto" alt="добавить первое фото"> 
                    <img class="add_photos__background" src="../static/images/photo.png" alt="пространство для фото">
                    <img class="add_photos__beat_pict" src="../static/images/text.png" alt="инконка фотки">
                     <input type="text" class="add_photos__button" id="addphoto"> 
                    <label for="addphoto" class="add_photos_button_element">
                        <img src="../static/images/Plus-square16.svg" alt="доб фото картинка">
                        Добавить фото
                     </label>
                </div>
            </div>
        
            <div class="wrapper-slider">
                <div class="slider<?= $imagesCount <= 1 ? 'single-image' : '' ?>">
                    <?php foreach ($images as $index => $image): ?>
                        <img class="contentpost__photo-size <?= $index === 0 ? 'active' : '' ?>" 
                             src="<?= htmlspecialchars($pathtoimage . $image) ?>" 
                             alt="Изображение поста <?= $index + 1 ?>">
                    <?php endforeach; ?>
                    
                    <?php if ($imagesCount >= 2): ?>
                        <div class="slider__photo-number">
                            <div class="slider__photo-number-flex">
                                <span class="slider__photo-number-text">1/<?= $imagesCount ?></span>
                            </div>
                        </div>
                        <button class="next-button" type="button" aria-label="Следующее фото">
                            <img src="../static/images/Sliderright.svg" alt="">
                        </button>
                        <button class="back-button" type="button" aria-label="Предыдущее фото">
                            <img src="../static/images/Sliderleft.svg" alt="">
                        </button>
                    <?php endif; ?>
                </div>
            </div>
          
            
            
        </div>
            <img class="placeForPhoto__photoIcon" src="../static/images/text.png" alt="инконка фотки">
            <div class="placeForPhoto__addPhoto">
                <input type="text" class="placeForPhoto__Addtext" id="addphoto"> 
                <label for="addphoto">
                    <img src="../static/images/Plus-square16.svg" alt="доб фото картинка">
                    Добавить фото
                </label>
            </div>
        <div class="placeForPhoto_addText">
            <input type="text" id="add_description"> 
            <label for="add_description"></label>
        </div>
             <div>
                <input type="text" id="share">
                <label for="share">Поделиться</label>
            </div>
        </form>
        </div>
    </div>
</body>
</html>
