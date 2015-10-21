<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Steps $model
*/

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => 'Steps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud steps-create">

    <p class="pull-left">
        <?= Html::a('Cancel', \yii\helpers\Url::previous(), ['class' => 'btn btn-default']) ?>
    </p>
    <div class="clearfix"></div>

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
