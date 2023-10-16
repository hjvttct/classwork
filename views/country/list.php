<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

?>
<h1>List</h1>

<table>
    <?php foreach ($modals as $modal): ?>
        <tr>
            <td><?= $modal->code ?></td>
            <td><?= $modal->name ?></td>
            <td><?= $modal->population ?></td>
        </tr>
    <?php endforeach; ?>
</table>
