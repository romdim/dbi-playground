<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\TilesUsers $model
*/

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => 'Tiles Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud tiles-users-create">

    <p class="pull-left">
        <?= Html::a('Cancel', \yii\helpers\Url::previous(), ['class' => 'btn btn-default']) ?>
    </p>
    <div class="clearfix"></div>

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
