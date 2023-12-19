<?php

/** @var yii\web\View $this */

use yii\bootstrap5\LinkPager;
use yii\helpers\Html;

$this->title = 'Мероприятия';
?>

<div class="Events">
    <h2 style="margin-bottom: 50px;">Мероприятия</h2>


    <?php foreach ($events as $event): ?>


       <div class="events">
           <div class="date-and-img">
               <h3 class="date"><?php echo $event->date; ?></h3>
               <img src="img/<?php echo $event->img; ?>" class="event-img" alt="...">
           </div>
           <div class="desc-and-btn">
               <p class="event-desc"><?php echo $event->description; ?></p>
               <a href="<?=\yii\helpers\Url::to(['events/view', 'id' => $event->id]) ?>">
                   <button class="btnn">
                       Подробнее
                   </button>
               </a>
           </div>
       </div>
    <?php endforeach;?>

   <div class="pagination">
       <?= LinkPager::widget(['pagination' => $pages])?>
   </div>
</div>
