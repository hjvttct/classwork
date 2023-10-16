<?php
use app\models\User;
use yii\helpers\Url;

?>


<table>    <?php foreach ($page  as $i => $model): ?>
        <tr>
            <td><?=$model->id;?></td>
            <td><?=$model->username;?></td>
            <td><?=$model->status;?></td>
            <td>
                <?php
                if ($page[$i]->status == '0'):                    {
                    echo '<a class="btn btn-danger" href="' . Url::to(["/site/up-status", "id" => $model->id]) . '">' . "Deactivate" . '</a>';                        }
                else:                    {
                    echo '<a class="btn btn-primary" href="' . Url::to(["/site/up-status", "id" => $model->id]) . '">' . "Activate" . '</a>';                        }
                endif;
                ?>
            </td>
        </tr>
    <?php endforeach;?>
</table>