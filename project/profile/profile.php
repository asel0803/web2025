<?php
function renderProfile(array $data, array $images)
{
    $pathtoimage = '../static/images/';
    
    ?>
    <div class="profile">
        <img class="profile__image" src=<?php echo $pathtoimage . $data['profile_image'] ?> alt="Аватарка">
        <h1 class="profile__header"><?php echo $data['first_name'] . ' ' . $data['last_name'] ?></h1>
        <p class="profile__text"><?php echo $data['about'] ?></p>
        <div class="count-info">
            <img class="count-info__icon" src="../static/images/picture.svg" alt="иконка изображения">
            <span class="count-info__text"> <?php echo count($images) ?></span>
        </div>
    </div>
    <div class="content">
        <?php
        foreach($images as $image){
        ?>
            <img class="content-image" src=<?php echo $pathtoimage . $image[0] ?> alt="фотография книги">
        <?php //вывожу 0 пост, (первую картинку)
        }
        ?>
    </div>
    <?php
}
?>