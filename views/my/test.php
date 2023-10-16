<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<p>
    Имя: <?=$name?><br>
    Возраст: <?=$age . ' лет'?><br>
    Имущество: <?php
        for ($i=0; $i < count($items); $i++) {
            echo '<br>- ' . $items[$i];
        }
    ?>
</p>



<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>
