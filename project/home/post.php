<?php 
function renderPost(array $data, array $user) {
    $pathtoimage = '../static/images/';
    $images = $data['images'] ?? [];
    $imagesCount = count($images);
    ?>
    <div class="post">
        <div class="post-header">
            <div class="user">
                <img class="user__avatar" 
                     src="<?= htmlspecialchars($pathtoimage . ($user['profile_image'] ?? 'default.jpg')) ?>" 
                     alt="Аватар пользователя">
                <a class="user__profile-name" 
                   href="../profile/?user_id=<?= htmlspecialchars($user['user_id'] ?? '') ?>">
                    <?= htmlspecialchars(($user['first_name'] ?? '') . ' ' . ($user['last_name'] ?? '')) ?>
                </a>
            </div>
            <img src="../static/images/correct.svg" alt="Иконка редактирования">
        </div>
        
        <div class="contentpost">
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

            <button class="contentpost__background-like" type="button">
                <img src="../static/images/like.png" alt="Иконка лайка">
                <span><?= htmlspecialchars($data['count_like'] ?? 0) ?></span>
            </button>
            
            <p class="contentpost__post-text">
                <?= nl2br(htmlspecialchars($data['content'] ?? '')) ?>
            </p>
            
            <p class="contentpost__time-text">
                <?php if (!empty($data['posted_at'])): ?>
                    <?= date('d.m.Y', strtotime($data['posted_at'])) ?>
                <?php else: ?>
                    <?= date('d.m.Y') ?>
                <?php endif; ?>
            </p>
        </div>
    </div>
    <?php
}
?>