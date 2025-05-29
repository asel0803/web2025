<?php
function render($posts, $users) {
foreach ($posts as $post){

?>
<div class="post">
<div class="post__user-info">
    <div class="post_user">
        <img class = "post__avatarka" <?php $users[1]['avatar']?> alt="аватарка">
         <span class = "post__name"> <?php $users[1]['name']?> </span>
    </div>
    <img class = "post__correct" src="../static/images/correct.svg" alt="изменить пост">
         </div>
         <div class="post__slider">
                 <img class = "post__photo" src="../static/images/ <?php $post['image']?>"  alt="фото поста"> 
        </div>
         <div class="post__likes-info">
                <button class="post__likes-button">
        <img class = "post__likes" src="../static/images/like.png" alt="лайки">
        <span class = "post__counter_likes" >203</span>
        </button>
         </div>
            <p class = "post__text"> Так красиво сегодня на улице! Настоящая зима)) Вспоминается Бродский: «Поздно ночью, в уснувшей долине, на самом дне, в городке, занесенном снегом по ручку двери...» </p>
             <p class = "post__time"> 2 часа назад</p>
        </div>
</div>
<?php
}
}
?>